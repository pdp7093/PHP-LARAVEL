<?php 
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$data=json_decode(file_get_contents("php://input"),true);

$id=$data['sid'];
    
require_once "db_config.php";
$sel="select * from product where id='".$id."'";
$res=$conn->query($sel);


if($res)
{
   $fetch=$res->fetch_object();
    echo json_encode(array("message" => "Product Fetch Successfully", "status" => true));	
    echo $json_data = json_encode($fetch);
}
else
{
    echo json_encode(array("message" => "Product not Fetch Successfully", "status" => false));	
}
?>