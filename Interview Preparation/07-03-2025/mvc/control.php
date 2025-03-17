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

        }

    }
}

$obj = new control;
?>