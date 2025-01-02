<?php 
header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



require_once "db_config.php";
$sel="select * from product";
$res=$conn->query($sel);


if($res)
{
    while ($fetch = $res->fetch_object()) {
		$arr[] = $fetch;
	}
    echo json_encode(array("message" => "Product Fetch Successfully", "status" => true));	
    echo $json_data = json_encode($arr);
}
else
{
    echo json_encode(array("message" => "Product not Fetch Successfully", "status" => false));	
}
?>