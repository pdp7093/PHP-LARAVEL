<?php include_once('header.php'); ?>

<section>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <h3 class="text-center text-dark">View Medicine</h3>
                    <table class="table text-white">
                        <thead class="thead-dark">
                            <th>Medicine Name</th>
                            <th>Qty</th>
                            <th>Added Date</th>
                            <th>Added By</th>
                            <th>Price</th>
                        </thead>
                        <tbody>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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
                                <input type="date" name="medicine_date" id="" class="form-control" placeholder="Enter Medicine Date">
                            </div>
                            <div class="form-group">
                                <label for="added_by">Added By</label>
                                <input type="text" name="added_by" id="" class="form-control" placeholder="Medicine added by">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="" class="form-control" placeholder="Enter Medicine Price">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="ADD MEDICINE" class="form-control btn-primary">
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
                            <label for="medicine_name">Enter Medicine Name</label>
                            <input type="text" name="medicine_name" id="" placeholder="Enter Medicine Name You Want To Delete" class="form-control">
                        </div>
                        <div class="mt-2 form-group">
                            <input type="submit" value="DELETE MEDICINE" class=" form-control btn-danger">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
<?php include_once('footer.php'); ?>