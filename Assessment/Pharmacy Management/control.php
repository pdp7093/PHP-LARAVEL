<?php
include_once('model.php');
class control extends model
{
    function __construct()
    {
        model::__construct();
        $path = $_SERVER['PATH_INFO'];
        session_start();
        switch ($path) {
            case '/home':
                $manager_name = $this->select("manager");
                if (isset($_REQUEST['add_medicine'])) {
                    $medicine_name = $_REQUEST['medicine_name'];
                    $qty = $_REQUEST['qty'];
                    $chkqty = gettype($qty);
                    $added_date = $_REQUEST['added_date'];
                    // echo gettype($added_date);
					$userid=$_SESSION['userid'];
                    $price = $_REQUEST['price'];

                    $data = array("medicine_name" => $medicine_name, "qty" => $qty, "added_date" => $added_date, "added_by" =>$userid, "price" => $price);

                    $res = $this->insert('medicine', $data);

                    if ($res) {
                        echo "<script>
                            alert('Medicine Add SuccessFully ');
                            window.location='store';
                        </script>";
                    }
                }
                $manage_medicine = $this->select('medicine');

                if(isset($_REQUEST['delete']))
                {
                    $delete=$_REQUEST['medicine_name'];
                    //echo $delete;
                    $data=array('m_id'=>$delete);
                    $res=$this->delete_where('medicine',$data);
                    if($res)
                    {
                        echo "<script>
                        alert('Medicine Delete Successfully');
                        window.location='store';
                        </script>";
                    }
                }
                include_once('home.php');
                break;

            case '/store':
                $manage_medicine = $this->select('medicine');
                include_once('store.php');
                break;

            case '/login':
                if (isset($_REQUEST['login'])) {
                    $username = $_REQUEST['username'];
                    $password = $_REQUEST['password'];

                    $where = array("username" => $username, "password" => $password);
                    $res = $this->select_where('manager', $where);
                    $chk = $res->num_rows;
                    if ($chk == 1) {
                        $fetch = $res->fetch_object();
                        $userid=$fetch->id;
                        if ($fetch) {
                           
                            $_SESSION['username'] = $username;
                            $_SESSION['userid']=$userid;
                            echo "<script>
                                    alert('Login Successful');
                                    window.location='home';
                                </script>";
                        }
                    } else {
                        echo "<script>
                            alert('Login UnSuccessful');
                            window.location='login';
                        </script>";
                    }

                }
                include_once('login.php');
                break;

            case '/signup':
                if (isset($_REQUEST['submit'])) {
                    $fname = $_REQUEST['firstname'];
                    $lname = $_REQUEST['lastname'];
                    $pharmacy_name = $_REQUEST['pharmacy_name'];
                    $username = $_REQUEST['username'];
                    $password = $_REQUEST['password'];

                    $data = array("manager_name" => $fname . $lname, "pharmacy_name" => $pharmacy_name, "username" => $username, "password" => $password);
                    $res = $this->insert('manager', $data);

                    if ($res) {
                        echo "<script>
							alert('Signup successful !');
                            window.location='home';
						</script>";
                    }

                }
                include_once('signup.php');
                break;

          

                case '/logout':
                    if (isset($_SESSION['username'])) {
                        unset($_SESSION['username']);
                        unset($_SESSION['userid']);
                        echo "<script>alert('Logout Success');
                            window.location='login';</script>";
                    }
                   
                    break;
                
            default:

                include_once('error.php');
                break;
        }

    }
}

$obj = new control;
?>