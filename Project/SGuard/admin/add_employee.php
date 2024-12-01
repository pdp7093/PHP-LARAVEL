<!-- Header Section -->
<?php include_once('header.php'); ?>
<div id="wrappeer">
  <div id="page-wrapper">
    <div id="page-inner">
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            EMPLOYEE SINGUP FORM
          </div>
          <div class="panel-body">
            <form role="form">
              
            <div class="form-group">
                <label>Enter Name</label>
                <input class="form-control" type="text" name="name" placeholder="Enter Name">
                
              </div>

              <div class="form-group">
                <label>Enter Email</label>
                <input class="form-control" type="email" name="email" placeholder="Enter Email">
                
              </div>
              <div class="form-group">
                <label>Enter Password</label>
                <input class="form-control" type="password" name="password" placeholder="Enter Password">
                
              </div>
              <div class="form-group">
                <label>Re Type Password </label>
                <input class="form-control" type="password" name="re_password" placeholder="Enter Re-password">
                
              </div>

              <button type="submit" class="btn btn-primary btn-block" name="submit">Register Now </button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<?php include_once('footer.php'); ?>