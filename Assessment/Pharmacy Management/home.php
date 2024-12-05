<?php include_once('header.php');

$username="";
if($_SESSION['username'])
{
    $username=$_SESSION['username'];
}
?>
<h1 class="text-dark text-center">Home</h1>
<section>
    <div class="container">
       
       
        <!--Add Medicine or Delete Medicine-->
        <div class="mt-4 row justify-content-between">
            <div class="card col-md-5 ">
                <div class="card-body ">
                    <div class=" text-dark  ">
                        <h3 class="text-center border-bottom">Add Medicine</h3>
                        <form action="" method="post" class="col-md-12 border border-dark mt-4">
                            <div class="form-group">
                                <label for="medicine_name">Medicine Name</label>
                                <input type="text" name="medicine_name" id="" class="form-control" placeholder="Enter Medicine Name">
                            </div>
                            <div class="form-group">
                                <label for="qty">Medicine Qty</label>
                                <input type="number" name="qty" id="" class="form-control" placeholder="Enter Medicine Qty">
                            </div>
                            <div class="form-group">
                                <label for="medicine_date">Medicine Date</label>
                                <input type="date" name="added_date" id="" class="form-control" placeholder="Enter Medicine Date">
                            </div>
                            <div class="form-group">
                                <label for="added_by">Added By</label>
                                <input type="text" name="added_by" id="" value="<?php echo $_SESSION['username']?>" disabled class="form-control">
                              
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="" class="form-control" placeholder="Enter Medicine Price">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="ADD MEDICINE" class="form-control btn-primary" name="add_medicine">
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="card col-md-5 ">
                <div class="card-body">
                    <h3 class="text-center border-bottom">Delete Medicine</h3>
                    <form action="" method="post" class="mt-4">
                        <div class="form-group">
                            <label for="medicine_name">Select Medicine Name</label>
                           <select name="medicine_name" id="medicine_name">
                           <option value="">------Select Medicine Name------</option>
                                    <?php foreach($manage_medicine as $mm ) { ?>
                                        <option value="<?php echo $mm->m_id;?>"><?php echo $mm->medicine_name;?></option>
                                    <?php }?>
                           </select>
                        </div>
                        <div class="mt-2 form-group">
                            <input type="submit" value="Delete Medicine" class="btn btn-danger" name="delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
<?php include_once('footer.php'); ?>