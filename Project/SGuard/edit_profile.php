<?php 
session_start();
if(!isset($_SESSION['username']))
{
	header('location:login');
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
    <title>Edit Profile</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<body>
    <div class="container py-5 h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5  ">
                <div class="card shadow-2-strong" style="border-radius: 1rem; border-color:blue;">
                    <div class="card-body p-5 ">
                        <h2 class="mb-5 text-center daggerdancer text-primary">Edit Profile</h2>
                        <hr style="border-color:black;">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-outline mb-4 row">
                                <div class="col-md-6">
                                    <label for="firstname">Firstname</label>
                                    <input type="text" name="firstname" id="firstname" value="<?php echo $fetch->firstname; ?>"   class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastnamr">Lastname</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $fetch->lastname; ?>">
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control" value="<?php echo $fetch->email; ?>">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="mobile">Mobile No. </label>
                                <input type="text" name="mobile_no" id="mobile" class="form-control" value="<?php echo $fetch->mobile_no?>">
                            </div>
                            <div class="form-outline mb-4">
                                <label for="address">Address</label>
                                <small id="address" class="form-text text-muted">Enter Your Full Address with
                                    Pincode</small>
                                <textarea name="address" id="address" cols="30" rows="5" class="form-control"  ><?php echo $fetch->address;?></textarea>
                            </div>

                            <div class="form-outline row mb-4">
                                <label>Gender</label>
                                <?php
                                $gender=$fetch->gender;
                                ?>
                                <div class="radio col-md-4">
                                    <label>
                                        <input type="radio" name="gender" id="male" value="male" <?php if($gender=="male"){echo "checked";}?>>Male
                                    </label>
                                </div>
                                <div class="radio col-md-4">
                                    <label>
                                        <input type="radio" name="gender" id="female" value="female"  <?php if($gender=="female"){echo "checked";}?>>Female
                                    </label>
                                </div>
                                <div class="radio col-md-4">
                                    <label>
                                        <input type="radio" name="gender" id="other" value="other"  <?php if($gender=="other"){echo "checked";}?>>Other
                                    </label>
                                </div>
                            </div>

                            <div class="form-outline mb-4">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $fetch->username;?>">
                            </div>
                         
                            <div class="form-outline mb-5">
                                <label for="image">Profile Photo </label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img src="images/Customer/<?php echo $fetch->image;?>" width="100px"/>
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