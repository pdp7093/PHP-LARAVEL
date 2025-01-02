<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    
    require_once "db_config.php";
    
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = 'uploads/';
        $fileName = basename($_FILES['image']['name']);
        $targetFilePath = $uploadDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Create the uploads directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Validate file type
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($fileType, $allowedTypes)) {
            http_response_code(400);
            echo json_encode([
                "error" => "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed."
            ]);
            exit;
        }

        // Validate file size (max 5MB)
        if ($_FILES['image']['size'] > 5 * 1024 * 1024) {
            http_response_code(400);
            echo json_encode([
                "error" => "File size exceeds the 5MB limit."
            ]);
            exit;
        }

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
           
        } else {
            http_response_code(500);
            echo json_encode([
                "error" => "Failed to move the uploaded file."
            ]);
        }
    } else {
        http_response_code(400);
        echo json_encode([
            "error" => "No image uploaded or there was an error during upload."
        ]);
    }
} else {
    // Respond with an error message for unsupported methods
    http_response_code(405);
    echo json_encode([
        "error" => "Method not allowed!"
    ]);
}

?>