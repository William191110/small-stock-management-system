



  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <h2>SSLLP System</h2>
                <br>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light"> Register to continue.</h6>
              <form method="post" action="<?php echo base_URL('register'); ?>" class="pt-3">
              <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="fname" placeholder="Name" required> 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="lname" placeholder="Surname" required> 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="tof" placeholder="Type of farming" required> 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="location" placeholder="Location" required> 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" name="contact" placeholder="Contact" required> 
                </div>  
              <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email" required> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password" required >
                </div>
                <div class="mt-3">
                  <input class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="register" value="Sign Up">
                </div>
                
                <div class="text-center mt-4 fw-light">
                  Already have an account? <a href="<?php echo base_URL('login'); ?>" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>

