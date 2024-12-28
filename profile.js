new WOW().init();
$(function(){
    //hamburger menu click
    $('#nav_toggle').click(function(){
      $("#top-head").toggleClass('open');
      $("nav").slideToggle(500);
    });
});
   