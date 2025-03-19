<?php
    error_reporting(E_ALL);
    ini_set('display_errors',1);
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: *");
    header("Access-Control-Allow-Methods: *");


    class model
    {
        public $conn='';

        function __construct()
        {
           $this->conn=new mysqli('localhost','root','','pratice');
        }
        //Select Function
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

        //Select Where
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
        //Insert Function

        function insert($tbl,$arr)
        {

           //$data=array("name"=>$name,"email"=>$email,"comment"=>$comment);
            $col_arr=array_keys($arr); // array("0"=>"name","1"=>"email","2"=>"comment")
            $col=implode(",",$col_arr); // name,email,comment
            
            $value_arr=array_values($arr); // array("0"=>"raj","1"=>"raj@gmail.com","2"=>"hello")
            $value=implode("','",$value_arr); // 'raj','raj@gmail.com','hello'
            
            $ins="insert into $tbl ($col) values ('$value')";   // query
            $run=$this->conn->query($ins);  // run 
            return $run;

        }
        //Delete Where

        function delete($tbl,$arr)
        {
            //$col;
            $col_arr=array_keys($arr);
            $col_value=array_values($arr);

            $del="delete from $tbl where 1=1";
            $i=0;
            foreach($arr as $w)
            {
                echo $del.=" and $col_arr[$i]= '$col_value[$i]'";
                $i++;
            }

            $run=$this->conn->query($del);

            return $run;
        }

        function update_where($tbl,$arr,$where)
        {
            // update cust set name='raj',email='raj@gmail.com' where id=11
            $column_arr=array_keys($arr);
            $values_arr=array_values($arr);
            
            $upd="update $tbl set ";  // 1=1 means query contnue
            $j=0;
            $count=count($arr);
            foreach($arr as $w)
            {
                if($count==$j+1)
                {
                    $upd.=" $column_arr[$j]='$values_arr[$j]'";
                }
                else
                {
                    $upd.=" $column_arr[$j]='$values_arr[$j]',";
                    $j++;
                }
            }
            $wcolumn_arr=array_keys($where);
            $wvalues_arr=array_values($where);
            
            $upd.=" where 1=1";  // 1=1 means query contnue
            $i=0;
            foreach($where as $w)
            {
                echo $upd.=" and $wcolumn_arr[$i]='$wvalues_arr[$i]'";
                $i++;
            }
            $run=$this->conn->query($upd);  // query run on db
            return $run;
            
        }
    }

    $obj=new model;
?>