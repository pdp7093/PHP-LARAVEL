<?php 
	include_once('model.php');

	class control extends model
	{
		function __construct()
		{
			model::__construct();
			$url=$_SERVER['PATH_INFO'];

			switch ($url) {
				case '/read':
				$res=$this->select('student');
				$count=count($res);
				if($count>0)
				{
					echo json_encode($res);
				}
				else
				{
					echo json_encode(array("message"=>"No Student Detail Found.","status"=>false));
				}
				break;
				
				default:
					// code...
					echo "404 Page Not Found";
					break;
			}
		}
	}
?>