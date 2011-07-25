		<footer id="footer">
			<a name="footer"></a>		
			<section>
				<h3>Pages</h3>
				<ul>
					<?php wp_list_pages('title_li='); ?>
				</ul>
			</section>
			
			<section>
				<h3>Around the Web</h3>
				<ul>
					<?php wp_list_bookmarks(array(
						'categorize' => 0,
						'title_li' => null,
						'show_images' => 0
					)); ?>
					
					<li>
						<a href="http://twitter.com/anpret" class="twitter-follow-button" data-button="grey" data-text-color="#787878" data-link-color="#cececf" data-show-count="false">Follow @anpret</a>
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
					</li>
				</ul>
			</section>
			
			<section>
				<h3>Join Our Mailing List</h3>
				<!-- Begin MailChimp Signup Form -->
				<script type="text/javascript">
					// delete this script tag and use a "div.mce_inline_error{ XXX !important}" selector
					// or fill this in and it will be inlined when errors are generated
					var mc_custom_error_style = 'color:#bd1421;';
				</script>
				<div id="mc_embed_signup">
				<form action="http://anpret.us1.list-manage1.com/subscribe/post?u=3af1cb386b285381d5b04cfa5&amp;id=3d207c9c1d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
					<fieldset>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address </label>
							<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="you@yours.com">
						</div>
						
						<div id="mce-responses">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>
						
						<div>
<!-- 							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn" /> -->
							<button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn">Subscribe</button>
						</div>
						
						<p>Powered by <a href="http://eepurl.com/dT1RT" title="MailChimp - email marketing made easy and fun">MailChimp</a></p>

					</fieldset>
				</form>
				</div>
				<script type="text/javascript">
				var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';
				try {
				    var jqueryLoaded=jQuery;
				    jqueryLoaded=true;
				} catch(err) {
				    var jqueryLoaded=false;
				}
				var head= document.getElementsByTagName('head')[0];
				if (!jqueryLoaded) {
				    var script = document.createElement('script');
				    script.type = 'text/javascript';
				    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
				    head.appendChild(script);
				    if (script.readyState && script.onload!==null){
				        script.onreadystatechange= function () {
				              if (this.readyState == 'complete') mce_preload_check();
				        }    
				    }
				}
				var script = document.createElement('script');
				script.type = 'text/javascript';
				script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
				head.appendChild(script);
				var err_style = '';
				try{
				    err_style = mc_custom_error_style;
				} catch(e){
				    err_style = 'margin: 1em 0 0 0; padding: 1em 0.5em 0.5em 0.5em; background: ERROR_BGCOLOR none repeat scroll 0% 0%; font-weight: bold; float: left; z-index: 1; width: 80%; -moz-background-clip: -moz-initial; -moz-background-origin: -moz-initial; -moz-background-inline-policy: -moz-initial; color: ERROR_COLOR;';
				}
				var head= document.getElementsByTagName('head')[0];
				var style= document.createElement('style');
				style.type= 'text/css';
				if (style.styleSheet) {
				  style.styleSheet.cssText = '.mce_inline_error {' + err_style + '}';
				} else {
				  style.appendChild(document.createTextNode('.mce_inline_error {' + err_style + '}'));
				}
				head.appendChild(style);
				setTimeout('mce_preload_check();', 250);
				
				var mce_preload_checks = 0;
				function mce_preload_check(){
				    if (mce_preload_checks>40) return;
				    mce_preload_checks++;
				    try {
				        var jqueryLoaded=jQuery;
				    } catch(err) {
				        setTimeout('mce_preload_check();', 250);
				        return;
				    }
				    try {
				        var validatorLoaded=jQuery("#fake-form").validate({});
				    } catch(err) {
				        setTimeout('mce_preload_check();', 250);
				        return;
				    }
				    mce_init_form();
				}
				function mce_init_form(){
				    jQuery(document).ready( function($) {
				      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
				      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
				      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
				      options = { url: 'http://anpret.us1.list-manage.com/subscribe/post-json?u=3af1cb386b285381d5b04cfa5&id=3d207c9c1d&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
				                    beforeSubmit: function(){
				                        $('#mce_tmp_error_msg').remove();
				                        $('.datefield','#mc_embed_signup').each(
				                            function(){
				                                var txt = 'filled';
				                                var fields = new Array();
				                                var i = 0;
				                                $(':text', this).each(
				                                    function(){
				                                        fields[i] = this;
				                                        i++;
				                                    });
				                                $(':hidden', this).each(
				                                    function(){
				                                        var bday = false;
				                                        if (fields.length == 2){
				                                            bday = true;
				                                            fields[2] = {'value':1970};//trick birthdays into having years
				                                        }
				                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
				                                    		this.value = '';
													    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
				                                    		this.value = '';
													    } else {
					                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
					                                    }
				                                    });
				                            });
				                        return mce_validator.form();
				                    }, 
				                    success: mce_success_cb
				                };
				      $('#mc-embedded-subscribe-form').ajaxForm(options);      
				      
				    });
				}
				function mce_success_cb(resp){
				    $('#mce-success-response').hide();
				    $('#mce-error-response').hide();
				    if (resp.result=="success"){
				        $('#mce-'+resp.result+'-response').show();
				        $('#mce-'+resp.result+'-response').html(resp.msg);
				        $('#mc-embedded-subscribe-form').each(function(){
				            this.reset();
				    	});
				    } else {
				        var index = -1;
				        var msg;
				        try {
				            var parts = resp.msg.split(' - ',2);
				            if (parts[1]==undefined){
				                msg = resp.msg;
				            } else {
				                i = parseInt(parts[0]);
				                if (i.toString() == parts[0]){
				                    index = parts[0];
				                    msg = parts[1];
				                } else {
				                    index = -1;
				                    msg = resp.msg;
				                }
				            }
				        } catch(e){
				            index = -1;
				            msg = resp.msg;
				        }
				        try{
				            if (index== -1){
				                $('#mce-'+resp.result+'-response').show();
				                $('#mce-'+resp.result+'-response').html(msg);            
				            } else {
				                err_id = 'mce_tmp_error_msg';
				                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
				                
				                var input_id = '#mc_embed_signup';
				                var f = $(input_id);
				                if (ftypes[index]=='address'){
				                    input_id = '#mce-'+fnames[index]+'-addr1';
				                    f = $(input_id).parent().parent().get(0);
				                } else if (ftypes[index]=='date'){
				                    input_id = '#mce-'+fnames[index]+'-month';
				                    f = $(input_id).parent().parent().get(0);
				                } else {
				                    input_id = '#mce-'+fnames[index];
				                    f = $().parent(input_id).get(0);
				                }
				                if (f){
				                    $(f).append(html);
				                    $(input_id).focus();
				                } else {
				                    $('#mce-'+resp.result+'-response').show();
				                    $('#mce-'+resp.result+'-response').html(msg);
				                }
				            }
				        } catch(e){
				            $('#mce-'+resp.result+'-response').show();
				            $('#mce-'+resp.result+'-response').html(msg);
				        }
				    }
				}
				
				</script>
				<!--End mc_embed_signup-->
			</section>
			
			<span>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
			<!-- Code is Poetry -->
			
		</footer>

	</div><!-- #content .page-wrap -->

	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
</body>
</html>