<?php
include_once('model.php');
class control extends model
{
	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/home':
				include_once('home.php');
				break;

			case '/about':
				$feedback = $this->select('fake_table');
				include_once('about.php');
				break;

			case '/service':
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
					$path = "images/dummy/" . $image;
					$tmp_img = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					$data = array("username" => $username, "firstname" => $firstname, "lastname" => $lastname, "email" => $email, "mobile_no" => $mobile_no, "password" => $password, "gender" => $gender, "address" => $address, "image" => $image);

					$res = $this->insert('dummy_customer', $data);

					if ($res) {
						echo "<script>
							alert('Signup successful !');
						</script>";
					}

				}

				include_once('signup.php');
				break;

			case '/Profile Page':
				include_once('profile.php');
				break;


			default:
				include_once('error.php');
				break;
		}
	}

}

$obj = new control;
?>