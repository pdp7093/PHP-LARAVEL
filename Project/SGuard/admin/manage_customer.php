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
                                            <th>Status Changed</th>
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
                                           
                                            <td>
                                            <?php if($mc->status=='unblock'){?>
												<a href="edit_profile?update=<?php echo $mc->cust_id?>" class="btn btn-primary">Edit</a>
												<a href="delete?del_customer=<?php echo $mc->cust_id?>" class="btn btn-danger mx-2">Delete</a>
                                            <?php } else { ?>
                                                <p class="text-danger">Customer Id Blocked</p>
                                            <?php } ?>
											</td>
                                            <td>
                                            <!--Unblock Customer-->
                                            <?php if($mc->status=='unblock'){?>
                                                <p class="text-center">--------</p>
                                            <?php } else { ?>
                                               <a href="status?unblock=<?php echo $mc->cust_id?>" class="btn btn-success">Unblock Customer</a>
                                            <?php } ?>
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