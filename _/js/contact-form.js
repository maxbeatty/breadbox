jQuery(document).ready(function($) {
	$('form#contactForm').submit(function(e) {
		e.preventDefault();
		
		$('form#contactForm .error').remove();
		var hasError = false;
		$('.requiredField').each(function() {
			if(jQuery.trim($(this).val()) == '') {
				var labelText = $(this).prev('label').text();
				$(this).parent().append('<span class="error">You forgot to enter your '+labelText+'.</span>');
				hasError = true;
			} else if($(this).hasClass('email')) {
				var emailReg = /^([\w-\.+]+@([\w-]+\.)+[\w-]{2,4})?$/;
				if(!emailReg.test(jQuery.trim($(this).val()))) {
					var labelText = $(this).prev('label').text();
					$(this).parent().append('<span class="error">You entered an invalid '+labelText+'.</span>');
					hasError = true;
				}
			}
		});
		
		if(!hasError) {
			$('form#contactForm li.buttons button').fadeOut('normal', function() {
				$(this).parent().append('<img src="/blog/wp-content/themes/charade-theme/img/loading.gif" alt="Loading&hellip;" height="16" width="16" />');
			});
			var formInput = $(this).serialize();
			$.post(
				$(this).attr('action'),
				formInput,
				function(data){
					$('form#contactForm ol.forms').slideUp("fast", function() {				   
						$(this).before('<blockquote class="thanks"><strong>Thanks!</strong> Your email was successfully sent.</blockquote>');
					});
				}
			);
		}
	});
});