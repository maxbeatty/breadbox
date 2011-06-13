		<footer id="footer">
		
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
				</ul>
			</section>
			
			<section>
				<h3>Thanks</h3>
				<ul id="footer-images">
					<li>
						<a href="http://www.mediatemple.net/go/order/?refdom=anpret.com" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/_/img/mt-logo.png" alt="Media Temple" />
						</a>
					</li>
					<li>
						<a href="http://www.w3.org/html/" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/_/img/HTML5_Badge_32.png" alt="HTML5" id="html5" />
						</a>
					</li>
					<li>
						<a href="http://www.wordpress.org" target="_blank">
							<img src="<?php bloginfo('template_directory'); ?>/_/img/wordpress.png" alt="WordPress" />
						</a>
					</li>
				</ul>
			</section>
			
			<span>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></span>
			<!-- Code is Poetry -->
			
		</footer>

	</div><!-- #content .page-wrap -->

	<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
</body>
</html>