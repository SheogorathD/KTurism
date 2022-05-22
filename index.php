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
	<?php
		// циклы вывода записей
		// если записи найдены
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();
                the_content();


				echo apply_shortcodes('the_content', 'do_shortcode', 11);
			}
		}
		// елси записей не найдено
		else{
			echo ' <p>Записей нет...</p>';
		}
		?>
                <?php  ?>

	</div>

<?php get_footer(); ?>