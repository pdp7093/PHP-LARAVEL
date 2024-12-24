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
                            Manage Feedback
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>   
                                            <th>Customer Name</th>                          
                                            <th>Customer Username</th>              
                                            <th>Feedback</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;foreach($manage_feedback as $mf)?>
                                        <tr>
                                            <td><?php echo ++$i; ?></td>                                            
                                            <td><?php echo $mf->firstname." ".$mf->lastname; ?></td>
                                            <td><?php echo $mf->username?></td>
                                            <td><?php echo $mf->feedback;?></td>
                                            <td>
												
												<a href="delete?feedback=<?php echo $mf->feed_id ?>" class="btn btn-danger mx-2">Delete</a>
											</td>
                                        </tr>
                                        
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