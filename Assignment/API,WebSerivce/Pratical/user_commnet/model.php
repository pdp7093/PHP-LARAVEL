<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
class model
{
    public $conn="";
	
	function __construct()
	{
		
		$this->conn=new mysqli('localhost','root','','Assign');
	}
	function select($tbl)
	{
		$sel="select * from $tbl";  // query
		$run=$this->conn->query($sel);  // run on db
		while($fetch=$run->fetch_object()) // fetch all data from database
		{
			$arr[]=$fetch;
		}
		if(!empty($arr))
		{
			return $arr;
		}
	}
	function insert($tbl, $arr)
	{


		$col_arr = array_keys($arr);
		$col = implode(",", $col_arr);

		$value_arr = array_values($arr);
		$value = implode("','", $value_arr);

		$ins = "insert into $tbl ($col) values ('$value')";
		$run = $this->conn->query($ins);
		return $run;
	}
	function select_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$sel = "select * from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			$sel .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($sel);  // query run on db
		return $run;
	}
	function delete_where($tbl, $arr)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$del = "delete from $tbl where 1=1";  // 1=1 means query contnue
		$i = 0;
		foreach ($arr as $w) {
			$del .= " and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run = $this->conn->query($del);  // query run on db
		return $run;
	}

	function update($tbl, $arr, $where)
	{
		$column_arr = array_keys($arr);
		$values_arr = array_values($arr);

		$upt = "update $tbl set ";  // 1=1 means query contnue
		$i = 0;
		$count = count($arr);
		foreach ($arr as $w) {
			if ($count == $i + 1) {
				$upt .= " $column_arr[$i]='$values_arr[$i]'";
				$i++;
			} else {
				$upt .= " $column_arr[$i]='$values_arr[$i]',";
				$i++;
			}

		}
		$wcolumn_arr = array_keys($where);
		$wvalues_arr = array_values($where);

		$upt .= " where 1=1";  // 1=1 means query contnue
		$j = 0;
		foreach ($where as $w) {
			$upt .= " and $wcolumn_arr[$j]='$wvalues_arr[$j]'";
			$j++;
		}

		$run = $this->conn->query($upt);  // query run on db
		return $run;
	}

}
$obj=new model;
?>