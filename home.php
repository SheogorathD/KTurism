<?php
/**
/* Template Name: Home
 *
 */
?>

 <?php get_header(); ?>
    <?php
		// циклы вывода записей
		// если записи найдены
        
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();
                the_content();

                echo do_shortcode('[mappress]');

                
			}
		}
		// елси записей не найдено
		else{
			echo ' <p>Записей нет...</p>';
		}
		?>
        
	        <?php get_footer(); ?>