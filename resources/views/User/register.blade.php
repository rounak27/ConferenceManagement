
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>
  <div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-8 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo">
              <img src="images/logo.svg" alt="logo">
            </div>
            <h4>New here?</h4>
            <h6 class="fw-light">Register Yourself to Join the NEPAS Conference</h6>

            <form id="signupForm" action="{{url('register')}}" method="post" class="pt-3">
              @csrf
              <div class="row">
                <!-- First Name -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="FName" id="FName" placeholder="First Name" required>
                    <span id="errorFName" class="text-danger"></span>
                  </div>
                </div>
                <!-- Middle Name -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="MName" placeholder="Middle Name">
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Last Name -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="LName" id="LName" placeholder="Last Name" required>
                    <span id="errorLName" class="text-danger"></span>
                  </div>
                </div>
                <!-- Email -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="Email" placeholder="Email" required>
                    <span id="errorEmail" class="text-danger"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Mobile Number -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="MobileNo" id="MobileNo" placeholder="Mobile Number" required>
                    <span id="errorMobileNo" class="text-danger"></span>
                  </div>
                </div>

                <!-- Gender -->
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
                          <label class="form-check-label" for="genderMale">
                            Male
                          </label>
                        </div>
                      </div>
                    <div class="col-md-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                        <label class="form-check-label" for="genderFemale">
                          Female
                        </label>
                      </div>
                    </div>
                  </div>
                  <span id="errorGender" class="text-danger"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Address -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="Address" id="Address" placeholder="Address">
                  </div>
                </div>
                <!-- Country -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="Country" name="Country" placeholder="Country">
                  </div>
                </div>
              </div>

              <div class="row">
                <!-- Password -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="password" id="Password" placeholder="Password" required>
                    <span id="errorPassword" class="text-danger"></span>
                  </div>
                </div>
                <!-- Confirm Password -->
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="ConfirmPassword" placeholder="Confirm Password" required>
                    <span id="errorConfirmPassword" class="text-danger"></span>
                  </div>
                </div>
              </div>

              <!-- Optional Fields -->
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <select class="form-select form-select-lg" id="MemberType" name="MemberType">
                      <option value="">Member Type</option>
                      <option value="1">Member Type 1</option>
                      <option value="2">Member Type 2</option>
                      <option value="3">Member Type 3</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="NepasID" name="NepasID" placeholder="Nepas ID">
                  </div>
                </div>
              </div>

              <!-- Terms & Conditions -->
              <!-- <div class="mb-4">
                <div class="form-check">
                  <label class="form-check-label text-muted">
                    <input type="checkbox" class="form-check-input" id="TermsConditions" required> I agree to all Terms & Conditions
                  </label>
                  <span id="errorTermsConditions" class="text-danger"></span>
                </div>
              </div> -->

              <!-- Submit Button -->
              <div class="mt-3 d-grid gap-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN UP</button>
              </div>

              <!-- Login Link -->
              <div class="text-center mt-4 fw-light">Already have an account? <a href="{{url('login')}}" class="text-primary">Login</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/todolist.js"></script>
    <script src="js/user-register.js"></script>
    <!-- endinject -->
  </body>
</html>