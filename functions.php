<?php
/**
 * KhersonTurism functions and definitions
 *
 */
add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );
} );

add_filter( 'the_content', 'do_shortcode', 11 );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support('menus');

	// register menu
// Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu Location',
		'mobile-menu' => 'Mobile Menu Location',
	)
);	

function vid( $name ){
	echo get_template_directory_uri() . '/assets/video/' . $name;
}
function taudio( $name ){
	echo get_template_directory_uri() . '/assets/audio/' . $name;
}
function oimage( $name ){
	echo get_template_directory_uri() . '/assets/img/object/' . $name;
}
?>