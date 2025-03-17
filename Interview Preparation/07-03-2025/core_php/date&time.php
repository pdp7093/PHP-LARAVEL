<?php 
echo "<center><h1>DATE AND TIME FUNCTION</h1></center>";
echo "<hr>";

date_default_timezone_set('asia/calcutta');

//---------------------------------Print Date---------------------------------
echo "<hr>";
echo "<center><h5>Print Date and time </h5></center>";
echo date('d-m-y')."<br>";
echo date ('D-m-y')."<br>";
//---------------------------------Future Date---------------------------------
echo "<hr>";
echo "<center><h5>Future Date and time </h5></center>";
$futureD=mktime(0,0,0,date("m")+1,date("d")+1,date("y")+1);
$futureT=mktime(date("h")+1,date("i")+1,date("m")+1);
echo date('d-m-y',$futureD)."<br>";
echo date('h-i-s',$futureT)."<br>";
?>