<?php 

header("Content-Type: application/json");
header("Acess-Control-Allow-Origin: *");
header("Acess-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$conn=new Mysqli('localhost','root','','test');

$sel="select * from example";
$res=$conn->query($sel);

while($fetch=$res->fetch_object())
{
    $arr[]=$fetch;
}
echo $json_data=json_encode($arr);
?>