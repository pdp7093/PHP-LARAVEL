<?php
class model
{
	public $conn = "";
	function __construct()
	{
		$this->conn = new Mysqli('localhost', 'root', '', 'security_hiring');
	}
	//select function
	function select($tbl)
	{

		$sel = "select * from $tbl";   // query
		$run = $this->conn->query($sel);  // run 
		while ($fetch = $run->fetch_object()) {

			$arr[] = $fetch;
		}
		return $arr;

	}
	
	//insert function
	function insert($tbl,$arr)
	{
		$col_arr=array_keys($arr);
		$col=implode(",",$col_arr);
		
		$value_arr=array_value($arr);
		$value=implode(",",$value_arr);
		
		$ins="insert into $tbl ($col) values ('$value')";
		
		$run=$this->conn->query($ins);
	}
}

$obj = new model;
?>