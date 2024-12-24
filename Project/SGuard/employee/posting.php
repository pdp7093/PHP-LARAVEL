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
                           Posting Detail
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            
                                            <th>Posting Date</th>
                                            <th>Guard Name</th>
                                            <th>Posting Address</th>
                                            <th>Hireby</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  $i=0; foreach($posting_detail as $pd){?>
                                        <tr>
                                            <td><?php echo ++$i;?></td>                                            
                                            <td><?php echo $pd->posting_date?></td>
                                            <td><?php echo $pd->full_name?></td>
                                            <td><?php echo $pd->address?></td>
                                            <td><?php echo $pd->firstname. $pd->lastname?></td>
                                            <td>
												<a href="" class="btn btn-primary">Edit</a>
												<a href="delete?posting_delete=<?php echo $pd->post_id?>" class="btn btn-danger mx-2">Delete</a>
											</td>
                                        </tr>                                 
                                        <?php }?>       
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