  $('#login-btn').click(function () {

            $('.signIn').toggle();
      if ( $('.signIn').is(':visible')){
          $('.main-body').css("filter", "blur(10px)");
		  }
      else{
          $('.main-body').css("filter", "blur(0px)");
      }
        });
