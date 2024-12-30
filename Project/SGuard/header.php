<?php
	
$url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
$url = end($url_array);
$title = $url;

function active($currect_page)
{
  $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
  $url = end($url_array);


  if ($currect_page == $url) {
    echo 'active'; //class name in css 
  }
}
//session_start();
//session_start(); 


?>


<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>SGuard | <?php  echo strtoupper(urlencode($title));?></title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap_4.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />

  <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto:400,500&display=swap"
    rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <!-- Fonts -->
  <link href="css/font.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/aa8cf25ef0.js" crossorigin="anonymous"></script>



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
</head>

<body>
  <!-- header section strats -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          <div class="logo_box">
            <h2 class="daggerdancer text-primary">SGuard</h2>

          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-underline ml-auto mr-2">
            <li class="nav-item ">
              <a class="nav-link <?php echo active('home'); ?>" href="home">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link <?php echo active('about'); ?>" href="about">About Us </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link <?php echo active('service'); ?>" href="service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo active('blog'); ?>" href="blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo active('contact'); ?>" href="contact">Contact us</a>
            </li>
            <li class="nav-item">
              <?php 
              if (isset($_SESSION['username'])) {
                ?>
                <a class="nav-link <?php echo active('Profile'); ?>" href="Profile"><i class="fa-solid fa-user"><?php echo $_SESSION['username'];?></i>
                </a>
              <?php } else { ?>
                <a class="nav-link <?php echo active('login'); ?>" href="login">Login/Signup<i class="bi bi-door-open"></i>
                </a>
              <?php } ?>
            </li>
          </ul>

        </div>
      </nav>
    </div>
  </header>
  <!-- end header section -->