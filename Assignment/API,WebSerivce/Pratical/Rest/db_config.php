<?php
$conn=new Mysqli('localhost','root','','tops');
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

?>