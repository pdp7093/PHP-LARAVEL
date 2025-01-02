<?php

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$data = json_decode(file_get_contents("php://input"), true);



if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check if the custom header exists
    $headers = getallheaders();
    if (isset($headers['X-Custom-Header'])) {
        // Respond with the header value
        echo json_encode([
            "message" => "Custom header received!",
            "header_value" => $headers['X-Custom-Header']
        ]);
    } else {
        // Respond with an error message if the header is missing
        http_response_code(400);
        echo json_encode([
            "error" => "Custom header 'X-Custom-Header' not found!"
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
