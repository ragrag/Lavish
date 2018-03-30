<<<<<<< HEAD



/* Fade */

function fade() {
  $('.body').fadeIn(1100);
};



  $('#login-btn').click(function () {
=======
$('#login-btn').click(function () {
>>>>>>> d07258cb65edee94437ad21759d9cf126c59baac

  $('.signIn').toggle();
  if ($('.signIn').is(':visible')) {
    $('.main-body').css("filter", "blur(10px)");
  }
  else {
    $('.main-body').css("filter", "blur(0px)");
  }
});

<<<<<<< HEAD
		

		  
  /*
    Back to Top 
  */
  var btn = $('#backtotop');
=======
>>>>>>> d07258cb65edee94437ad21759d9cf126c59baac

/*
  Back to Top 
*/
var btn = $('#backtotop');

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});

function my() {
  $('.body').fadeIn(1100);
};

<<<<<<< HEAD
  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });

=======
>>>>>>> d07258cb65edee94437ad21759d9cf126c59baac
