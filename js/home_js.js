$(document).ready(function(){
$("#slider > div:gt(0)").hide();

setInterval(function() { 
  $('#slider > div:first')
  .fadeIn(2000)
    .next()
      .fadeOut(2000)
    .end()
  .appendTo("#slider")
   ;
}, 5000);

});