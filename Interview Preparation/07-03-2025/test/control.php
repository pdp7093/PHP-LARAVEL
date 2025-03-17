<?php
include_once('model.php');

class control extends model
{
    function __construct()
    {
        model::__construct();
        session_start();
        error_reporting(0);
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/index':
                $fetch = $this->select('product');
                include_once('index.php');

                break;

            case '/Login':
                if (isset($_REQUEST['login'])) {
                    $email=$_REQUEST['email'];
					$password=$_REQUEST['password'];

					$where=array("email"=>$email,"password"=>$password);
					
					$res=$this->select_where('admin',$where);
					
					$chk=$res->num_rows; 
                   
					if($chk===1) 
					{
                        $_SESSION['email']=$email;
                        echo "<script>
                            alert('Login Success');
                            window.location='index'</script>";
                    } else {
                        echo "<script>
                            alert('Login Error');
                            
                            </script>";
                            
                    }
                }
                include_once('login.php');
                break;

            case '/Add Product':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $qty = $_REQUEST['qty'];
                    $price = $_REQUEST['price'];

                    $image = $_FILES['image']['name'];
                    $path = "image/" . $image;
                    $tmp_img = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tmp_img, $path);

                    $data = array("name" => $name, "qty" => $qty, "price" => $price, "image" => $image);

                    $res = $this->insert('product', $data);
                    if ($res) {
                        echo "<script>
                            alert('Product Insert Success');
                            window.location='index'</script>";
                    } else {
                        echo error_reporting();
                    }
                }
                include_once('add_product.php');
                break;

            case '/delete':
                if (isset($_REQUEST['delete'])) {
                    $id = $_REQUEST['delete'];
                    $data = array("id" => $id);
                    $res1=$this->select_where('product',$data);
                    $fetch=$res1->fetch_object();
                    $res = $this->delete('product', $data);
                    if ($res) {
                        echo "<script>
                            alert('Product Delete Success');
                            window.location='index'</script>";
                        unlink("image/".$fetch->image);
                    }   
                }
                break;
            case '/edit':
                if (isset($_REQUEST['edit'])) {
                    $id = $_REQUEST['edit'];
                    $where = array("id" => $id);

                    $res = $this->select_where('product', $where);
                    $fetch = $res->fetch_object();
                    $o_i=$fetch->image;
                    if (isset($_REQUEST['update'])) {
                        $name = $_REQUEST['name'];
                        $qty = $_REQUEST['qty'];
                        $price = $_REQUEST['price'];

                        if ($_FILES['image']['size'] > 0) {
                            $name = $_REQUEST['name'];
                            $qty = $_REQUEST['qty'];
                            $price = $_REQUEST['price'];

                            $image = $_FILES['image']['name'];
                            $path = "image/" . $image;
                            $tmp_img = $_FILES['image']['tmp_name'];
                            move_uploaded_file($tmp_img, $path);

                            $data = array("name" => $name, "qty" => $qty, "price" => $price, "image" => $image);

                            $res=$this->update('product',$data,$where);
                            if ($res) {
                                echo "<script>
                                    alert('Product Update Success');
                                    window.location='index'</script>";
                                unlink("image/".$o_i);
                            }
                        }
                        else{
                            $data = array("name" => $name, "qty" => $qty, "price" => $price);

                            $res=$this->update('product',$data,$where);
                            if ($res) {
                                echo "<script>
                                    alert('Product Update Success');
                                    window.location='index'</script>";
                            }
                        }
                    }
                }
                include_once('edit.php');
            break;
            case '/Logout':
                    if($_SESSION['email'])
                    {
                        session_destroy();
                        echo "<script>alert('Logout Success');
                        window.location='index';</script>";
                    }
            break;
        }
    }
}

$obj = new control;
?>