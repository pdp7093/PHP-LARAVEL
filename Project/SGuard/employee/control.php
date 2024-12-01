<?php 
	include_once('../model.php');
	class control extends model
	{
		function __construct()
		{
			model::__construct();
			$path=$_SERVER['PATH_INFO'];

			switch($path)
			{
				case '/index':
					include_once('index.php');
				break;
				
				case '/Dashboard':
					include_once('dashboard.php');
				break;
				
				case '/Add Guard':
					include_once('add_guard.php');				
				break;

				case '/Manage Guard':
					$manage_guard=$this->select('fake_table');
					include_once('manage_guard.php');
				break;

				case '/Posting':
					include_once('posting.php');
				break;

				case '/Manage Customer':
					$manage_customer = $this->select('dummy_customer');
					include_once('manage_customer.php');
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

				default:
					include_once('error.php');
				break;
			}
		}
		
	}

$obj=new control;
?>