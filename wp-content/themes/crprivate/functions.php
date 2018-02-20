<?php
/**
 * crPrivate functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package crPrivate
 */

if ( ! function_exists( 'crprivate_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function crprivate_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on crPrivate, use a find and replace
		 * to change 'crprivate' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'crprivate', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size('item-gallery', 1920, 1080, true);
		add_image_size('featured-item', 360, 216, true);
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'crprivate' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'crprivate_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'crprivate_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crprivate_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crprivate_content_width', 640 );
}
add_action( 'after_setup_theme', 'crprivate_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crprivate_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'crprivate' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'crprivate' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'crprivate_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crprivate_scripts() {
	wp_enqueue_style( 'crprivate-style', get_stylesheet_uri() );

	wp_enqueue_script( 'crprivate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'crprivate-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crprivate_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * CPT additions.
 */
require get_template_directory() . '/inc/cpt.php';

function carga_estilos_home()
{
	if ( is_page( 'contact-us' ) ) {
		//wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
		//wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . '/Font-awesome/css/font-awesome.min.css' );
       // wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
		//wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	}
	else if( is_page( 'tours-activities' ) ){ 
		//wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap2.min.css' );
		//wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	}
	wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style('flatpickr', get_template_directory_uri() . '/css/flatpickr.min.css');
	
	wp_register_style( 'bundle',
		get_template_directory_uri() . '/css/bundle.css',
		array(),
		'1.1',
		'all' );

		wp_enqueue_style( 'bundle' );
  
}
add_action('wp_print_styles', 'carga_estilos_home');


function carga_scripts_home()
{	
	
	
	if ( is_page( 'contact-us' ) ) {
		wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/jquery-1.10.2.min.jss' );
    } 
	else if( is_page( 'tours-activities' ) ){ 
		//wp_enqueue_style( 'bootstrap.min', get_template_directory_uri() . '/js/jquery-1.10.2.min.jss' );
	
	}
		
		wp_register_script( 'bundle',
		get_template_directory_uri() . '/js/bundle.js',
		array(),
		'1.1',
		'all' );

		wp_enqueue_script( 'bundle' );
}
add_action('wp_print_scripts', 'carga_scripts_home');


