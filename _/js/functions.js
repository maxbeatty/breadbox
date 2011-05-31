// remap jQuery to $
(function($){

	$('#searchform input[type="text"]').focus(function() {
		$(this).attr('value', '');
		$(this).parent().animate({opacity:1});
	})
		.blur(function(){
			if($(this).val() == "") {
				$(this).attr('value', 'Search');
			}
			$(this).parent().animate({opacity:0.6});
	});

})(window.jQuery);