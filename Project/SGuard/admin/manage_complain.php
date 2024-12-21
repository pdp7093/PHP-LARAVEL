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
                            Manage Complain
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Customers Name</th>
                                            <th>Guards Name</th>
                                            <th>Compain</th> 
                                            <th>Status</th>                                           
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i=0;foreach($manage_complain as $mc){?>
                                        <tr>
                                            <td><?php echo ++$i;?></td>
                                            <td><?php echo $mc->username?></td>
                                            <td><?php echo $mc->full_name?></td>
                                            <td><?php echo $mc->complain?></td>                                                                                        
                                            
                                            <?php if($mc->complain_status=="pending") {?>  
                                                <td class="text-primary"><?php echo strtoupper($mc->complain_status)?></td> 
                                            <?php } else {?>
                                                <td class="text-success"><?php echo strtoupper($mc->complain_status)?></td> 
                                            <?php }?>
                                            <td>
												<?php
                                                    if($mc->complain_status=="pending") 
                                                    {?>
                                                        <a href="status?complain_status=<?php echo $mc->c_id?>" class="btn btn-info mx-2">Take Action</a>        
                                                    <?php }
                                                ?>
												<a href="delete?complain=<?php echo $mc->c_id?>" class="btn btn-danger mx-2">Delete</a>
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