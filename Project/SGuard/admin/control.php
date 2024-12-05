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
			case '/login':
				if(isset($_REQUEST['login']))
				{
					//session_start();
					$email=$_REQUEST['email'];
					$password=$_REQUEST['password'];

					$data=array("email"=>$email,"password"=>$password);

					$res=$this->select_where('admin',$data);

					$chk=$res->num_rows;

					if($chk===1)
					{
						$fetch=$res->fetch_object();
						
							
							$_SESSION['email']=$email;
							
							echo "<script>
							alert('Login successful !');
							window.location='index'
						</script>";
						
					}
					else
					{
						echo "<script>
							alert('Login Failed due to Wrong Creadential !');
						</script>";
					}
				}
				include_once('login.php');
				break;

			case '/index':
				include_once('index.php');
				break;

			case '/Add Guard':
				if(isset($_REQUEST['submit']))
				{
					$full_name=$_REQUEST['full_name'];
					$email=$_REQUEST['email'];
					$mobile_no=$_REQUEST['mobile_no'];
					$gender=$_REQUEST['gender'];
					$address=$_REQUEST['address'];
					$id_proof=$_REQUEST['id_proof']['name'];
					$id_path = "../guards/" . $id_proof;
					$tmp_img = $_FILES['id_proof']['tmp_name'];
					move_uploaded_file($tmp_img, $id_path);
					$disability=$_REQUEST['disability'];
					$profile_image=$_REQUEST['profile_image']['name'];
					$path = "../guards/" . $profile_image;
					$profile_tmp_img = $_FILES['profile_image']['tmp_name'];
					move_uploaded_file($profile_tmp_img, $path);
					
					$data = array("full_name" => $full_name, "email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address"=>$address,"id_proof" => $id_proof, "disability" => $disability, "profile_image" => $profile_image);

					$res = $this->insert('guards', $data);

					if ($res) {
						echo "<script>
							alert('Add successful !');
							window.location='Add Guard';
						</script>";
					}
				}
				include_once('add_guard.php');
				break;

			case '/Manage Guard':
				$manage_guard = $this->select('guards');
				include_once('manage_guard.php');
				break;

			case '/Posting':
				include_once('posting.php');
				break;

			case '/Manage Customer':
				$manage_customer = $this->select('customers');
				include_once('manage_customer.php');
				break;

			case '/Add Employee':
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);
					$re_password = md5($_REQUEST['re_password']);

					if ($password == $re_password) {
						$data = array("name" => $name, "email" => $email, "password" => $password);
						$res = $this->insert('employee', $data);
						if ($res) {
							echo "<script>
							alert('Signin successful !');
						</script>";

						}

					}
				}
				include_once('add_employee.php');
				break;

			case '/Manage Emplpoyee':
				$manage_employee = $this->select("employee");
				include_once('manage_employee.php');
				break;

			case '/Manage Contact us':
				$manage_contact = $this->select('contact');
				include_once('manage_contact.php');
				break;

			case '/Hiring Request':
				include_once('hiring_request.php');
				break;

			case '/Manage Complain':
				include_once('manage_complain.php');

				break;

			case '/Manage Feedback':
				include_once('manage_feedback.php');
				break;

			case '/delete':
				if (isset($_REQUEST['del_contacts'])) {
					$id = $_REQUEST['del_contacts'];
					$where = array("con_id" => $id);
					$res = $this->delete_where('contact', $where);
					if ($res) {
						echo "<script>
							alert('Contact Deleted successful !');
							window.location='Manage Contact Us';
						</script>";
					}
				}
				if (isset($_REQUEST['del_customer'])) {
					$id = $_REQUEST['del_customer'];
					$where = array("cust_id" => $id);
					$res = $this->delete_where('customers', $where);
					if ($res) {
						echo "<script>
							alert('Customer Deleted successful !');
							window.location='Manage Customer';
						</script>";
					}

				}
				if (isset($_REQUEST['del_guard'])) {
					$id = $_REQUEST['del_guard'];
					$where = array("id" => $id);
					$res = $this->delete_where('dummy_customer', $where);
					if ($res) {
						echo "<script>
							alert('Customer Deleted successful !');
							window.location='Manage Guard';
						</script>";
					}

				}
				if (isset($_REQUEST['del_employee'])) {
					$id = $_REQUEST['del_employee'];
					$where = array("em_id" => $id);
					$res = $this->delete_where('employee', $where);
					if ($res) {
						echo "<script>
							alert('Customer Deleted successful !');
							window.location='Manage Employee';
						</script>";
					}

				}

				break;
			case '/logout':
				if(isset($_SESSION['email']))
				{
					unset($_SESSION['email']);
					
					echo "<script>alert('Logout Success');
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