<?php 
	get_header();
	
	get_sidebar();

	if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</article>

		<?php endwhile; endif;
	
	get_footer();
?>
