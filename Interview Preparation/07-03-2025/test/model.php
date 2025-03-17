<?php
class model
{
    public $conn = '';

    function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'test');
    }

    function select($tbl)
    {
        $sel = "select * from $tbl";
        $res = $this->conn->query($sel);

        while ($fetch = $res->fetch_object()) {
            $arr[] = $fetch;
        }
        return $arr;
    }

    function select_where($tbl, $arr)
    {
        $col = array_keys($arr);
        $val = array_values($arr);

        $sel = "select * from $tbl where 1=1";
        $i = 0;
        foreach ($arr as $w) {
            $sel .= " and $col[$i]='$val[$i]'";
            $i++;
        }
        $run = $this->conn->query($sel);
        return $run;
    }
    function insert($tbl,$arr)
    {
        $column_arr = array_keys($arr);
        $col=implode(",",$column_arr);
        $values_arr = array_values($arr);
        $val=implode("','",$values_arr);

        $insert="insert into $tbl($col) values ('$val')";
        $run=$this->conn->query($insert);
        return $run;
    }
    function delete($tbl,$arr)
    {
        $column_arr = array_keys($arr);
        $values_arr = array_values($arr);

        $del = "delete from $tbl where 1=1";
        $i = 0;
        foreach ($arr as $w) {
            $del .= " and $column_arr[$i]='$values_arr[$i]'";
            $i++;
        }
        $run = $this->conn->query($del);
        return $run;
    }

    function update($tbl, $arr, $where)
	{
		$col= array_keys($arr);
		$val = array_values($arr);

		$upt = "update $tbl set ";  
		$i = 0;
		$count = count($arr);
		foreach ($arr as $w) {
			if ($count == $i + 1) {
				$upt .= " $col[$i]='$val[$i]'";
				$i++;
			} else {
				$upt .= " $col[$i]='$val[$i]',";
				$i++;
			}

		}
		$column_arr = array_keys($where);
		$values_arr = array_values($where);

		$upt .= " where 1=1";  
		$j = 0;
		foreach ($where as $w) {
			$upt .= " and $column_arr[$j]='$values_arr[$j]'";
			$j++;
		}

		$run = $this->conn->query($upt);  // query run on db
		return $run;
	}

    
}

$obj = new model();
?>