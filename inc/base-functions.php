<?php
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'WPBoiler_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since WPBoiler 1.0
 */
function WPBoiler_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WPBoiler, use a find and replace
	 * to change 'WPBoiler' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'WPBoiler', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'WPBoiler' ),
	) );
  
  /**
   * Add the Home link to wp_nav_menu().
   */
  function page_menu_args($args) {
    $args['show_home'] = true;
    return $args;
  }
  add_filter('wp_page_menu_args', 'page_menu_args');


	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', ) );
}
endif; // WPBoiler_setup
add_action( 'after_setup_theme', 'WPBoiler_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since WPBoiler 1.0
 */
function WPBoiler_widgets_init() {
	$sidebars = array('Sidebar', 'Footer 1', 'Footer 2', 'Footer 3');
	foreach($sidebars as $sb) {
		register_sidebar(array('name'=> $sb,
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h1 class="widget-title">',
			'after_title' => '</h1>',
		));
	}
}
add_action( 'widgets_init', 'WPBoiler_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function WPBoiler_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.min.js', array( 'jquery' ), '20130504', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'WPBoiler_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );
?>