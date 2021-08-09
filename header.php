<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KhersonTurism
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
        <p class="logo">ГІД (НЕ)ТУРИСТИЧНОЮ ХЕРСОНЩИНОЮ</p>

        <nav class="navbar">
        <?php
            wp_nav_menu( array( 
                'theme_location' => 'main_menu', 
                'container_class' => 'nav' ) ); 
            ?>
        </nav>
    </header>