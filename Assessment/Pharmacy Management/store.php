<?php include_once('header.php'); ?>
<h1 class="text-dark text-center">Store</h1>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <h3 class="text-center text-dark">View Medicine</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover ">
                        <thead class="thead-dark">
                            <th>Medicine Name</th>
                            <th>Qty</th>
                            <th>Added Date</th>
                           
                            <th>Price</th>
                        </thead>
                        <tbody class="text-dark mt-4">
                            <?php foreach ($manage_medicine as $mm) { ?>

                                <tr>
                                    <td><?php echo $mm->medicine_name; ?>
                                    <td><?php echo $mm->qty; ?></td>
                                    <td><?php echo $mm->added_date; ?></td>
                                    
                                    <td><?php echo $mm->price; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>