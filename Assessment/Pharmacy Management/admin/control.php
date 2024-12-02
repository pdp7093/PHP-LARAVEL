<?php
    include_once('../model.php');
class control extends model
{
    function __construct()
    {
        model :: __construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/dashboard':
                include_once('dashboard.php');
            break;

            case '/login':
                include_once('login.php');
            break;

            case '/Add Manager':
                include_once('add_manager.php');
            break;

            case '/Manage Manager':
                include_once('manage_manager.php');
            break;

            case '/Add Medicine':
                include_once('add_medicine.php');
            break;

            case '/Manage Medicine':
                include_once('manage_medicine.php');
            break;


            default:
                include_once('error.php');
            break;
        }
    }
}

$obj = new control;
?>