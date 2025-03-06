$(document).ready(function () {
  var base_url = $('#base_url').text();
  console.log(base_url, "Base");

  var tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(function (tooltipTriggerEl) {
      new bootstrap.Tooltip(tooltipTriggerEl)
  });
  $('.paymentStatusToggle').change(function () {
      var userId = $(this).data('user-id');
      var paymentStatus = $(this).prop('checked') ? 1 : 0;  // 1 for checked, 0 for unchecked

      $.ajax({
          url: base_url + '/admin/update-payment-status', // Backend route to update the status
          method: 'POST',
          data: {
              _token: $('meta[name="csrf-token"]').attr("content"),  // CSRF token for security
              user_id: userId,
              payment_status: paymentStatus
          },
          success: function (response) {
              if (response.success) {
                  // Show success message
                  toastr.success('Successfully Updated Payment Status');

                  // Update the payment status span based on the new value
                  var paymentStatusSpan = $('#payment-status-' + userId);  // Target the correct span
                  if (paymentStatus === 1) {
                      // Update to 'Verified'
                      paymentStatusSpan.removeClass('badge-danger').addClass('badge-success').text('Verified');
                  } else {
                      // Update to 'Not Verified'
                      paymentStatusSpan.removeClass('badge-success').addClass('badge-danger').text('Not Verified');
                  }

              } else {
                  // Show an error message if the update fails
                  toastr.error('Failed to Update Payment Status');
              }
          },
          error: function () {
              // Show an error message if something goes wrong with the request
              toastr.error('Something went wrong! Please try again.');
          }
      });
  });
  $('#paymentModal').on('show.bs.modal', function (event) {
    // Get the button that triggered the modal
    var button = $(event.relatedTarget); 

    // Get the data-payment-document attribute
    var paymentDocument = button.data('payment-document'); 

    // If the payment document is available, show the image, otherwise show a placeholder message
    if (paymentDocument) {
        $('#payment-voucher-image').attr('src', 'data:image/png;base64,' + paymentDocument);
        $('#payment-voucher-placeholder').hide(); // Hide the "No image available" message
        $('#payment-voucher-image').show(); // Show the image
    } else {
        $('#payment-voucher-placeholder').show(); // Show the "No image available" message
        $('#payment-voucher-image').hide(); // Hide the image
    }
});

// When the Medical Letter modal is shown
$('#medicalLetterModal').on('show.bs.modal', function (event) {
    // Get the button that triggered the modal
    var button = $(event.relatedTarget); 

    // Get the data-medical-document attribute
    var medicalDocument = button.data('medical-document'); 

    // If the medical document is available, show the image, otherwise show a placeholder message
    if (medicalDocument) {
        $('#medical-letter-image').attr('src', 'data:image/png;base64,' + medicalDocument);
        $('#medical-letter-placeholder').hide(); // Hide the "No image available" message
        $('#medical-letter-image').show(); // Show the image
    } else {
        $('#medical-letter-placeholder').show(); // Show the "No image available" message
        $('#medical-letter-image').hide(); // Hide the image
    }
});
});
