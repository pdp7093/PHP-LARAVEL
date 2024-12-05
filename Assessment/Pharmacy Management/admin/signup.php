<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/bootstrap_4.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <title>SignUp</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong" style="border-radius: 1rem; border-color:blue;">
                    <div class="card-body p-5 ">
                        <h2 class="mb-5 text-center daggerdancer text-primary">Admin Signup</h2>
                        <hr style="border-color:black;">
                        <form action="" method="post" enctype="multipart/form-data">
                            
                            <div class="form-outline mb-4">
                                <label for="name">Admin Name</label>
                                <input type="text" name="name" id="name"class="form-control"
                                    placeholder="Enter Pharmacy Name">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="email">Email </label>
                                <input type="email" name="username" class="form-control"
                                    placeholder="Enter Email">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="password">Password </label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter Password">
                            </div>
                            
                            <div class="form-outline mb-4">
                                <input type="submit" value="Submit" name="submit" class="btn btn-block btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>