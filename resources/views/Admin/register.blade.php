<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register-NEPCON 2025</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/typicons/typicons.css">
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/nepaslogoSmall.png')}}" />
    <style>
      .toast-success {
          background-color: #51a351 !important;
          color: #fff !important;
      }
      .toast-error {
          background-color: #bd362f !important;
          color: #fff !important;
      }
      .toast-warning {
          background-color: #f89406 !important;
          color: #fff !important;
      }
      </style>
  </head>
  <body>
    <div class="card "id="msg"  data-success='{{ session("success") }}' data-warning='{{ session("warning") }}' data-error='{{ session("error") }}'></div>
  <div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth px-0">
      <div class="row w-100 mx-0">
        <div class="col-lg-8 mx-auto">
          <div class="auth-form-light text-left py-5 px-4 px-sm-5">
            <div class="brand-logo text-center">
              <img src="{{asset('images/nepaslogoSmall.png')}}" alt="logo">
            </div>
            <h4>New here?</h4>
            <h6 class="fw-light">Register Yourself to Join the NEPAS Conference</h6>

            <form id="signupForm" action="{{url('register')}}" method="post" class="pt-3" enctype="multipart/form-data">
    @csrf
    <div class="row g-3 mt-2">
    <div class="col-md-6">
            <label for="Email" class="form-label">Email *</label>
            <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Email" required>
            <span id="errorEmail" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="designation" class="form-label">Designation *</label>
            <select class="form-select" id="designation" name="designation" required>
                <option value="">Choose Designation</option>
                <option value="Dr.">Dr.</option>
                <option value="Mr.">Mr.</option>
                <option value="Ms.">Ms.</option>
                <option value="Professor">Professor</option>
                <option value="Associate Professor">Associate Professor</option>
                <option value="Assistant Professor">Assistant Professor</option>
                <option value="Other">Other (Specify)</option>
            </select>
        </div>     
    </div>
    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="FName" class="form-label">First Name *</label>
            <input type="text" class="form-control" name="FName" id="FName" placeholder="Enter First Name" required>
            <span id="errorFName" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="MName" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="MName" id="MName" placeholder="Enter Middle Name">
        </div>
    </div>

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="LName" class="form-label">Last Name *</label>
            <input type="text" class="form-control" name="LName" id="LName" placeholder="Enter Last Name" required>
            <span id="errorLName" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="MobileNo" class="form-label">Mobile Number *</label>
            <input type="text" class="form-control" name="MobileNo" id="MobileNo" placeholder="Enter Mobile Number" maxlength="10" required>
            <span id="errorMobileNo" class="text-danger"></span>
        </div>
        
    </div>

    <div class="row g-3 mt-2">
        
        
        <div class="col-md-6">
            <label class="form-label">Gender *</label>
            <div class="row m-2">
              <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male">
                <label class="form-check-label" for="genderMale">Male</label>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                <label class="form-check-label" for="genderFemale">Female</label>
            </div>
            </div>
            <span id="errorGender" class="text-danger"></span>
            </div>
        </div>
        <!-- Meal Preference -->
    <div class="col-md-6">
      
    
    <label for="workplace" class="form-label">Meal Preference *</label>
        <select class="form-select form-select-lg" name="mealPreference" id="mealPreference" required>
          <option value="">Select Meal Preference</option>
          <option value="VEGETARIAN">VEGETARIAN</option>
          <option value="NON VEGETARIAN">NON VEGETARIAN</option>
        </select>
      </div>
    
    </div>

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="Address" class="form-label">Address</label>
            <input type="text" class="form-control" name="Address" id="Address" placeholder="Enter Address">
        </div>
        <div class="col-md-6">
            <label for="Country" class="form-label">Country</label>
            <input type="text" class="form-control" id="Country" name="Country" placeholder="Enter Country">
        </div>
    </div>

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="Password" class="form-label">Password *</label>
            <input type="password" class="form-control" name="password" id="Password" placeholder="Enter Password" required>
            <span id="errorPassword" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="ConfirmPassword" class="form-label">Confirm Password *</label>
            <input type="password" class="form-control" id="ConfirmPassword" placeholder="Confirm Password" required>
            <span id="errorConfirmPassword" class="text-danger"></span>
        </div>
    </div>

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="MemberType" class="form-label">Member Type</label>
            <select class="form-select" id="MemberType" name="MemberType">
                <option value="">Select Member Type</option>
                @foreach($memberTypes as $memberType)
                    <option value="{{$memberType->id}}">{{$memberType->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="NepasID" class="form-label">Nepas ID</label>
            <input type="text" class="form-control" id="NepasID" name="NepasID" placeholder="Enter Nepas ID">
        </div>
    </div>

    
    <div class="row g-3 mt-2">
    <!-- Workplace -->
    <div class="col-md-6">
    <label for="workplace" class="form-label">WorkPlace *</label>
      <div class="form-group">
        <input type="text" class="form-control form-control-lg" name="workplace" id="workplace" placeholder="Workplace / Hospital / Institution" required>
      </div>
    </div>
    <!-- Other Workplace -->
    <div class="col-md-6">
    <label for="otherWorkplace" class="form-label">Other Workplace</label>
      <div class="form-group">
        <input type="text" class="form-control form-control-lg" name="otherWorkplace" id="otherWorkplace" placeholder="If Other, specify">
      </div>
    </div>
    <div class="g-recaptcha" data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}"></div>
  @error('g-recaptcha-response')
    <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>

    <!-- <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="paymentProof" class="form-label">Upload Payment Proof (Max 10 MB) *</label>
            <input type="file" class="form-control" id="paymentProof" name="paymentProof" accept="image/*,application/pdf" required>
        </div>
        <div class="col-md-6">
            <label for="proofLetter" class="form-label">Letter of Proof (Resident/MO/Nurse) (Max 10 MB)</label>
            <input type="file" class="form-control" id="proofLetter" name="proofLetter" accept="image/*,application/pdf">
        </div>
    </div> -->

    <div class="row mt-4">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary btn-lg">Register</button>
        </div>
    </div>
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
    <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- endinject -->
  </body>
</html>