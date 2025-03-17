<?php include_once('header.php');
if(!isset($_SESSION['email']))
{
    echo "<script>alert('Login First');
    window.location='Login';</script>";
}
?>
<section>
    <div class="container mt-4">
        <h1 class="bg-primary text-white text-center">Add Product</h1>
        
        <form action="" method="post" class="mt-5 border border-3 p-4">
            <div class="form-group mb-4">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Product Name" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label for="qty">Product qty</label>
                <input type="number" name="qty" id="qty" placeholder="Enter Product qty" class="form-control">
            </div>
            <div class="form-group mb-4">
                <label for="price">Product price</label>
                <input type="number" name="price" id="price" placeholder="Enter Product price" class="form-control">
            </div>
            <div class="form-group mb-4">
                <input type="submit" value="submit" name="submit" class="btn btn-lg btn-outline-success">
            </div>
        </form>
    </div>
</section>
<?php include_once('footer.php')?>