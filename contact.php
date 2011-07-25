<?php
/*
Template Name: Contact Form
*/

//If the form is submitted
if(isset($_POST['submitted'])) {

	//Check to see if the honeypot captcha field was filled in
	if(trim($_POST['checking']) !== '') {
		$captchaError = true;
	} else {
	
		//Check to make sure that the name field is not empty
		if(trim($_POST['contactName']) === '') {
			$nameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)(\+[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$", trim($_POST['email']))) {
			$emailError = 'You entered an invalid email address.';
			$hasError = true;
		} else {
			$email = trim($_POST['email']);
		}
			
		//Check to make sure comments were entered	
		if(trim($_POST['comments']) === '') {
			$commentError = 'You forgot to enter your comments.';
			$hasError = true;
		} else {
			if(function_exists('stripslashes')) {
				$comments = stripslashes(trim($_POST['comments']));
			} else {
				$comments = trim($_POST['comments']);
			}
		}
		//If there is no error, send the email
		if(!isset($hasError)) {
			$emailTo = 'info@anpret.com';
			$subject = 'Contact Form Submission from '.$name;
			$sendCopy = trim($_POST['sendCopy']);
			$body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
			$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" . 'Reply-To: ' . $email;
			mail($emailTo, $subject, $body, $headers);
			if($sendCopy == true) {
				$subject = 'You emailed Anpret LLC';
				$headers = 'From: Anpret <info@anpret.com>';
				mail($email, $subject, $body, $headers);
			}
			$emailSent = true;
		}
	}
}

//wp_enqueue_script("contact-form", get_bloginfo('template_directory') . "/_/js/contact-form.js", array('jquery'));
get_header();
get_sidebar();

if (have_posts()) : 
	while (have_posts()) : the_post(); ?>
	
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<div class="entry-content">
			<?php the_content(); ?>
			
			<?php if(isset($emailSent) && $emailSent == true) { ?>
			
				<blockquote class="thanks">
					<h3>Thanks, <?=$name;?></h3>
					<p>Your email was successfully sent. We will be in touch soon.</p>
				</blockquote>
			
			<?php } else { ?>
			
				<?php if(isset($hasError) || isset($captchaError)) { ?>
					<p class="error">There was an error submitting the form.<p>
				<?php } ?>
				
				<form action="<?php the_permalink(); ?>" id="contactForm" method="post">
					
					<label for="contactName">Name</label>
					<input type="text" name="contactName" id="contactName" placeholder="First Last" value="<?php if(isset($_POST['contactName'])) echo $_POST['contactName'];?>" class="requiredField" />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				
					<label for="email">Email</label>
					<input type="text" name="email" id="email" placeholder="you@yours.com" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" class="requiredField email" />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				
					<label for="commentsText">Comments</label>
					<textarea name="comments" id="commentsText" placeholder="Express yourself" rows="10" cols="50" class="requiredField"><?php if(isset($_POST['comments'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['comments']); } else { echo $_POST['comments']; } } ?></textarea>
					<?php if($commentError != '') { ?>
						<span class="error"><?=$commentError;?></span> 
					<?php } ?>
				
					<label class="inline" for="sendCopy">Send a copy of this email to yourself</label>
					<input type="checkbox" name="sendCopy" id="sendCopy" value="true"<?php if(isset($_POST['sendCopy']) && $_POST['sendCopy'] == true) echo ' checked="checked"'; ?> />
				
					<label for="checking" class="screenReader">If you want to submit this form, do not enter anything in this field</label>
					<input type="text" name="checking" id="checking" class="screenReader" value="<?php if(isset($_POST['checking']))  echo $_POST['checking'];?>" />
				
					<input type="hidden" name="submitted" id="submitted" value="true" />
					
					<button type="submit" class="btn">Send Email</button>

				</form>
			<?php } ?>
		</div>
	</article>
	<?php endwhile;
endif;
?>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('form#contactForm').submit(function(e) {
			e.preventDefault();
			
			$('form#contactForm .error').fadeOut().remove();
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
				$('form#contactForm button').fadeOut('normal', function() {
					$(this).parent().append('<img src="<?= bloginfo('template_directory') ?>/_/img/loading.gif" alt="Loading&hellip;" height="16px" width="16px" />');
				});
				var formInput = $(this).serialize();
				$.post(
					$(this).attr('action'),
					formInput,
					function(data){
						$('form#contactForm').slideUp("fast", function() {				   
							$(this).before('<span class="success"><strong>Thanks!</strong> Your email was successfully sent.</span>');
						});
					}
				);
			}
		});
	});
</script>

<?php get_footer(); ?>