<?php
$conn=new Mysqli('localhost','root','','assign');
if(!$conn){
	die("Connection failed: " . mysqli_connect_error());
}

?>