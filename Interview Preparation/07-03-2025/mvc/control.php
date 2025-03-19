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
                $select = $this->select('product');
                include_once('index.php');

                break;
            case '/Login':
                if (isset($_REQUEST['submit'])) {
                     $email = $_REQUEST['email'];
                     $password = $_REQUEST['password'];

                    $data = array("email" => $email, "password" => $password);

                    $res = $this->select_where("admin", $data);
                    
                    $chk = $res->num_rows;

					if ($chk === 1) {
                        $fetch = $res->fetch_object();
                        
                        $_SESSION['name'] = $fetch->name;
                        $_SESSION['email'] = $fetch->email;

                        echo "<script>
							alert('Login successful !');
							window.location='index'
						</script>";
                    } else {
                        echo "<script>
                        alert('Login Un-successful !');
                        
                        
                    </script>";
                    
                    }
                }
                include_once('login.php');
                break;
            case '/Add Product':
                if (isset($_REQUEST['submit'])) {
                    $p_name = $_REQUEST['p_name'];
                    $p_category = $_REQUEST['p_category'];
                    $p_price = $_REQUEST['p_price'];

                    $data = array("p_name" => $p_name, "p_category" => $p_category, "p_price" => $p_price);

                    $res = $this->insert('product', $data);

                    if ($res) {
                        echo "<script>
                        alert('Insert SuccessFully');
                        window.location='/';
                        </script>";

                    } else {
                        echo "<script>
                        alert('Insert un-SuccessFully');
                        </script>";
                    }
                }
                include_once('add_product.php');
                break;

            case '/delete':
                if (isset($_REQUEST['delete'])) {
                    $id = $_REQUEST['delete'];

                    $data = array("id" => $id);

                    $res = $this->delete('product', $data);

                    if ($res) {
                        echo "<script>alert('Product Delete Successfully');
                        window.location='index';</script>";
                    } else {
                        echo "<script>
                        alert('Product UnDelete Successfully');
                        window.location='index';</script>";
                    }
                }
            break;

            case '/edit':
                if(isset($_REQUEST['edit']))
                {
                    $id=$_REQUEST['edit'];
                    $data=array("id"=>$id);
                    $res=$this->select_where('product',$data);
                    $fetch=$res->fetch_object();
                    if(isset($_REQUEST['update']))
                    {
                        $p_name = $_REQUEST['p_name'];
                        $p_category = $_REQUEST['p_category'];
                        $p_price = $_REQUEST['p_price'];
                        
                        $update = array("p_name" => $p_name, "p_category" => $p_category, "p_price" => $p_price);

                        $res1=$this->update_where('product',$update,$data);
                        if($res1)
                        {
                            echo "<script>
                            alert('Update SuccessFully');
                            window.location='index'</script>";
                        }
                    }
                    

                }
                include_once('edit.php');
            break;
//------------------------------------------------API------------------------------------------------
            case '/Fetch_all':
                $res=$this->select('product');
                $count=count($res);
                if($count>0)
                {
                    echo json_encode($res);
                }
                else
                {
                    echo json_encode(array("message"=>"No Product   Found","status"=>false));
                }
            break;
            case '/Fetch_single':
                $id=$_GET['id'];
                $where=array("id"=>$id);
                $chk=$this->select_where('product',$where);
                $res=$chk->fetch_object();
                //$count=count($res);
                if($res)
                {
                    echo json_encode($res);
                }
                else
                {
                    echo json_encode(array("message"=>"No Product Found","status"=>false));
                }
            break;
            case '/Api_create':
                $data=json_decode(file_get_contents("php://input"),true);

                $p_name=$data['p_name'];
                $p_category=$data['p_category'];
                $p_price=$data['p_price'];
                
                $insert=array("p_name"=>$p_name,"p_category"=>$p_category,"p_price"=>$p_price);

                $res=$this->insert('product',$insert);
                if($res)
                {
                    echo json_encode(array("message"=>"Insert Successfully","status"=>true));
                }
                else{
                    echo json_encode(array("message"=>"Insert Not Successfully","status"=>false));
                }
            break;

            case '/Fetch_delete':
                $id=$_GET['id'];
                $where=array("id"=>$id);
                $res=$this->delete('product',$where);
               // $res=$chk->fetch_object();
                //$count=count($res);
                if($res)
                {
                    echo json_encode(array("message"=>"Delete Successfully","status"=>true));
                }
                else
                {
                    echo json_encode(array("message"=>"Delete Not Successfully","status"=>false));
                }
            break;
            case '/Api_update':
                $data=json_decode(file_get_contents("php://input"),true);

                $id=$data['id'];
                $p_name=$data['p_name'];
                $p_category=$data['p_category'];
                $p_price=$data['p_price'];
                
                $where=array("id"=>$id);
                $update=array("p_name"=>$p_name,"p_category"=>$p_category,"p_price"=>$p_price);

                $res=$this->update_where('product',$update,$where);
                if($res)
                {
                    echo json_encode(array("message"=>"Update Successfully","status"=>true));
                }
                else{
                    echo json_encode(array("message"=>"Update Not Successfully","status"=>false));
                }
            break;
        }

    }
}

$obj = new control;
?>