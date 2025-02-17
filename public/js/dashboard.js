(function($) {
  'use strict';
  $(function() {
    
    
    if ($( ".navbar" ).hasClass( "fixed-top" )) {
      document.querySelector('.page-body-wrapper').classList.remove('pt-0');
      document.querySelector('.navbar').classList.remove('pt-5');
    }
    else {
      document.querySelector('.page-body-wrapper').classList.add('pt-0');
      document.querySelector('.navbar').classList.add('pt-5');
      document.querySelector('.navbar').classList.add('mt-3');
      
    }
    
    
  });
  // iconify.load('icons.svg').then(function() {
  //   iconify(document.querySelector('.my-cool.icon'));
  // });
  var success=$('#msg').data('success');
    var error=$('#msg').data('error');
    if(success){
        console.log(success,"success");
        toastr.success(success);
    }
    if(error){
        toastr.error(error);
    }

  
})(jQuery);