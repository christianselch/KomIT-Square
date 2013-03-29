(function($){
	$(document).ready(function(){

		$('#slider').nivoSlider({
			/* effect: 'slideInLeft', */
			effect: "fade",
			pauseTime: 5000,
			directionNav: false,
			prevText: "Forrige",
			nextText: "Next",
		});

		$(".contactMail").html('<a href="mailto:Square Te - Virum <square@mail.dk>">square@mail.dk</a>');

		$(window).on("resize", function(){
	        if($(window).width() > 600)
	        {
	            $("#contactSidebar").remove().insertAfter($("#main"));
	        } else {
	            $("#contactSidebar").remove().insertBefore($("#main"));
	        }
		})
		$(window).trigger("resize");

		if($(".wpcf7-response-output").length > 0){
			$(".wpcf7-response-output").remove().insertBefore($(".wpcf7-form p:first"));
		}
	});
})(jQuery);