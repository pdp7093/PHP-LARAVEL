<?php
include_once('../model.php');
class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/home':
                include_once('home.php');
                break;

            case '/login':
                if (isset($_REQUEST['login'])) {
                    $email = $_REQUEST['email'];
                    $password = $_REQUEST['password'];

                    $where = array("email" => $email, "password" => $password);

                    $res = $this->select_where('admin', $where);

                    $chk = $res->num_rows;

                    if ($chk == 1) {
                        $fetch = $res->fetch_object();
                        if ($fetch) {
                           
                            $_SESSION['adminemail'] = $email;
                            echo "<script>
                                alert('Login Successful');
                                window.location='home';
                            </script>";
                        }
						
                    }
					else
					{
						echo "<script>
							alert('fetch Not Working!');
							</script>";
					}	
                }
				else
				{
					echo "<script>
							alert('Login First!');
							</script>";
				}
                include_once('login.php');
                break;

            case '/signup':
                if (isset($_REQUEST['submit'])) {
                    $name = $_REQUEST['name'];
                    $email = $_REQUEST['email'];
                    $password = md5($_REQUEST['password']);

                    $data = array("name" => $name, "email" => $email, "password" => $password);

                    $res = $this->insert('admin', $data);

                    if ($res) {
                        echo "<script>
							alert('Register successful !');
							window.location='login';
						</script>";
                    }
                }
                include_once('signup.php');
                break;

            case '/Medicine':
                $manager_name = $this->select("manager");
                //Add Medicine
                if (isset($_REQUEST['add_medicine'])) {
                    $medicine_name = $_REQUEST['medicine_name'];
                    $qty = $_REQUEST['qty'];
                    $chkqty = gettype($qty);
                    $added_date = $_REQUEST['added_date'];
                    // echo gettype($added_date);
                    $added_by = $_REQUEST['added_by'];
                    $price = $_REQUEST['price'];

                    $data = array("medicine_name" => $medicine_name, "qty" => $qty, "added_date" => $added_date, "added_by" => $added_by, "price" => $price);

                    $res = $this->insert('medicine', $data);

                    if ($res) {
                        echo "<script>
                            alert('Medicine Add SuccessFully $chkqty ');
                            window.location='Medicine';
                        </script>";
                    }
                }

                //Manage Medicine
                $manage_medicine = $this->select('medicine');
                include_once('medicine.php');
                break;

            case '/Manager':
                if (isset($_REQUEST['add_manager'])) {
                    $manager_name = $_REQUEST['manager_name'];
                    $medicine_name = $_REQUEST['medicine_name'];
                    $pharmacy_name = $_REQUEST['pharmacy_name'];
                    $username = $_REQUEST['username'];
                    $password = md5($_REQUEST['password']);

                    $data = array("manager_name" => $manager_name, "pharmacy_name" => $pharmacy_name, "username" => $username, "password" => $password);
                    $res = $this->insert('manager', $data);

                    if ($res) {
                        echo "<script>
                        alert('Manager Add successful !');
                        window.location='Manager';
                    </script>";
                    }

                }

                //Manage Manager
                $manage_manager = $this->select('manager');

                include_once('manager.php');
                break;
            case '/delete':
                //Delete Manager
                if (isset($_REQUEST['del_manager'])) {
                    $id = $_REQUEST['del_manager'];
                    $where = array("id" => $id);
                    $res = $this->delete_where('manager', $where);
                    if ($res) {
                        echo "<script>
							alert('Manager Deleted successful !');
							window.location='Manager';
						</script>";
                    }
                }

                //Delete Medicine
                if (isset($_REQUEST['del_medicine'])) {
                    $id = $_REQUEST['del_medicine'];
                    $where = array("m_id" => $id);
                    $res = $this->delete_where('medicine', $where);
                    if ($res) {
                        echo "<script>
							alert('Medicine Deleted successful !');
							window.location='Medicine';
						</script>";
                    }
                }

                break;
				case '/logout':
				if(isset($_SESSION['adminemail']))
				{
					//$id = $_REQUEST['del_customer'];
					unset($_SESSION['adminemail']);
					
					echo "<script>alert('Logout Success');
						window.location='home';</script>";
				}
				else
				{
					echo "<script>alert('Session_not Found');
						window.location='index';</script>";
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