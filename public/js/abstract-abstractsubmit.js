$(document).ready(function(){
    var success=$('#msg').data('success');
    var error=$('#msg').data('error');
    if(success){
        console.log(success,"success");
        toastr.success(success);
    }
    if(error){
        toastr.error(error);
    }

});