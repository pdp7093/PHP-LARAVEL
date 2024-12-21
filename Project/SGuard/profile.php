<?php
//include Header 
include_once('header.php');
$username = '';
if ($_SESSION['username']) {
    $username = $_SESSION['username'];
    
} else {
    echo "<script>
        alert('Please Login First');
        window.location='login';
    </script>";
}
?>
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="images/Customer/<?php echo $fetch->image; ?>" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"> <?php echo strtoupper($fetch->username) ?></h5>

                        <p class="text-muted mb-4"><?php echo $fetch->address ?></p>
                        <div class="d-flex justify-content-center mb-2">




                            <a href="edit_profile?update=<?php echo $fetch->cust_id?>" class="btn btn-primary">Edit Profile</a>


                            <button type="button" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-outline-primary ms-1">Reset Password</button>
                            <a href="logout" class="btn btn-outline-danger ms-1">LOGOUT</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $fetch->firstname . " " . $fetch->lastname; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $fetch->email; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $fetch->mobile_no; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Mobile</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $fetch->mobile_no; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0"><?php echo $fetch->address; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">

                <div class="row">
                    <div class="col-md-12 border border-info border-3 rounded">
                        <p class="mb-4"><span class="text-primary font-italic me-1">Guards</span> Details</p>
                        <table class="table table-responsive col-auto ">
                            <thead>
                                <th>Sr no.</th>
                                <th>Guard Name</th>
                                <th>Guard Number</th>
                                <th>Guard Gender</th>
                            </thead>
                            <tbody>
                                <?php $i=0;foreach ($gu_detail as $mg) {
                                ?>
                                    <tr>
                                        <td><?php echo ++$i;?></td>
                                        <td><?php echo $mg->full_name;?></td>
                                        <td><?php echo $mg->mobile_no;?></td>
                                        <td><?php echo $mg->gender;?></td>
                                    </tr>
                                <?php
                                } ?>
                            <tr>
                                <td colspan="4"><a href="service" class="btn btn-primary col">Hire Guard</a></td>
                            </tr>        
                            </tbody>    
                            
                        </table>
                        
                    </div>

                </div>
                <!--FeedBack and Complain Section-->
                <div class=" mt-3 row">
                    <div class="col-md-6 border border-primary border-3 rounded">
                        <div class="card mb-4 mb-md-1">
                            <div class="card-body">
                                <p class="mb-4 text-primary font-italic me-1">Feedback</p>
                                <form action="" method="post" id="feedback_form">
                                    <div class="form-group">
                                        <label for="customer_name">Customer Name</label>
                                        <input type="text" name="c_name" value="<?php echo $_SESSION['username'] ?>"
                                            readonly class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customRange3" class="form-label">Review</label>
                                        <input type="range" class="form-range" min="0" max="5" step="0.5"
                                            id="customRange3" name="star">
                                    </div>
                                    <div class="form-group">
                                        <label for="Feedback">Feedback</label>
                                        <textarea  cols="30" class="form-control" name="comment" form="feedback_form" ></textarea>
                                    </div>
                                    <div class="form-group">
                                   <input type="submit" value="Submit" name="feedback" class="btn btn-primary rounded-circle">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Complain-->
                    <div class="col-md-6 border border-danger border-3 rounded">
                        <div class="card mb-4 mb-md-2">
                            <div class="card-body">
                                <p class="mb-4 text-danger font-italic me-1">Complain</p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="customer_name">Customer Name</label>
                                        <input type="text" name="c_name" value="<?php echo $_SESSION['username'] ?>"
                                            readonly class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="guard_name">Customer Name</label>
                                        <select name="guard_name" id="guard_name" class="form-select">

                                            <option>-----Guard's You Have-----</option>
                                            <?php foreach ($gu_detail as $mg) {
                                                
                                                ?>
                                                <option value="<?php echo $mg->gu_id; ?>"><?php echo $mg->full_name; ?>
                                                </option>
                                                <?php
                                                
                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="complain">Complain</label>
                                        <textarea name="comment" id="" cols="30" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" name="complain" class="btn btn-danger rounded-circle">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" mt-3 row">
                    <div class="col-md-12 border border-success border-3 rounded">
                        <div class="card mb-4 mb-md-1">
                            <div class="card-body">
                                <p class="mb-4 text-primary font-italic me-1">Request Process</p>
                                <table class="table">
                                    <thead>

                                        <th>Sr_no</th>
                                        <th>Number of Guard</th>
                                        <th>For Where</th>
                                        <th>Address</th>
                                        <th>Any Suggestions</th>
                                        <th>Request Status</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 0;
                                        if (!empty($fetch1)) {
                                            foreach ($fetch1 as $mr) { ?>
                                                <tr>
                                                    <td><?php echo ++$i; ?></td>
                                                    <td><?php echo $mr->number_of_guard; ?></td>
                                                    <td><?php echo $mr->for_where; ?></td>
                                                    <td><?php echo $mr->address; ?></td>
                                                    <td><?php echo $mr->remarks; ?></td>
                                                    <?php if ($mr->request_status == 'pending') { ?>
                                                        <td class="text-primary"><?php echo $mr->request_status; ?></td><?php } ?>
                                                    <?php if ($mr->request_status == 'approve') { ?>
                                                        <td class="text-success"><?php echo $mr->request_status; ?></td><?php } ?>
                                                    <?php if ($mr->request_status == 'reject') { ?>
                                                        <td class="text-danger"><?php echo $mr->request_status; ?></td><?php } ?>
                                                </tr>
                                            <?php }
                                        } else {
                                            ?>
                                            <?php
                                            echo "<tr><td colspan='6' class='text-center'>No Data Found</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <?php require_once("phpcode/footer.php"); ?>

    </div>
</section>