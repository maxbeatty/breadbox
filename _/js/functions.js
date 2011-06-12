// remap jQuery to $
(function($){

	$('#searchform input[type="text"]').focus(function() {
		$(this).parent().animate({opacity:1});
	}).blur(function(){
		$(this).parent().animate({opacity:0.6});
	});

})(window.jQuery);