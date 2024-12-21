<!-- Header Section -->
<?php include_once('header.php'); ?>
<div id="wrappeer">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <!--    Hover Rows  -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Customers
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Profile photo</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Mobile_no</th>
                                            <th>gender</th>
                                            <th>Address</th>
                                            <th>Username </th>
                                            
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($manage_customer as $mc) { ?>
                                        <tr>
                                            <td><?php echo $mc->cust_id;?></td>
                                            <td><img src="../images/Customer/<?php echo $mc->image;?>" alt="" width="40rem"></td>
                                            <td><?php echo $mc->firstname." ".$mc->lastname;?></td>
                                            <td><?php echo $mc->email;?></td>
                                            <td><?php echo $mc->mobile_no;?></td>
                                            <td><?php echo $mc->gender;?></td>
                                            <td><?php echo $mc->address;?></td>
                                            <td><?php echo $mc->username;?></td>
                                            <input type="hidden" id="confirmdelete" name="confirmForm">
                                            <td>
												<a href="" class="btn btn-primary">Edit</a>
												<a href="delete?del_customer=<?php echo $mc->cust_id?>" class="btn btn-danger mx-2">Delete</a>
											</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End  Hover Rows  -->
                </div>
              
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<?php include_once('footer.php'); ?>