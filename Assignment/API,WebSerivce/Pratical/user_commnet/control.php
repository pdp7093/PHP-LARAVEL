<?php
include_once('model.php') ;
class control extends model
{
    function __construct()
    {
        model::__construct();
		$path = $_SERVER['PATH_INFO'];

        switch ($path) {
            case '/create':
                $data = json_decode(file_get_contents("php://input"), true);

                $username=$data['username'];
                $comment=$data['comment'];
               
                
                $arr=array("username"=>$username,"comment"=>$comment,);
                $res=$this->insert('comment',$arr);
                if($res)
                {
                    echo json_encode(array("message" => "comment Inserted Successfully", "status" => true));	
                }
                else
                {
                    echo json_encode(array("message" => "comment Not Inserted Successfully", "status" => false));	
                }
                
                break;
            case '/delete':
               
                $id=$_GET['id'];
                $arr=array("id"=>$id);
                $res=$this->delete_where('comment',$arr);
                if($res)
                {
                    echo json_encode(array("message" => "comment Delete Successfully", "status" => true));	
                }
                else
                {
                    echo json_encode(array("message" => "comment Not Delete Successfully", "status" => false));	
                }
            break;
            case '/fetch_all':
                $res=$this->select('comment');
				$count=count($res); // data count
				if($count > 0)
				{	
					echo json_encode($res);
				}
				else
				{	
					echo json_encode(array("message" => "No comment Found.", "status" => false));
				}
                break;

            case '/fetch_single':
                $id=$_GET['id'];
                $arr=array("id"=>$id);
                $res=$this->select_where('comment',$arr);
                $fetch=$res->fetch_object();
                if($res)
                {
                    echo json_encode(array("message" => "comment Fetch Successfully", "status" => true));
                    echo json_encode($fetch);
                }
                else
                {
                    echo json_encode(array("message" => "comment Not Fetch Successfully", "status" => false));	
                }
                break;

            case '/update':
                $data=json_decode(file_get_contents("php://input"),true);

                $id=$data['sid'];
                $username=$data['susername'];
                $comment=$data['comment'];
               
                
                $where=array("id"=>$id);

                $arr=array("username"=>$username,"comment"=>$comment,);
                $query = $this->update('comment',$arr,$where);

                if($query)
                {
                    echo json_encode(array("message" => "comment Update Successfully", "status" => true));
                }
                else
                {
                    echo json_encode(array("message" => "comment Not Update Successfully", "status" => false));
                }
                break;
            default:
                # code...
                break;
        }
    }
}

$obj=new control;
?>