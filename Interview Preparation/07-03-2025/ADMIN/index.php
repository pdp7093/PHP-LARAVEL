<?php include_once('header.php');
if(!isset($_SESSION['email']))
{
    echo "<script>alert('Login First');
    window.location='Login';</script>";
}
?>
<section>
    <div class="container mt-4">
        <h1 class="bg-primary text-white text-center">Manage Product</h1>
        
        <table class="table mt-4">
            <thead>
                <tr>
                    <td>No#</td>
                    <td>Product Name</td>
                    <td>Product qty</td>
                    <td>Product price</td>
                    <td>Action</td>
                </tr>                
            </thead>
            <tbody>
                <?php $i=0;foreach($pf as $p) { ?>
                    <tr>
                        <td><?php echo ++$i; ?></td>
                        <td><?php echo $p->name?></td>
                        <td><?php echo $p->qty?></td>
                        <td><?php echo $p->price?></td>
                        <td><a href="delete" class="btn btn-danger">Delete</a>
                        <a href="edit?edit=<?php echo $p->id?>" class="btn btn-info">Edit</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
<?php include_once('footer.php')?>