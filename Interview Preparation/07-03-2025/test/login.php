<?php include_once('header.php');
if($_SESSION['email'])
{
    echo "<script>window.location='index'</script>";
}
?>
<section class="mt-4">
    <div class="container">
        <form action="" method="post" class="border border-3 p-4">
            <div class="form_group mb-4">
                <label for="email">Email</label>
                <input type="email" name="email"placeholder="Enter Your Email" class="form-control">
            </div>
            <div class="form_group mb-4">
                <label for="password">password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
            </div>
            <div class="form_group mb-4">
                <input type="submit" value="Login" name="login" class="btn btn-outline-success">
            </div>
        </form>
    </div>
</section>
<?php include_once('footer.php')?>