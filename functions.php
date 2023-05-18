<?php
/*
* Noticias HSN funciones y definiciones
*
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*
*/

/*
* Definiendo constante del tema
*
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*
*/
define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT . '/img');


/*
* Definiendo caracteristicas del tema
*
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*
*/

// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
	$content_width = 1200;

if ( ! function_exists('hsn_custom_theme_features') ) {

// Register Theme Features
function hsn_custom_theme_features()  {

	// Add theme support for Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	// Add theme support for Featured Images
    add_theme_support('post-thumbnails', array( 'post', 'page' ));

    // Add theme support for document Title tag
    add_theme_support('title-tag');

	// Add theme support for HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Add theme support for Translation
	load_theme_textdomain( 'hsn', get_template_directory() . '/language' );

    //add imagen personalizada
    add_image_size('blog_size_image', 760, 397, true);
}
add_action( 'after_setup_theme', 'hsn_custom_theme_features' );

}

/*
* Limite de caracteristicas
*
*/

add_filter( 'excerpt_length', function($length) {

	return 16;
	
} );
function ejr_nuevo_excerpt ($more) {
	global $post;
	return '...';
	}
add_filter ('excerpt_more', 'ejr_nuevo_excerpt');

/*
* Preparando Api Rest
*
*/

function prepare_rest($data, $post, $request){
    $_data = $data->data;
    
    
    //Categories
    $cats = get_the_category($post->ID);
    
    $_data['cats'] = $cats;
    $data->data = $_data;
    
    return $data;
}
add_filter ('rest_prepare_post', 'prepare_rest', 10, 3);





/*
* Registrando y cargando estilos
*
*/
require_once('includes/scripts-style.php');

/*
* Registrando y cargando zonas de menus
*
*/
require_once('includes/menus.php');

/*
* Añadiendo funciones al personalizador
*
*/
require_once('includes/personalizador-theme.php');

