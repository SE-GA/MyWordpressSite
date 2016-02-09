jQuery(document).ready(function($) {
 
  $(".owl-carousel").owlCarousel({
  	  navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      pagination : false,
      paginationSpeed : 400,
      mouseDrag: false
	});	
  $('.flexslider').flexslider({
    animation: "slide"
  });
  


  //   $('#ddmenu a').on('click', function(e){
  //   e.preventDefault();
  // });
    
  // $('#ddmenu li').hover(function () {
  //    clearTimeout($.data(this,'timer'));
  //    $('ul',this).stop(true,true).slideDown(200);
  // }, function () {
  //   $.data(this,'timer', setTimeout($.proxy(function() {
  //     $('ul',this).stop(true,true).slideUp(200);
  //   }, this), 100));
  // });
});
