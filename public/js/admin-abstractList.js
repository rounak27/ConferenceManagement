$(document).ready(function(){
    // var success=$('#msg').data('success');
    // var error=$('#msg').data('error');
    // if(success){
    //     console.log(success,"success");
    //     toastr.success(success);
    // }
    // if(error){
    //     toastr.error(error);
    // }
    $('[data-toggle="tooltip"]').tooltip();
    $(".delete-btn").on("click", function () {
        console.log("delete-btn");
        var abstractId = $(this).data("abstractid"); // Get abstractId from button
        $("#abstractId").val(abstractId); // Set hidden input value
    });
    $(".abstractListTable").DataTable({
        "paging": true,
        "lengthChange": true,
        
        "ordering": true,
        
        "autoWidth": false,
        "responsive": true
    });
    $('#sendEmailModal').on('show.bs.modal', function (event) {
        console.log("HI");
        
        // Get the button that triggered the modal
        var button = $(event.relatedTarget); 
        
        // Get the data-payment-document attribute
        var abstractId = button.data('abstractid');
        var userId = button.data('userid');
        console.log(abstractId,"abstractId");
        
        $('#abstractId').val(abstractId);
        $('#UserId').val(userId);

    });
});