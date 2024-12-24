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
				include_once('index.php');
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
					$posting_date=$_REQUEST['posting_date'];
					$remark = $_REQUEST['remark'];

					$data = array("cust_id" => $cust_id, "number_of_guard" => $guard_no, "for_where" => $for_where, "address" => $address, "remarks" => $remark,"posting_date"=>$posting_date);

					$res = $this->insert('request', $data);

					if ($res) {
						echo "<script>
							alert('Request Submit successful !');
							window.location='Profile';
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
							window.location='Profile'
						</script>";
						}
						else
						{
							echo "<script>
							alert('Login Failed because, You Are Block');
							window.location='Profile'
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

			case '/Profile':

				$username = $_SESSION['username'];
				$data = array('username' => $username);
				$res = $this->select_where('customers', $data);
				$fetch = $res->fetch_object();
				$userid = $fetch->cust_id;
				$data1 = array("cust_id" => $userid);
				$res1 = $this->select_where('request', $data1);
				$fetch1 = [];
				if ($res1->num_rows > 0) {
					while ($row = $res1->fetch_object()) {
						$fetch1[] = $row;
					}

				}
				$gu_detail = $this->joins('posting', 'guards', 'customers', 'posting.gu_id=guards.gu_id', 'posting.cust_id=customers.cust_id', 'customers.cust_id', $userid);

				//Feedback & Complain Section

				//Feedback
				if(isset($_REQUEST['feedback']))
				{
					$cust_id=$_SESSION['userid'];
					$feedback=$_REQUEST['feedback'];
					$star=$_REQUEST['star'];
					$data=array("cust_id"=>$cust_id,"Star"=>$star,"feedback"=>$feedback);
					$res=$this->insert('feedback',$data);
					if($res)
					{
						echo"<script>
							alert('Your FeedBack Submit Successfully');
							window.location='Profile';
						</script>";
					}
				}
				//Complain
				if(isset($_REQUEST['complain']))
				{
					$cust_id=$_SESSION['userid'];
					$gu_id=$_REQUEST['guard_name'];
					$complain=$_REQUEST['comment'];
					$data=array("cust_id"=>$cust_id,"gu_id"=>$gu_id,"complain"=>$complain);
					$res=$this->insert('complain',$data);
					if($res)
					{
						echo"<script>
							alert('Your Complain Submit Successfully');
							window.location='Profile';
						</script>";
					}
				}

				include_once('profile.php');
				break;
			case '/edit_profile':
				if (isset($_REQUEST['update'])) {
					$update = $_REQUEST['update'];
					$where = array("cust_id" => $update);
					$res = $this->select_where('customers', $where);
					$fetch = $res->fetch_object();
					$old_image = $fetch->image;

					if (isset($_REQUEST['submit'])) {
						$username = $_REQUEST['username'];
						$firstname = $_REQUEST['firstname'];
						$lastname = $_REQUEST['lastname'];
						$email = $_REQUEST['email'];
						$mobile_no = $_REQUEST['mobile_no'];

						$gender = $_REQUEST['gender'];
						$address = $_REQUEST['address'];
						if ($_FILES['image']['size'] > 0) {
							$image = $_FILES['image']['name'];
							$path = "images/Customer/" . $image;
							$tmp_img = $_FILES['image']['tmp_name'];
							move_uploaded_file($tmp_img, $path);

							$data = array("username" => $username, "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address, "image" => $image);

							$res = $this->update('customers', $data, $where);

							if ($res) {
								$_SESSION['username'] = $username;
								unlink("images/Customer/" . $old_image);
								echo "<script>
							alert('Upadte successful !');
							window.location='Profile';
						</script>";
							}
						} else {
							$data = array("username" => $username, "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "mobile_no" => $mobile_no, "gender" => $gender, "address" => $address);

							$res = $this->update('customers', $data, $where);

							if ($res) {
								$_SESSION['username'] = $username;
								echo "<script>
							alert('Upadte successful !');
							window.location='Profile';
							</script>";
							}
						}

					}
				}
				include_once('edit_profile.php');
				break;

			case '/logout':
				if (isset($_SESSION['username'])) {
					unset($_SESSION['username']);
					unset($_SESSION['userid']);
					echo "<script>alert('Logout Success');
						window.location='login';</script>";
				}
				break;
			case '/feedback':
				if(isset($_REQUEST['feedback']))
				{
					
					echo $cust_id=$_SESSION['userid'];
					echo $feedback=$_REQUEST['comment'];
				}
				
				/*if (isset($_REQUEST['submit'])) {
					$c_name = $_SESSION['userid'];
					$star = $_REQUEST['star'];
					$feedback = $_REQUEST['feedback'];

					$data = array("cust_id" => $c_name, "Star" => $star, "feedback" => $feedback);
					$res = $this->insert('feedback', $data);
					if ($res) {
						echo "<script>alert('Feedback Submit SuccessFully');
						window.location='Profile';</script>";

					}
				}
				*/
				break;
				
			case '/complain':

				if (isset($_REQUEST['complain'])) {
					$userid = $_SESSION['userid'];
					echo $guard_no = $_REQUEST['guard_name'];
					echo $comment = $_REQUEST['comment'];

					$data = array("cust_id" => $userid, "gu_id" => $guard_no, "complain" => $comment);
					$res=$this->insert('complain',$data);
					if($res)
					{
					echo "<script>alert('Complain Submit')
					window.location='Profile';</script>";
					}
					else
					{
						echo "<script>alert('Not Working')</script>";	
					}
				} else {
					echo "<script>alert('Not Working')</script>";
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