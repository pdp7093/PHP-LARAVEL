<?php
class model
{
    public $conn = "";

    function __construct()
    {
        $this->conn = new Mysqli('localhost', 'root', '', 'pharmacy_system');
    }

    function select($tbl)
    {
        $sel="select * from $tbl";
        $res=$this->conn->query($sel);
        while($fetch=$res->fetch_object())
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    function insert($tbl, $arr)
    {
        $col_arr = array_keys($arr); 
        $col = implode(",", $col_arr);

        $value_arr = array_values($arr);
        $value = implode("','", $value_arr); 

        $ins = "insert into $tbl ($col) values ('$value')";   // query
        $run = $this->conn->query($ins);  // run 
        return $run;
    }

    //use for login
    function select_where($tbl,$arr)
    {
        $col_arr=array_keys($arr);
        $col_val=array_values($arr);

        $s_where="select * from $tbl where 1=1";
        $i=0;
        foreach($arr as $w)
        {
             $s_where.=" and $col_arr[$i]='$col_val[$i]'";
            $i++;
        }
        $run=$this->conn->query($s_where);
        return($run);
    }

    function delete_where($tbl,$arr)
	{
		$column_arr=array_keys($arr);
		$values_arr=array_values($arr);
		
		$del="delete from $tbl where 1=1";  // 1=1 means query contnue
		$i=0;
		foreach($arr as $w)
		{
			echo $del.=" and $column_arr[$i]='$values_arr[$i]'";
			$i++;
		}
		$run=$this->conn->query($del);  // query run on db
		return $run;
	}
}
    

$obj = new model;
?>