<?php
/*
Template Name: PageOfPosts
*/

get_header();
get_sidebar();
?>

<aside class="double">
	<h2>Archives by Month</h2>
	<ul>
	<?php wp_get_archives('type=monthly'); ?>
	</ul>
</aside>

<?php
if (have_posts()) : while (have_posts()) : the_post();?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<div class="entry-content">
			
			<?php the_content(); ?>

			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
		
<?php endwhile; endif; ?>

<?php
$args = array( 'numberposts' => 5, 'order'=> 'DESC', 'orderby' => 'date' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?> 
	<section class="entry-content">
		<h3><?php the_title(); ?></h3>
		<time class="meta" datetime="<?php echo date(DATE_W3C); ?>" pubdate class="updated"><?php the_time('F jS, Y') ?></time>
		<p>
			<?php the_excerpt(); ?>
			
			<a href="<?php echo get_permalink(); ?>"> Read More...</a>
		</p>
	</section>
<?php endforeach; ?>

		</div>
		
	</article>

<?php get_footer(); ?>