<?php include_once('header.php');
if(!$_SESSION['email'])
{
    echo "<script>window.location='Login'</script>";
}
?>
<section class="mt-4">
    <div class="container">
        <div>
            <a href="Add Product" class="btn btn-success m-3">Add Product</a>

            <table class="table table-hover m-3">
                <thead>
                    <tr>
                        <td>No#</td>
                        <td>Product Name</td>
                        <td>Product Qty</td>
                        <td>Product Price</td>
                        <td>Product Image</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($fetch as $f) {?>
                    <tr>
                        <td><?php echo ++$i ?></td>
                        <td><?php echo $f->name ?></td>
                        <td><?php echo $f->qty?></td>
                        <td><?php echo $f->price?></td>
                        <td><img src="image/<?php echo $f->image?>" alt="" width="50rm"></td>
                        <td>
                            <a href="delete?delete=<?php echo $f->id?>" class="btn btn-danger">Delete</a>
                            <a href="edit?edit=<?php echo $f->id?>" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php include_once('footer.php')?>