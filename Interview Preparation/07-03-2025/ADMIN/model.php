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
        $col=array_keys($arr);
        $val=array_values($arr);

        $upd="update $tbl set 1=1";
        $i=0;
        $count=count($arr);
        foreach($arr as $a)
        {
            if($count=$i+1)
            {
                $upd.=" and $col[$i]='$val[$i]'";
                $i++;
            }
            else
            {
                $upd.=" and $col[$i]='$val[$i]',";
                $i++;
            }
        }
        $upd.= "where 1=1";
        $j=0;
        $wcol=array_keys($where);
        $wval=array_values($where);
        foreach($where as $w)
        {
            $upd.="and $wcol[$j]='$wval[$j]'";
            $j++;
        }
        $run=$this->conn->query($upd);
        return $run;
    }
}

$obj=new model;
?>