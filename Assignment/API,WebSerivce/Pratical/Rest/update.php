<?php 
    header("Content-Type: application/json");
    header("Acess-Control-Allow-Origin: *");
    header("Acess-Control-Allow-Methods: DELETE");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $data=json_decode(file_get_contents("php://input"),true);

    $id=$data['sid'];
    $name=$data['sname'];
    $desp=$data['sdescription'];
    $price=$data['sprice'];

    require_once('db_config.php');

   $query = "UPDATE product SET  name='{$name}',description= '{$desp}',price= '{$price}' WHERE id='{$id}' ";

    if(mysqli_query($conn,$query))
    {
        echo json_encode(array("message" => "Product Update Successfully", "status" => true));
    }
    else
    {
        echo json_encode(array("message" => "Product Not Update Successfully", "status" => false));
    }
?>