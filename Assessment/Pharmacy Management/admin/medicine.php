<?php include_once('header.php'); ?>
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info col-md-5">
                    <div class="panel-heading">
                        <h3>Add Medicine</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post">
                            <div class="form-group">
                                <label>Enter Medicine Name</label>
                                <input class="form-control" type="text" name="medicine_name">
                                <p class="help-block">Enter Medicine Name</p>
                            </div>
                            <div class="form-group">
                                <label>Enter Qty</label>
                                <input class="form-control" type="number" name="qty" >
                                <p class="help-block">Enter Qty.</p>
                            </div>
                            <div class="form-group">
                                <label>Enter Date</label>
                                <input class="form-control" type="date" name="added_date" >
                                <p class="help-block">Select Date here.</p>
                            </div>
                            <div class="form-group">
                                <label>Enter Manager Name</label>
                                <select name="added_by" id="" class="form-select">
                                    <option value="">---Select Manager Name---- </option>
                                    <?php foreach($manager_name as $mn ) { ?>
                                        <option value="<?php echo $mn->id;?>"><?php echo $mn->manager_name;?></option>
                                    <?php }?>
                                </select>
                                <p class="help-block">Enter Manager Name</p>
                            </div>
                            <div class="form-group">
                                <label>Enter Price</label>
                                <input class="form-control" type="number" name="price">
                                <p class="help-block">Enter Price here.</p>
                            </div>


                            <button type="submit" class="btn btn-info" name="add_medicine">Add Medicine </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="panel panel-default mt-5">
                <div class="panel-heading">
                    <h3>Manage Medicine</h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Medicine Name</th>
                                    <th>Qty</th>
                                    <th>Added Date</th>
                                    <th>Added by</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($manage_medicine as $mm){?>
                                <tr>
                                    <td><?php echo $mm->m_id;?></td>
                                    <td><?php echo $mm->medicine_name;?></td>
                                    <td><?php echo $mm->qty;?></td>
                                    <td><?php echo $mm->added_date;?></td>
                                    <td><?php echo $mm->added_by;?></td>
                                    <td><?php echo $mm->price;?></td>
                                    <td>
                                        <a href="#" class="btn btn-primary">Edit</a>
                                        <a href="delete?del_medicine=<?php echo $mm->m_id?>" class="btn btn-danger">Delete</a>
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