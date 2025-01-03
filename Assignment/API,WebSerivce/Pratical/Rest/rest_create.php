<?php 
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"), true);

$name=$data['name'];
$desp=$data['description'];
$price=$data['price'];

require_once "db_config.php";

$query="insert into product(name,description,price)values('".$name."','".$desp."','$price')";

if(mysqli_query($conn,$query))
{
    echo json_encode(array("message" => "Product Inserted Successfully", "status" => true));	
}
else
{
    echo json_encode(array("message" => "Product Not Inserted Successfully", "status" => false));	
}
?>