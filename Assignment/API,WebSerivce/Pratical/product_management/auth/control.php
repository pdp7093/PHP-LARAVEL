<?php
include_once('model.php');
class control extends model
{
    function __construct()
    {
        model::__construct();
        $path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/login':
                $data = json_decode(file_get_contents("php://input"), true);
                $username = $data['username'];
                $password = $data['password'];
                
                $data = array("username" => $username, "password" => $password);
                $res = $this->select_where('user', $data);
                
                $chk = $res->num_rows;
                if ($chk > 0) {
                    $fetch = $res->fetch_object();
                   
                   
                    if ($fetch->password==$password) {
                        echo json_encode(array("message" => "User Login Successfully", "status" => true));
                    } else {
                        echo json_encode(array("message" => "Invalid Password", "status" => false));
                    }
                } else {
                    echo json_encode(array("message" => "No User Found.", "status" => false));
                }
                
                break;
            case '/create':
                $data = json_decode(file_get_contents("php://input"), true);
                $username = $data['Uusername'];
                $password = $data['Upassword'];
                $arr = array("username" => $username, "password" => $password);

                $res = $this->insert('user', $arr);
                
                if ($res) {
                   

                    echo json_encode(array("message" => "User Insert SuccessFully", "status" => true));
                } else {
                    echo json_encode(array("message" => "Not Inserted.", "status" => false));
                }
                break;

            default:
                echo json_encode(array("message" => "404 error "));
                break;
        }
    }
}

$obj = new control;
?>