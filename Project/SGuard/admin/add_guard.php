<!--Header Sectoion-->
<?php include_once('header.php'); ?>
</div>
<div id="wrapper">
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Add Guards
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="post"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Enter Full Name</label>
                                <input class="form-control" type="text" name="full_name" placeholder="Enter Full Name"required>

                            </div>
                            <div class="form-group">
                                <label>Enter Email</label>
                                <input class="form-control" type="email" placeholder="Enter Email" name="email"required>

                            </div>
                            <div class="form-group">
                                <label>Enter Mobile Number</label>
                                <input class="form-control" type="text" placeholder="Enter Mobile Number"
                                    name="mobile_no"required>

                            </div>
                            <div class="form-group">
                                <label>Gender</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="male" value="male">Male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="female" value="female">Female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="gender" id="other" value="other">Other
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="3" name="address" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="id_proof">Document of Id Proof(PDF Form)</label>
                                <input type="file" name="id_proof" id="id_proof" accept="application/pdf" required>
                            </div>
                            <div class="form-group">
                                <label>Any Disability</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="disability" id="yes" value="yes">yes
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="disability" id="no" value="no">no
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="profile">Profile Image</label>
                                <input type="file" name="profile" id="profile" accept="image/*" required>
                            </div>
                            <button type="submit" class="btn btn-info" name="submit">Submit </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer Sectoion-->
    <?php include_once('footer.php'); ?>