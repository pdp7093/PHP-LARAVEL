<?php
$conn=new Mysqli('localhost','root','','test');
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

?>