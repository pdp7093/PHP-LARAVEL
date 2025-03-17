<?php
include_once('header.php') ;
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
                    <input type="text" name="name" value="<?php echo $fetch->name?>" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <label for="qty">Qty</label>
                    <input type="number" name="qty" value="<?php echo $fetch->qty?>" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <label for="price">Price</label>
                    <input type="number" name="price" value="<?php echo $fetch->price?>" class="form-control">
                </div>
                <div class="form_control  mb-4">
                    <label for="image">Image</label>
                    <input type="file" name="image" placeholder="Enter Product image" class="form-control">
                    <img src="image/<?php echo $fetch->image ?>" alt="" width="50rm">
                </div>
                <div class="form_control mb-4">
                    <input type="submit" value="Submit" name="update" class="btn btn-success btn-lg">
                </div>
            </form>
        </div>
    </div>
</section>
<?php include_once('footer.php')?>