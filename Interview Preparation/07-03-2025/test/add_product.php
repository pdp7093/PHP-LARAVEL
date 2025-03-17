<?php
include_once('header.php');
if(!$_SESSION['email'])
{
    echo "<script>window.location='Login'</script>";
}
    ?>
<section class="mt-4">
    <div class="container">
        <div class="border border-3">
            <a href="index" class="btn btn-primary m-3">Manage Product</a>
            <form action="" method="post" class="p-3 mt-3" enctype="multipart/form-data">
                <div class="form_control  mb-4">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter Product Name" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <label for="qty">Qty</label>
                    <input type="number" name="qty" placeholder="Enter Product qty" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="Enter Product price" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" placeholder="Enter Product image" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <div class="d-grid gap-2">
                        <input type="submit" value="Submit" name="submit" class="btn btn-outline-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<?php include_once('footer.php') ?>