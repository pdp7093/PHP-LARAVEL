<!DOCTYPE html>
<html lang="en">
<head>
  <title>MVC PRATICE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>My First Bootstrap 5 Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Add Product">Add Product</a>
      </li>
      <li class="nav-item ">
        <?php if($_SESSION['email'])
        { ?>
        <a class="nav-link" href="Logout">Logout</a></li>
        <?php } else {?>
        <li class="nav-item"><a class="nav-link" href="Login">Login</a>
        <?php }?>
      </li>
      
    </ul>
  </div>
</nav>
