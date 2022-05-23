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
	/**
	 * Возвращает все URL картинок первой галереи из указанного текста записи.
	 * Вернёт результат, если галлерея есть и вставлена как блок (Гутенберг).
	 */
function get_post_block_gallery_images( $post = 0 ) {
	$post = get_post( $post );

	// Запись не нашлась - возвращаем пустой массив
	if ( ! is_a( $post, 'WP_Post' ) ) {
		return [];
	}

	// Блок "Галерея" не нашелся - возвращаем пустой массив
	if ( ! has_block( 'gallery', $post->post_content ) ) {
		return [];
	}

	// Ищем все блоки в контенте
	$post_blocks = parse_blocks( $post->post_content );

	// Перебираем все блоки в поисках нужного
	foreach ( $post_blocks as $block ) {
		// Ищем блок "Галерея" с переданными ID изображений
		if ( $block['blockName'] === 'core/gallery' && ! empty( $block['attrs']['ids'] ) ) {
			return array_map( function ( $image_id ) {
				// Получаем ссылку на оригинал изображения
				return wp_get_attachment_image_url( $image_id, 'full' );
			}, $block['attrs']['ids'] );
		}
	}

	// Если блок "Галерея" не нашелся - возвращаем пустой массив
	return [];
}
?>