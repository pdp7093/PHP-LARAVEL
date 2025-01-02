<?php 
	include_once('model.php');

	class control extends model
	{
		function __construct()
		{
			model::__construct();
			$url=$_SERVER['PATH_INFO'];

			switch ($url) {
				case '/login':
				include_once('index.php');
				break;
				
				default:
					// code...
					echo "404 Page Not Found";
					break;
			}
		}
	}
?>