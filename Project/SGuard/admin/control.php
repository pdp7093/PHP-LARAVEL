<?php
include_once('../model.php');
class control extends model
{
	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/index':
				include_once('index.php');
				break;

			case '/dashboard':
				include_once('dashboard.php');
				break;

			case '/Add Guard':
				include_once('add_guard.php');
				break;

			case '/Manage Guard':
				$manage_guard = $this->select('fake_table');
				include_once('manage_guard.php');
				break;

			case '/Posting':
				include_once('posting.php');
				break;

			case '/Manage Customer':
				$manage_customer = $this->select('dummy_customer');
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
				$manage_employee=$this->select("employee");
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
							window.location='Manage Contact us';
						</script>";
					}
				}
				if (isset($_REQUEST['del_customer'])) {
					$id = $_REQUEST['del_customer'];
					$where = array("id" => $id);
					$res = $this->delete_where('customer', $where);
					if ($res) {
						echo "<script>
							alert('Customer Deleted successful !');
							window.location='manage_contact';
						</script>";
					}

				}
				if (isset($_REQUEST['del_guard'])) {
					$id = $_REQUEST['del_guard'];
					$where = array("id" => $id);
					$res = $this->delete_where('customer', $where);
					if ($res) {
						echo "<script>
							alert('Customer Deleted successful !');
							window.location='manage_contact';
						</script>";
					}

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