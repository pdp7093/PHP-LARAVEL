<?php
include_once('model.php');
class control extends model
{
	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];
		session_start();
		error_reporting(0);

		switch ($path) {
			case '/home':
				include_once('home.php');
				break;

			case '/about':
				$feedback = $this->select('fake_table');
				include_once('about.php');
				break;

			case '/service':
				

				if (isset($_REQUEST['submit']) && $_SESSION['userid']) {
					//echo $_SESSION['userid'];
					$cust_id = $_SESSION['userid'];
					$guard_no = $_REQUEST['guard_no'];
					$for_where = $_REQUEST['where'];
					$address = $_REQUEST['address'];
					$remark = $_REQUEST['remark'];

					$data = array("cust_id" => $cust_id, "number_of_guard" => $guard_no, "for_where" => $for_where, "address" => $address, "remarks" => $remark);

					$res = $this->insert('request', $data);

					if ($res) {
						echo "<script>
							alert('Request Submit successful !');
							window.location='Profile Page';
						</script>";
					} else {
						echo "<script>
							alert('Enter Detail Properly !');
							
						</script>";
					}
				} 
				

				include_once('service.php');
				break;

			case '/blog':
				include_once('blog.php');
				break;

			case '/contact':

				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$mobile_no = $_REQUEST['mobile_no'];
					$comment = $_REQUEST['comment'];

					$data = array("name" => $name, "email" => $email, "mobile_no" => $mobile_no, "comment" => $comment);

					$res = $this->insert('contact', $data);
					if ($res) {
						echo "<script>
							alert('Contact successful !');
							
						</script>";

					}

				}
				include_once('contact.php');
				break;

			case '/login':
				if (isset($_REQUEST['login'])) {
					session_start();
					$username = $_REQUEST['username'];
					$password = md5($_REQUEST['password']);

					$data = array("username" => $username, "password" => $password);

					$res = $this->select_where('customers', $data);

					$chk = $res->num_rows;

					if ($chk === 1) {
						$fetch = $res->fetch_object();
						$status = $fetch->status;
						if ($status == 'unblock') {

							$_SESSION['username'] = $username;
							$_SESSION['userid'] = $fetch->cust_id;
							echo "<script>
							alert('Login successful !');
							window.location='Profile Page'
						</script>";
						}
					} else {
						echo "<script>
							alert('Login Failed due to Wrong Creadential !');
						</script>";
					}
				}
				include_once('login.php');
				break;

			case '/signup':
				if (isset($_REQUEST['submit'])) {
					$username = $_REQUEST['username'];
					$firstname = $_REQUEST['firstname'];
					$lastname = $_REQUEST['lastname'];
					$email = $_REQUEST['email'];
					$mobile_no = $_REQUEST['mobile_no'];
					$password = md5($_REQUEST['password']);
					$gender = $_REQUEST['gender'];
					$address = $_REQUEST['address'];

					$image = $_FILES['image']['name'];
					$path = "images/Customer/" . $image;
					$tmp_img = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					$data = array("username" => $username, "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "mobile_no" => $mobile_no, "password" => $password, "gender" => $gender, "address" => $address, "image" => $image);

					$res = $this->insert('customers', $data);

					if ($res) {
						echo "<script>
							alert('Signup successful !');
							window.location='login';
						</script>";
					}

				}

				include_once('signup.php');
				break;

			case '/Profile Page':

				$username = $_SESSION['username'];
				$data = array('username' => $username);
				$res = $this->select_where('customers', $data);
				$fetch = $res->fetch_object();
				$data1=array("cust_id"=>$_SESSION['userid']);
				$res1=$this->select_where('request',$data1);
				$chk=$res->num_rows;
				
				include_once('profile.php');
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