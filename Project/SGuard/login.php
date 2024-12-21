<?php 
session_start();
if(isset($_SESSION['username']))
{
	header('location:Profile');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap_4.css">
  <link rel="stylesheet" href="css/font.css">
  <title>Login</title>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem; border-color:blue;">
            <div class="card-body p-5 ">

              <h2 class="mb-5 text-center daggerdancer text-primary">SGuard</h2>
              <hr style="border-color:black;">
              <form action="" method="post">
                <div class="form-outline mb-4">
                  <label class="form-label" for="username">Username</label>
                  <input type="text" id="username" class="form-control form-control-lg" name="username"
                    placeholder="Enter Username" />

                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" class="form-control form-control-lg" name="password"
                    placeholder="Enter Password" />

                </div>
               <input type="submit" value="Login" name="login" class="btn btn-primary">

                <hr class="my-1">
                <a href="#">Forgot passowrd?</a>
                <div class="form-outline text-center my-3">
                  Not a member yet?<a href="signup">Create an Account</a>
                </div>
                <div class="form-outline text-right my-3">
                  <a href="contact">Contact Us</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>