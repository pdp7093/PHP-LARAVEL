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
                            Manage Employee
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($manage_employee as $me) {?>
                                        <tr>
                                            <td><?php echo $me->em_id;?></td>
                                            
                                            <td><?php echo $me->name; ?></td>
                                            <td><?php echo $me->email;?></td>                                        
                                            <td><?php echo $me->status; ?></td>
                                            <td>
												<a href="" class="btn btn-primary">Edit</a>
												<a href="delete?del_employee=<?php echo $me->em_id?>" class="btn btn-danger mx-2">Delete</a>
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