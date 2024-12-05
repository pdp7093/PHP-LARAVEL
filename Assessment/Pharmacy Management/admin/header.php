<?php 
if(!isset($_SESSION['adminemail']))
{
	header("location:login");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
   
	
	 <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- Fontawesome FONTS-->
    <!--<script src="https://kit.fontawesome.com/aa8cf25ef0.js" crossorigin="anonymous"></script>-->

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home">Pharmacy Managment System</a>
            </div>

            <div class="header-right">

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                               <?php echo $_SESSION['adminemail'];?>
                                <br />
                                <small>Last Login : 2 Weeks Ago </small>
                                <br><a href="logout" class="btn btn-danger" title="Logout"><h4>LOGOUT<span class="fa fa-exclamation-circle "></span></h4></a>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="" href="Medicine"><i class="fa fa-dashboard "></i>Medicine</a>
                    </li>
                    <li>
                        <a class="" href="Manager"><i class="fa fa-dashboard "></i>Manager</a>
                    </li>
                    
                </ul>

            </div>

        </nav>
    </div>