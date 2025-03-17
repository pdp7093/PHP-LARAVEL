<?php 
$txt ="TOPS Technologies";
//---------------------------------String Word---------------------------------
echo "<h5>String Word:	".str_word_count($txt)."</h5>";
//---------------------------------String Length---------------------------------
echo "<h5>String Length:	".strlen($txt)."</h5>";
//---------------------------------String Replace---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str Replace </h5></center>";
$string="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

echo str_replace("Lorem","Tops",$string)."<br><br><br>";
//---------------------------------String Shuffle---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str shuffle </h5></center>";
echo str_shuffle($txt);
//---------------------------------String LowerCase---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str Lowercase </h5></center>";
echo strtolower($txt);

//---------------------------------String UpperCase---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str Uppercase </h5></center>";
echo strtoupper($txt);

//---------------------------------Number Format---------------------------------
echo "<hr>";
echo "<center><h5>Example of Nubmer Format` </h5></center>";
$num=50000;
echo number_format($num,2);
//---------------------------------String Rand---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str Rand </h5></center>";
echo rand(10000,99999);
//---------------------------------String impolde---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str Implode </h5></center>";
$arr=array("Narol","Lambha","Maninagar");
$text1=implode(",",$arr);
echo $text1;
//---------------------------------String expolde---------------------------------
echo "<hr>";
echo "<center><h5>Example of Str Exmplode </h5></center>";
$txt1="Narol,Lambha,Maninagar";
$arr=explode(",",$txt1);
print_r($arr);
print_r($arr);
?>	