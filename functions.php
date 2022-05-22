<?php
/**
 * KhersonTurism functions and definitions
 *
 */
	add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/assets/css/style.css' );
		
} );
add_filter( 'the_content', 'do_shortcode', 11 );

	add_theme_support( 'post-Zthumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );

	function wpb_custom_new_menu() {
		register_nav_menus(
		  array(
			'main_menu' => __( 'Main Menu' ),
		  )
		);
	  }
	  add_action( 'init', 'wpb_custom_new_menu' );
	
	function vid( $name ){
		echo get_template_directory_uri() . '/assets/video/' . $name;
	}
	
	function timage( $name ){
		echo get_template_directory_uri() . '/assets/img/tour/' . $name;
	}
	
	function taudio( $name ){
		echo get_template_directory_uri() . '/assets/audio/' . $name;
	}
	
	function abimage( $name ){
		echo get_template_directory_uri() . '/assets/img/about-us/' . $name;
	}
	
	function oimage( $name ){
		echo get_template_directory_uri() . '/assets/img/object/' . $name;
	}
	
	function page( $name ){
		echo get_template_directory_uri() . '/details/' . $name;
	}
 ?>