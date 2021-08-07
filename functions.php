<?php
/**
 * KhersonTurism functions and definitions
 *
 * @package WordPress
 * @subpackage KhersonTurism
 * @since KhersonTurism 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since KhersonTurism 1.0
 */
 load_theme_textdomain( 'KhersonTurism' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'KhersonTurism' ),
		'header'  => __( 'Header menu', 'KhersonTurism' ),
		'footer'  => __( 'Footer menu', 'KhersonTurism' ),
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
	/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
 
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<?php
}
/*
* Creating a function to create widget
*/
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'KhersonTurism' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'KhersonTurism' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );

/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'Slider', 'Post Type General Name', 'KhersonTurism' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'KhersonTurism' ),
		'menu_name'           => __( 'slider', 'KhersonTurism' ),
		'parent_item_colon'   => __( 'Parent slider', 'KhersonTurism' ),
		'all_items'           => __( 'All slider', 'KhersonTurism' ),
		'view_item'           => __( 'View slider', 'KhersonTurism' ),
		'add_new_item'        => __( 'Add New slider', 'KhersonTurism' ),
		'add_new'             => __( 'Add New', 'KhersonTurism' ),
		'edit_item'           => __( 'Edit slider', 'KhersonTurism' ),
		'update_item'         => __( 'Update slider', 'KhersonTurism' ),
		'search_items'        => __( 'Search slider', 'KhersonTurism' ),
		'not_found'           => __( 'Not Found', 'KhersonTurism' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'KhersonTurism' ),
	);
	$args = array(
		'label'               => __( 'Slider', 'KhersonTurism' ),
		'description'         => __( 'Slider news and reviews', 'KhersonTurism' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );

function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'main_menu' => __( 'Main Menu' ),
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );

function vid( $name ){
	echo get_template_directory_uri() . '/media/video/' . $name;
}

function timage( $name ){
	echo get_template_directory_uri() . '/media/img/tour/' . $name;
}

function taudio( $name ){
	echo get_template_directory_uri() . '/media/audio/' . $name;
}


// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );
/**
 * Add Subtitle in admin post
 *
 * @param WP_Post $post Post object.
 *
 * @return void
 */
function subtitle( $post ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// The subtitle field.
	$_stitle = sanitize_text_field( get_post_meta( $post->ID, '_subtitle', true ) );
	
    echo '<div class="inside">';
	echo '<div id="edit-slug-box" class="hide-if-no-js">';
	echo '<label for="subtitle"><strong>' . __( 'Sub Title: ' ) . '</strong></label>';
    echo '<input type="text" name="subtitle" id="subtitle" value="' .  $_stitle . '" size="30" spellcheck="true" autocomplete="off" />';
	echo '</div>';
    echo '</div>';	
}



function testi_post_type() {
	$labels = array(
		'name'                => _x( 'Testimonials', 'Post Type General Name', 'KhersonTurism' ),
		'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'KhersonTurism' ),
		'menu_name'           => __( 'Testimonials', 'KhersonTurism' ),
		'parent_item_colon'   => __( 'Parent Testimonials', 'KhersonTurism' ),
		'all_items'           => __( 'All Testimonials', 'KhersonTurism' ),
		'view_item'           => __( 'View Testimonials', 'KhersonTurism' ),
		'add_new_item'        => __( 'Add New Testimonials', 'KhersonTurism' ),
		'add_new'             => __( 'Add New', 'KhersonTurism' ),
		'edit_item'           => __( 'Edit Testimonials', 'KhersonTurism' ),
		'update_item'         => __( 'Update Testimonials', 'KhersonTurism' ),
		'search_items'        => __( 'Search Testimonials', 'KhersonTurism' ),
		'not_found'           => __( 'Not Found', 'KhersonTurism' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'KhersonTurism' ),
	);
	$args = array(
		'label'               => __( 'Testimonials', 'KhersonTurism' ),
		'description'         => __( 'Testimonials news and reviews', 'KhersonTurism' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,

		'menu_position'       => 6,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testi_post_type', 0 );



/**
 * Save Subtitle
 *
 * @param int     $post_ID Post ID.
 * @param WP_Post $post    Post object.
 * @param bool    $update  Whether this is an existing post being updated or not.
 *
 * @return void
 */
function save_subtitle( $post_ID, $post, $update ) {

	if ( ! in_array( $post->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// Prevent to execute twice.
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX ) {
		return;
	}

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

	// Get the subtitle value from $_POST.
	$_stitle = filter_input( INPUT_POST, 'subtitle', FILTER_SANITIZE_STRING );

	if ( $update ) {
		// Update the post meta.
		update_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ) );
	} else if ( ! empty ( $_stitle ) ) {
		// Add unique post meta.
		add_post_meta( $post_ID, '_subtitle', sanitize_text_field( $_stitle ), true );
	}
}

add_action( 'edit_form_after_title', 'subtitle', 20 );
add_action( 'wp_insert_post', 'save_subtitle', 20, 3 );