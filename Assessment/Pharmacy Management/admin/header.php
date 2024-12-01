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
                <a class="navbar-brand" href="dashboard.php">Pharmacy Managment System</a>
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
                                Jhon Deo Alex
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-desktop "></i>Manage Manager <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="panel-tabs.php"><i class="fa fa-toggle-on"></i>Add Manager</a>
                            </li>
                            <li>
                                <a href="notification.php"><i class="fa fa-bell "></i>Manage Manager</a>
                            </li>
                            
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>Medicine <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="invoice.php"><i class="fa fa-coffee"></i>Add Medicine</a>
                            </li>
                            <li>
                                <a href="pricing.php"><i class="fa fa-flash "></i>View Medicine</a>
                            </li>
                             <li>
                                <a href="component.php"><i class="fa fa-key "></i>Delete Medicine</a>
                            </li>
                            
                            
                           
                        </ul>
                    </li>
                    
                </ul>

            </div>

        </nav>
    </div>