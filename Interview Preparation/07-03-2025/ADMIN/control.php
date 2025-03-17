<?php
include_once('model.php');
class control extends model
{
    function __construct()
    {
        model::__construct();
        session_start();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/index':
                $pf=$this->select('product');
                include_once('index.php');
                break;

            case '/Login':
                if (isset($_REQUEST['login'])) {
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];

                    $data = array("email" => $email, "password" => $password);

                    $res = $this->select_where('admin', $data);

                    $chk = $res->num_rows;

                    if ($chk) {
                        $fetch = $res->fetch_object();
                        $_SESSION['email'] = $fetch->email;
                        echo "<script>alert('Login Success');
                        window.location='index';</script>";
                    } else {
                        echo "<script>alert('Login Not-Success');</script>";
                    }
                }
                include_once('login.php');
                break;
            case '/Add Product':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $qty = $_REQUEST['qty'];
                    $price = $_REQUEST['price'];

                    $data = array("name" => $name, "qty" => $qty, "price" => $price);
                    $res = $this->insert('product', $data);
                    if ($res) {
                        echo "<script>alert('Insert Success');
                        window.location='index';</script>";
                    }
                }
                include_once('add_product.php');
            break;

            case '/edit':
                if(isset($_REQUEST['edit']))
                {
                    $id=$_REQUEST['edit'];
                    $where=array("id"=>$id);

                    $res=$this->select_where('product',$where);
                    $p=$res->fetch_object();

                    if(isset($_REQUEST['submit']))
                    {
                        $name = $_REQUEST['name'];
                        $qty = $_REQUEST['qty'];
                        $price = $_REQUEST['price'];

                    }
                }
                include_once('update.php');
            break;

            //Api Routes

            case '/api_fetch_all':
                $sel=$this->select('product');
                $count=count($sel);
                if($count>0)
                {
                    echo json_encode($sel);
                }
                else
                {
                    echo json_encode(array("message"=>"No Record Found","status"=>false));
                }    
            break;

            case '/api_fetch_single':
                $id = $_GET['id'];
				
				$where=array("id"=>$id);
				$chk=$this->select_where('product',$where);
				$res=$chk->fetch_object();
				if(isset($res))
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No Product Found.", "status" => false));
				}

            break;

            case '/api_create':
                $data=json_decode(file_get_contents("php://input"),true);

                $name=$data->name;
                $qty=$data->qty;
                $price=$data->price;
                $image=$data->image;

                $arr=array("name"=>$name,"qty"=>$qty,"price"=>$price,"image"=>$image);

                $res=$this->insert('product',$arr);
                if($res)
                {
                    echo json_encode(array("message"=>"Insert Successfully","status"=>true));
                }
                else
                {
                    echo json_encode(array("message"=>"Insert Failed","status"=>false));
                }
            break;

            case '/api_delete':
                $id=$_GET['id'];
                $where=array("id"=>$id);
                $res=$this->delete('product',$where); 
                if($res or die("Delete Query Failed"))
                {	
					echo json_encode(array("message" => "Prodcut Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Product Not Deleted", "status" => false));	
				}
            break;

            case '/api_update':
                $data=json_decode(file_get_contents("php://input"));
                $id=$data->id;
                $name=$data->name;
                $qty=$data->qty;
                $price=$data->price;
                $image=$data->image;

                $where=array("id"=>$id);
                $arr=array("name"=>$name,"qty"=>$qty,"price"=>$price,"image"=>$image);
                $res=$this->update_where('blog',$arr,$where);
				
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "Product Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed Product Not Update", "status" => false));	
				}
            break;
        }
    }
}

$obj = new control;
?>