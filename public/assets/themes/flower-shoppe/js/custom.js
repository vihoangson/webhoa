$('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('Còn %D ngày <b>%H:%M:%S</b>'));
    });
});


$(".images-block li .img-responsive.thumbnail").click(function(){
    m = $(".images-block p .img-responsive.thumbnail").attr("src");
    n = $(this).attr("src");
    $(".images-block p .img-responsive.thumbnail").attr("src",n);
    $(this).attr("src",m);
});

//MAGNIFIC POPUP
$(document).ready(function() {
  $('.images-block').magnificPopup({
    delegate: 'a', 
    type: 'image',
    gallery: {
      enabled: true
    }
  });
});

(function($) {

  "use strict";
	
  // TOOLTIP	
  $(".header-links .fa, .tool-tip").tooltip({
	placement: "bottom"
  });
  $(".btn-wishlist, .btn-compare, .display .fa").tooltip('hide');
  
  // Product Owl Carousel
	$("#owl-product").owlCarousel({
		autoPlay: false, //Set AutoPlay to 3 seconds
		items : 4,
		stopOnHover : true,
		navigation : true, // Show next and prev buttons
		pagination : false,
		navigationText : ["<span class='fa fa-angle-left'></span>","<span class='fa fa-angle-right'></span>"]
	});

  // TABS
  $('.nav-tabs a').click(function (e) {
    e.preventDefault();
	$(this).tab('show');
  });	
	
})(jQuery);

