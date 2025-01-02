<?php
include_once('model.php');

class control extends model
{
	function __construct()
	{
		model::__construct();
		$url = $_SERVER['PATH_INFO'];

		switch ($url) {
			//Display All Student Record
			case '/index':
				$res = $this->select('student');
				$count = count($res);
				if ($count > 0) {
					echo json_encode($res);
				} else {
					echo json_encode(array("message" => "No Student Detail Found.", "status" => false));
				}
				break;
				
				//Display single Record

				case '/fetch_single':
					$id=$_GET['id'];
					$where=array("id"=>$id);
				//$id=$data['sid'];
					$select=$this->select_where('student',$where);	
					
					$res=$select->fetch_object();
					if ($res) {
						echo json_encode(array("message"=>"Student Fetch Success","status"=>true));
						echo json_encode($res);
					} else {
						echo json_encode(array("message" => "No Student Detail Found.", "status" => false));
					}
					break;
				//Create Student Record
			case '/create':
				$data = json_decode(file_get_contents("php://input"), true);
				$name = $data['sname'];
				$course = $data['scourse'];

				$arr = array("name" => $name, "course" => $course);

				$res = $this->insert('student', $arr);
				if ($res) {
					echo json_encode(array("message" => "Student Insert Successfully", "status" => true));
				} else {
					echo json_encode(array("message" => "Student Not Insert Successfully", "status" => false));
				}

				break;
			//Delete Student Record
			case '/delete':
				$id = $_GET['id'];
				$where=array("id"=>$id);
				//$id=$data['sid'];
				$select=$this->select_where('student',$where);
				$fetch=$select->fetch_object();

				if($fetch)
				{
					echo json_encode(array("message" => "Student Record Fetch Successfully", "status" => true));
					$res = $this->delete('student',$where);
					if ($res) {
						echo json_encode(array("message" => "Student Delete Successfully", "status" => true));
					} else {
						echo json_encode(array("message" => "Student Not Delete Successfully", "status" => false));
					}

				}
				else {
					echo json_encode(array("message" => "Student Not in the Record", "status" => false));
				}

				
				break;

				//Update Student Record
			case '/update':
				$data = json_decode(file_get_contents("php://input"), true);
				$id=$data['sid'];
				$name = $data['sname'];
				$course = $data['scourse'];
				$arr = array("name" => $name, "course" => $course);
				$where=array("id"=>$id);

				$res = $this->update('student',$arr,$where);
				if ($res) {
					echo json_encode(array("message" => "Student Update Successfully", "status" => true));
				} else {
					echo json_encode(array("message" => "Student Not Update Successfully", "status" => false));
				}

				break;
			default:
				// code...
				echo "404 Page Not Found";
				break;
		}
	}
}

$obj = new control;
?>