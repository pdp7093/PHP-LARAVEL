<?php include_once('header.php')?>
<section>
    <div class="container mt-4">
        <h1 class="bg-primary text-white text-center">Login</h1>
        <form action="" method="post" class="mt-5 border border-3 p-4">
            <div class="form-group mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control">
            </div>
           
            <div class="form-group mb-4">
                <input type="submit" value="login" name="login" class="btn btn-lg btn-outline-primary">
            </div>
        </form>
    </div>
</section>
<?php include_once('footer.php')?>