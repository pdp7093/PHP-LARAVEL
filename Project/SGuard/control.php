<?php 
	class control
	{
		function __construct()
		{
			$path=$_SERVER['PATH_INFO'];

			switch($path)
			{
				case '/home':
					include_once('home.php');
				break;
				
				case '/about':
					include_once('about.php');
				break;
				
				case '/service':
					include_once('service.php');				
				break;

				case '/blog':
					include_once('blog.php');
				break;

				case '/contact':
					
					if(isset($_REQUEST['contact_submit']))
					{
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						$m_no=$_REQUEST['m_no'];
						$message=$_REQUEST['message'];
						
						$data=array("name"=>$name,"email",$email,"mobile_no"=>$m_no,"comment"=>$message);
						
						$res=$this->insert('contacts',$data);
						if($res)
						{
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
					include_once('signup.php');
				break;

				default:
					include_once('error.php');
				break;
			}
		}
		
	}

$obj=new control;
?>