<?php
/**
 * freighthub functions and definitions
 *
 * @package freighthub
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1170; /* pixels */
}


/**
 * Set Default Function
 */
if ( ! function_exists( 'freighthub_setup' ) ) :
function freighthub_setup() {

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Registering Navigation Menu
	register_nav_menus( array(
		'header' => __( 'Header Menu', 'freighthub' ),
		'footer' => __( 'Footer Menu', 'freighthub' ),
	) );

	//add featured image
	add_theme_support( 'post-thumbnails');

	// Add HTML 5 support
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );
}
endif;
add_action( 'after_setup_theme', 'freighthub_setup' );


/**
 * Register widget area.
 */
function freighthub_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'freighthub' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'freighthub_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function freighthub_scripts() {
	// enqueue style
	wp_enqueue_style( 'style-google-font', 'http://fonts.googleapis.com/css?family=Titillium+Web:200,400,600,700,900' );
    wp_enqueue_style( 'style-main', get_stylesheet_uri() );
	//wp_enqueue_style( 'style-grid',  get_template_directory_uri() . '/css/grid.css' );
	wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'style-responsive', get_template_directory_uri() . '/css/responsive.css' );

	// enqueue script
	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'freighthub_scripts' );


/**
 * Include Necessary function
 */
require get_template_directory() . '/inc/function-basic.php';


/**
 * Adding Theme Option
 */
require get_template_directory() . '/inc/theme-option/framework.php';
require get_template_directory() . '/inc/theme-option/configuration.php';

/**
 * Add editor style
 */
add_editor_style( get_template_directory_uri() . '/css/editor-style.css' );
