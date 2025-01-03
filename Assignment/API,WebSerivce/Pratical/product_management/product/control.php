<?php
include_once('model.php') ;
class control extends model
{
    function __construct()
    {
        model::__construct();
		$path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/create':
                $data = json_decode(file_get_contents("php://input"), true);

                $name=$data['name'];
                $desp=$data['description'];
                $price=$data['price'];
                
                $arr=array("name"=>$name,"description"=>$desp,"price"=>$price);
                $res=$this->insert('product',$arr);
                if($res)
                {
                    echo json_encode(array("message" => "Product Inserted Successfully", "status" => true));	
                }
                else
                {
                    echo json_encode(array("message" => "Product Not Inserted Successfully", "status" => false));	
                }
                
                break;
            case '/delete':
                $data=json_decode(file_get_contents("php://input"),true);
                $id=$data['id'];
                $arr=array("id"=>$id);
                $res=$this->insert('product',$arr);
                if($res)
                {
                    echo json_encode(array("message" => "Product Delete Successfully", "status" => true));	
                }
                else
                {
                    echo json_encode(array("message" => "Product Not Delete Successfully", "status" => false));	
                }
            break;
            case '/fetch_all':
                $res=$this->select('product');
                if($res)
                {
                    echo json_encode(array("message" => "Product Fetch Successfully", "status" => true));
                    echo json_encode($res);
                }
                else
                {
                    echo json_encode(array("message" => "Product Not Fetch Successfully", "status" => false));	
                }
                break;

            case '/fetch_single':
                $id=$_GET['id'];
                $arr=array("id"=>$id);
                $res=$this->select_where('product',$arr);
                if($res)
                {
                    echo json_encode(array("message" => "Product Fetch Successfully", "status" => true));
                    echo json_encode($res);
                }
                else
                {
                    echo json_encode(array("message" => "Product Not Fetch Successfully", "status" => false));	
                }
                break;
            default:
                # code...
                break;
        }
    }
}

$obj=new control;
?>