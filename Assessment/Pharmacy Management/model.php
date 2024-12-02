<?php
class model
{
    public $conn = "";

    function __construct()
    {
        $this->conn = new Mysqli('localhost', 'root', '', 'pharmacy_system');
    }
    function insert($tbl, $arr)
    {
        $col_arr = array_keys($arr); 
        $col = implode(",", $col_arr);

        $value_arr = array_values($arr); // array("0"=>"raj","1"=>"raj@gmail.com","2"=>"hello")
        $value = implode("','", $value_arr); // 'raj','raj@gmail.com','hello'

        $ins = "insert into $tbl ($col) values ('$value')";   // query
        $run = $this->conn->query($ins);  // run 
        return $run;
    }

}

$obj = new model;
?>