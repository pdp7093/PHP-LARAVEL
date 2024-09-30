<?php 
	if(isset($_REQUEST['gen']))
	{
		$ename=$_REQUEST['ename'];
		$etitle=$_REQUEST['etitle'];
		$econtent=$_REQUEST['econtent'];
		
		if($ename!="" && $etitle!="" && $econtent!="")
		{
			$a=array('name'=>$ename,'title'=>$etitle,'content'=>$econtent);
			//Convert array to json string
			$n=urlencode(json_encode($a));
		}
		header("location:home.php?note=$n");
	}
	
?>