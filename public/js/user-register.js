$(document).ready(function() {
  var success=$('#msg').data('success');
  var province = $("#province");
  var district = $("#district");
  var base_url = $("#base_url").text().trim();
  console.log(base_url,"base");
  
  console.log(success,"success");
    var error=$('#msg').data('error');
    console.log(error,"error");
    var warning=$('#msg').data('warning');
    console.log(warning,"warning");
    if(success){
        console.log(success,"success");
        toastr.success(success);
    }
    if(error){
        toastr.error(error);
    }
    if(warning){
        toastr.warning(warning);
    }
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
    document.getElementById('designation').addEventListener('change', function() {
      if (this.value === 'Other') {
          document.getElementById('designationOther').style.display = 'block';
      } else {
          document.getElementById('designationOther').style.display = 'none';
      }
  });

  // document.getElementById('workplace').addEventListener('change', function() {
  //     if (this.value === 'OTHERS (PLEASE SPECIFY)') {
  //         document.getElementById('workplaceOther').style.display = 'block';
  //     } else {
  //         document.getElementById('workplaceOther').style.display = 'none';
  //     }
  // });

  $("#workplace").on("change", function(e){
    console.log($(this).val(),"value");
    
    if($(this).val()=="OTHERS (PLEASE SPECIFY)"){
      $(".otherWorkPlace").show();
      // console.log("hi");
      
    }else{
      // console.log("hello");
      
      $(".otherWorkPlace").hide();
    }
  })
  $("#MemberType").on("change", async function(e){
    console.log($(this).val(),"value");
    var selectedText = $(this).find('option:selected').text();
    console.log(selectedText, "text");
    
    if(selectedText == "NEPAS MEMBERS" || selectedText == "NEPAS MEMBERS (>70 YEARS)"){
        $(".nepasid").show();
    } else {
        $(".nepasid").hide();
    }
    if($(this).val() !=""){
      await GetPaymentTypeOnMemberId($(this).val());
    }
    
  })

  // Initialize display state
  // if (document.getElementById('designation').value !== 'Other') {
  //     document.getElementById('designationOther').style.display = 'none';
  // }
  // if (document.getElementById('workplace').value !== 'Others') {
  //     document.getElementById('workplaceOther').style.display = 'none';
  // }
  $("#province").on("change", async function(e){
    console.log(e);
    await GetlistofDisctrictByStateId($(this).val());
  })

  async function GetPaymentTypeOnMemberId(value){
    return new Promise((resolve, reject) => {
      // district
      //   .html('<option value="">Please Wait...</option>')
      //   .trigger("change");
      var GetPaymentTypeOnMemberId = $.ajax({
        url: base_url +"/ajaxGetPaymentTypeOnMemberId/" + value,
        method: "get",
        dataType: "json",
      });

      GetPaymentTypeOnMemberId.done(function (res) {
        console.log(res);
        // district.html("");
        $(".paymentmodalshow").show();
        if (res && res.length > 0) {
          // Update the selected member type
          $("#selectedmembertype").text(res[0].name);
          
          // Update the price tag with currency and price
          $(".pricetag").text(res[0].currency + ' ' + res[0].price +' ');
      }
        // district.html("");  // Clear previous options

        // // Add the default "Select District" option
        // district.append('<option value="">Select District</option>');

        // // Populate the select dropdown with the district data
        // res.forEach(function(districtData) {
        //   district.append('<option value="' + districtData.id + '">' + districtData.district_name + '</option>');
        // });

        resolve(true);
      });

      GetPaymentTypeOnMemberId.fail(function (xhr) {
        // district.html("").trigger("change");
        // district.select2({ data: [] });
        resolve(false);
      });
    });
  }
  $('.paymentqurbutton').on('click', function() {
    // Show the modal
    $('#paymentModal').modal('show');
    
    // Assuming 'res' is the response from your previous AJAX call containing QR code and price information
    // GetPaymentTypeOnMemberId.done(function (res) {
    //     console.log(res);  // Log response to check the data
        
    //     // Check if the response contains the QR code URL and price
    //     if (res && res.length > 0) {
    //         // Set the QR code image source dynamically
    //         $('#qrCodeImage').attr('src', res[0].qrcodeUrl); // Assuming res[0].qrcodeUrl is the URL for the QR code image
            
    //         // Set the price dynamically
    //         $('#paymentPrice').text(res[0].currency + ' ' + res[0].price);
    //     }
    // });
});
async function GetlistofDisctrictByStateId(stateId, selectedDistrict = null) {
  return new Promise((resolve, reject) => {
      $("#district")
          .html('<option value="">Please Wait...</option>')
          .trigger("change");

      $.ajax({
          url: base_url + "/ajaxGetDistrictList/" + stateId,
          method: "get",
          dataType: "json",
      })
      .done(function (res) {
          let districtDropdown = $("#district");
          districtDropdown.html("");  // Clear previous options
          districtDropdown.append('<option value="">Select District</option>'); // Default option

          res.forEach(function (districtData) {
              let isSelected = selectedDistrict && districtData.id == selectedDistrict ? "selected" : "";
              districtDropdown.append('<option value="' + districtData.id + '" ' + isSelected + '>' + districtData.district_name + '</option>');
          });

          resolve(true);
      })
      .fail(function (xhr) {
          $("#district").html("").trigger("change");
          resolve(false);
      });
  });
}

    
  });