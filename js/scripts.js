

/* Fade */

function fade() {
  $('.body').fadeIn(1100);
};



$('#login-btn').click(function () {


  $('.signIn').toggle();
  if ($('.signIn').is(':visible')) {
    $('.main-body').css("filter", "blur(10px)");
  }
  else {
    $('.main-body').css("filter", "blur(0px)");
  }
});



		  

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



