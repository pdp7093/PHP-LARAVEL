<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: *");
class model
{
    public $conn='';

    function __construct()
    {
        $this->conn=new mysqli('localhost','root','','test');
    }

    function select($tbl)
    {
        $sel="select * from $tbl";

        $run=$this->conn->query($sel);

        while($fetch=$run->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    function select_where($tbl,$arr)
    {
        $column_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$sel="select * from $tbl where 1=1";  // 1=1 means query contnue
		$i=0;
		foreach($arr as $w)
		{
			$sel.=" and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // query run on db
		return $run;
    }
    function delete($tbl,$arr)
    {
        $column_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$sel="delete from $tbl where 1=1";  // 1=1 means query contnue
		$i=0;
		foreach($arr as $w)
		{
			$sel.=" and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($sel);  // query run on db
		return $run;
    }

    function insert($tbl,$arr)
    {
        $column=array_keys($arr);
        $col=implode(",",$column);

        $value=array_values($arr);
        $val=implode("','",$value);

        $ins="insert into $tbl ($col) values ('$val')";

        $run=$this->conn->query($ins);

        return $run;

    }

    function update($tbl,$arr,$where)
    {
        $col_arr=array_keys($arr);
		$value_arr=array_values($arr);
		$j=0;
		$upd="update $tbl set";  
		$count=count($arr);
		foreach($arr as $d)
		{
			if($count==$j+1)
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]'";
			}
			else
			{
				$upd.=" $col_arr[$j]='$value_arr[$j]',";
				$j++;
			}			
		}
		$upd.=" where 1=1";
		$col_where=array_keys($where);
		$value_where=array_values($where);
		$i=0;
		foreach($where as $w)
		{
			$upd.=" and $col_where[$i]='$value_where[$i]'";
			$i++;
		}
		$run=$this->conn->query($upd); 
		return $run;
    }
}

$obj=new model;
?>