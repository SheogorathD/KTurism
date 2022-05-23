<?php
/**
 * The template for displaying the header
 * 
 * Displays all of the head element and everything up until the "site-content" div.
 * 
 * @package WordPress
 * @subpackage KhersonTurism
 * @since KhersonTurism 1.0
 */
get_header(); ?>

<div class="middle">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content(); ?>
		
	<?php endwhile; else: endif; ?>
</div>

<?php get_footer(); ?>