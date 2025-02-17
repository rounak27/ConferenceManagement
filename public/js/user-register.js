$(document).ready(function() {
    // Email Validation
    $('#Email').on('input', function() {
      var email = $(this).val();
      var regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!regex.test(email)) {
        $('#errorEmail').text('Please enter a valid email address.');
      } else {
        $('#errorEmail').text('');
      }
    });
    //Mobile Number Validation
    $("#MobileNo").on("input", function () {
        var mobileNumber = $(this).val();
        var mobilePattern = /^[0-9]{10}$/; // 10 digits

        if (mobilePattern.test(mobileNumber)) {
            $(this).removeClass("is-invalid").addClass("is-valid");
            $("#mobileError").remove(); // Remove error message if valid
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
            if ($("#mobileError").length === 0) {
                $(this).after('<span id="mobileError" class="text-danger">Please enter a valid 10-digit mobile number.</span>');
            }
        }
    });
    // Password Validation
    $('#Password').on('input', function() {
      var password = $(this).val();
      if (password.length < 8) {
        $('#errorPassword').text('Password must be at least 8 characters long.');
      } else {
        $('#errorPassword').text('');
      }
    });
  
    // Confirm Password Validation
    $('#ConfirmPassword').on('input', function() {
      var password = $('#Password').val();
      var confirmPassword = $(this).val();
      if (password !== confirmPassword) {
        $('#errorConfirmPassword').text('Passwords do not match.');
      } else {
        $('#errorConfirmPassword').text('');
      }
    });
  
    // Form Submission
    $('#signupForm').on('submit', function(e) {
      e.preventDefault();
  
      var isValid = true;
  
      // Check if all required fields are filled
      $('#signupForm input[required]').each(function() {
        if ($(this).val() === '') {
          $(this).next('span').text('This field is required.');
          isValid = false;
        } else {
          $(this).next('span').text('');
        }
      });
  
    //   // Terms & Conditions checkbox
    //   if (!$('#TermsConditions').is(':checked')) {
    //     $('#errorTermsConditions').text('You must agree to the Terms & Conditions.');
    //     isValid = false;
    //   } else {
    //     $('#errorTermsConditions').text('');
    //   }
  
      // If everything is valid, submit the form
      if (isValid) {
        this.submit();
      }
    });
  });
  