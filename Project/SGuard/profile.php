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
                            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Edit
                                Profile</button>
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
                    <div class="col-md-12">
                        <div class="card mb-4 mb-md-0">
                            <div class="card-body">
                                <p class="mb-4"><span class="text-primary font-italic me-1">Guards</span> Details</p>
                                <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                <div class="progress rounded" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                <div class="progress rounded mb-2" style="height: 5px;">
                                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--FeedBack and Complain Section-->
                <div class=" mt-3 row">
                    <div class="col-md-6 border border-primary border-3 rounded">
                        <div class="card mb-4 mb-md-1">
                            <div class="card-body">
                                <p class="mb-4 text-primary font-italic me-1">Feedback</p>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="customer_name">Customer Name</label>
                                        <input type="text" name="c_name" value="Customer Name" readonly
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="customRange3" class="form-label">Review</label>
                                        <input type="range" class="form-range" min="0" max="5" step="0.5"
                                            id="customRange3" name="star">
                                    </div>
                                    <div class="form-group">
                                        <label for="feedback">Feedback</label>
                                        <textarea name="feedback" id="" cols="30" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary rounded-circle">
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
                                <div class="form-group">
                                    <label for="customer_name">Customer Name</label>
                                    <input type="text" name="c_name" value="Customer Name" readonly
                                        class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="guard_name">Customer Name</label>
                                    <select name="guard_name" id="" class="form-select">
                                        <option>-----Guard's You Have-----</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="complain">Complain</label>
                                    <textarea name="complain" id="" cols="30" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Submit" class="btn btn-danger rounded-circle">
                                </div>
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
                                        <?php foreach($res1 as $mr){?>
                                        <tr>
                                        <td></td>
                                        <td><?php echo $mr->number_of_guard;?></td>
                                        <td><?php echo $mr->for_where;?></td>
                                        <td><?php echo $mr->address;?></td>
                                        <td><?php echo $mr->remark;?></td>
                                        <td><?php echo $mr->request_status;?></td>
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
</section>