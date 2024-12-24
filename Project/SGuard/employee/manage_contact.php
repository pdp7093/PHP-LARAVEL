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
                            Manage Contact
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>mobile_no</th>
                                            <th>Comment</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php foreach($manage_contact as $d){?>
                                        <tr>
											
                                            <td><?php echo $d->con_id;?></td>
                                            
                                            <td><?php echo $d->name;?></td>
                                            <td><?php echo $d->email;?></td>                                        
                                            <td><?php echo $d->mobile_no;?></td>
                                            <td><?php echo $d->comment;?></td>
											
                                            <td>
												<a href="" class="btn btn-primary">Edit</a>
												<a href="delete?del_contacts=<?php echo $d->con_id?>" class="btn btn-danger mx-2">Delete</a>
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