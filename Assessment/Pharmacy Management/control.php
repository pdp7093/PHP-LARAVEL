<?php 
    class control
    {
        function __construct()
        {
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
