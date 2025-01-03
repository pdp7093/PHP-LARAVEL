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
		//$this->conn=new mysqli('localhost','u291128029_rajvi','Rajvi@701','u291128029_rajvi');
		$this->conn=new mysqli('localhost','root','','Assign');
	}

    function select_where($tbl, $arr) {
        $column_arr = array_keys($arr);
        $values_arr = array_values($arr);
    
        $sel = "select * from $tbl where 1=1";  // 1=1 means query continue
        $i = 0;
        foreach ($arr as $w) {
            $sel .= " and $column_arr[$i]='$values_arr[$i]'";
            $i++;
        }
        $run = $this->conn->query($sel);  // query run on db
        return $run;
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
	
}
$obj=new model;
?>