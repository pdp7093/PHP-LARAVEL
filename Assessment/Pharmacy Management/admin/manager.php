<?php include_once('header.php'); ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-success col-md-5 ">
                    <div class="panel-heading">
                        <h3>Add Manager</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Enter Manager Name</label>
                                <input class="form-control" type="text" name="manager_name">
                                <p class="help-block">Help text here.</p>
                            </div>
                            <div class="form-group mb-4">
                                <label for="pharmacy_name">Pharmacy Name</label>
                                <input type="text" name="pharmacy_name" id="pharmacy_name"class="form-control"
                                    placeholder="Enter Pharmacy Name">
                            </div>
                            <div class="form-group mb-4">
                                <label for="username">Username </label>
                                <input type="text" name="username" class="form-control"
                                    placeholder="Enter Username">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password </label>
                                <input type="text" name="password" class="form-control"
                                    placeholder="Enter Password">
                            </div>
                            
                            <div class="form-group mb-4">
                                <input type="submit" value="Add Manager" name="add_manager" class="btn btn-block btn-success">
                            </div>
                            

                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default mt-5">
                <div class="panel-heading">
                    <h3>Manage Manager</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Manager Name</th>
                                    <th>Pharmacy Name</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($manage_manager as $mm){?>
                                <tr>
                                    <td><?php echo $mm->id;?></td>
                                    <td><?php echo $mm->manager_name;?></td>
                                    <td><?php echo $mm->pharmacy_name;?></td>
                                    <td><?php echo $mm->username;?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="delete?del_manager=<?php echo $mm->id?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>