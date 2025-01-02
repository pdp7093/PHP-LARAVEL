<?php
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data_arr = json_decode(file_get_contents("php://input"), true);
$uname = $data_arr["name"]; // value of pname
$usurname = $data_arr["surname"]; // value of price
$email = $data_arr['email'];
require_once "db_config.php";

$query = "insert into example(name,surname,email) values('" . $uname . "','" . $usurname . "','" . $email . "')";

if (mysqli_query($conn, $query) or die("Insert Query Failed")) {
	while ($fetch = $query->fetch_object()) {
		$arr[] = $fetch;
	}
	echo json_encode(array("message" => "Customer Inserted Successfully", "status" => true));
	echo $json_data = json_encode($arr);
} else {
	echo json_encode(array("message" => "Customer  Not Inserted ", "status" => false));
}


?>