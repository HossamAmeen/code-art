$(document).ready(function() {

  var state = 1;
  $(".dropDown-navLink_login").click(function() {
    $(".user_card-dropdown").slideToggle("fast");
    
    
  });
  $(".dropDown-navLink").click(function() {
    $(".nav-link-dropdown").slideToggle("fast");
    console.log("tog");
    state = 1;
  });
  $(function () {
    $('[data-toggle="popover"]').popover()
  })
});
