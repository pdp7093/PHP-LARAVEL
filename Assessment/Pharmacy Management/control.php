<?php 
    include_once('model.php');
    class control extends model
    {
        function __construct()
        {
            model ::__construct();
            $path=$_SERVER['PATH_INFO'];
            
            switch($path)
            {
                case'/home':
                    include_once('home.php');
                break;

                case '/store':
                    include_once('store.php');
                break;
                
                case '/login':
                    include_once('login.php');
                break;

                case '/signup':
                    if(isset($_REQUEST['submit']))
                    {
                        $fname=$_REQUEST['firstname'];
                        $lname=$_REQUEST['lastname'];
                        $pharmacy_name=$_REQUEST['pharmacy_name'];
                        $username=$_REQUEST['username'];
                        $password=$_REQUEST['password'];

                        $data=array("manager_name"=>$fname.$lname,"pharmacy_name"=>$pharmacy_name,"username"=>$username,"password"=>$password);
                        $res = $this->insert('manager', $data);

					if ($res) {
						echo "<script>
							alert('Signup successful !');
                            window.location='home';
						</script>";
					}

                    }
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
