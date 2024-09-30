<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include_once('link.php'); ?>
		<title>Home</title>
	</head>
	<body>
		<div class="container-fluid">
		   <div class="border-bottom border-3 border-dark">
				<h1 class=" text-center text">E-Note Book 	</h1>
			   
		   </div>
		   <div class="text-muted">
					<h4><span><i class="fa-regular fa-hand-point-right"></i></span> Press 1 for generate Note.</h4>
					<h4><span><i class="fa-regular fa-hand-point-right"></i></span> Press 2 for view Note.</h4>
					<h4><span><i class="fa-regular fa-hand-point-right"></i></span> Press 4 for Exit.</h4>
			</div>
			<form action="" method="post">
				<div class="border border-2 border-dark my-3 py-3">
					<label for="option"><h5>Enter the Option: </h5></label>
					<input type="number" name="options" id="option">
					<input type="submit" name="submit" value="Submit" class="btn-primary border-2 rounded-3 ms-4">
				</div>
			</form>
			<hr>
		</div>
	</body>
</html>

<?php 
	/*First, we will check whether the submit button has been clicked or not, and also whether any value has been entered or not.*/
	
	if(isset($_REQUEST['submit']) && $_REQUEST['options']!="")
	{
		$opt=$_REQUEST['options'];
		echo "You Choice Number:	".$opt;
		echo "<br>";
		switch($opt)
		{
			case 1:
				?>
					<form action="generate.php" method="post" class="col-md-3 border border-dark my-3 ">
					<fieldset>
						<legend><h1 class="text-center border-bottom">Generate Note:</h1></legend>
						<div class="form-group mb-3	p-2">
							<label>Enter E-Note Generator Name:</label>
							<input type="text" name="ename" placeholder="Enter Generator Name" class="form-control">
						</div>
						<div class="form-group mb-3	p-2">
							<label>Enter E-Note Title:</label>
							<input type="text" name="etitle" placeholder="Enter Generator Name" class="form-control">
						</div>
						<div class="form-group mb-3	p-2">
							<label>Enter E-Note Content:</label>
							<input type="text" name="econtent" placeholder="Enter Generator Name" class="form-control">
						</div>
						<div class="d-grid mb-3	p-2">
							<input type="submit" name="gen" value="Generate" class="btn btn-block btn-outline-primary ">
						</div>
					</fieldset>
				</form>
				<?php break;
			case 2:	
				
				$notes=$_GET['note'];
				//Convert json string to array
				$n=json_decode(urldecode($notes),true);
				
				echo "<br>";
				//Access the array values
				echo "E-Note Generate Name:	".$n['name']."<br>";
				echo "E-Title Name:	"	.$n['title']."<br>";
				echo "E-Content:	".$n['content']."<br>";
				
				break;
			case 4:
				echo "Case Number 4";
				break;
			default:
				echo "Please enter the choice given above";
				break;	
		}
		$_REQUEST['options']="";
	}
	else
	{
		if(isset($_REQUEST['submit']))
		{
			echo "Enter the Value";
		}
	}
?>
