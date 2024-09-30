<?php
    date_default_timezone_set('asia/calcutta');
    //date
        echo "<h1><center> Date Function</center></h1><hr>";

        echo"<br>";
        echo date('d/m/y')."<br>";
echo date('D.m.y')."<br>";

echo date('h:i:s A')."<br>";
echo date('H:i:s')."<br>";

    //time
        echo "<h1><center> Time Function</center></h1><hr>";
        echo time() . "<br>";



$hours=time()+ (2 * 60 * 60);
echo date('h:i:s A',$hours)."<br>";

$date=time()+ (2 * 24 * 60 * 60);
echo date('d/m/y',$date)."<br>";
?>