<?php //session_start(); 
if (!isset($_SESSION['employee_email'])) {
    header("location:login");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SGuard Admin </title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />

    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <link href="../css/font.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!--FontAwesome-->
    <script src="https://kit.fontawesome.com/aa8cf25ef0.js" crossorigin="anonymous"></script>
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
                <a class="navbar-brand" href="index">SGuard</a>
            </div>

            <div class="header-right">


                <?php if (isset($_SESSION['employee_email'])) { ?>
                    <a href="logout" class="btn btn-danger" title="Logout">
                        <h4>LOGOUT<span class="fa fa-exclamation-circle "></span></h4>
                    </a>
                <?php } else { ?>
                    <a href="login" class="btn btn-info " title="Login">
                        <h3>LOGIN <span class="fa-solid fa-right-to-bracket "></span></h3>
                    </a>
                <?php } ?>
            </div>
        </nav>
        <!-- /. NAV TOP  -->

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <?php $username = $_SESSION['email'];
                            $fstchar = substr($username, 0, 1);
                            ?>
                            <p  class=" header-icon text-uppercase ethno text-center m-3 ">
                                <?php echo $fstchar ?></p>

                            <div class="header-username">
                                <h4 class="text-uppercase"> <?php echo $_SESSION['email']; ?></h4>
                                <br />

                            </div>

                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="Dashboard"><i class="fa fa-dashboard "></i>Admin Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Guards <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="Add Guard">Add Guards</a>
                            </li>
                            <li>
                                <a href="Manage Guard">Manage Guards</a>
                            </li>
                            <li>
                                <a href="Posting">Guards Posting</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="Manage Customer">Manage Customers</a>
                    </li>
                    <li>
                        <a href="#">Employee <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">

                            <li>
                                <a href="Add Employee"></i>Add Employee </a>
                            </li>
                            <li>
                                <a href="Manage Emplpoyee">Manage Employee</a>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="Manage Contact us">Manage Contact us</a>
                    </li>

                    <li>
                        <a href="Hiring Request">Hiring Request</a>
                    </li>

                    <li>
                        <a href="Manage Complain">Manage Complain</a>
                    </li>

                    <li>
                        <a href="Manage Feedback">Manage Feedback</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
    </div>