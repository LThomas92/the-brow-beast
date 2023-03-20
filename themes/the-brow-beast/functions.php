<?php
/**
 * That Hair Glow functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package That_Hair_Glow
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'that_hair_glow_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function that_hair_glow_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on That Hair Glow, use a find and replace
		 * to change 'that-hair-glow' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'that-hair-glow', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'that-hair-glow' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

				register_nav_menus(
					array(
						'menu-1' => esc_html__( 'Primary', 'The Brow Beast' ),
						'menu-2' => esc_html__( 'Secondary', 'That Brow Beast' ),
					)
		        );

	 // Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'that_hair_glow_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'that_hair_glow_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function that_hair_glow_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'that_hair_glow_content_width', 640 );
}
add_action( 'after_setup_theme', 'that_hair_glow_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function that_hair_glow_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'that-hair-glow' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'that-hair-glow' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'that_hair_glow_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function that_hair_glow_scripts() {
	$manifest = json_decode(file_get_contents('dist/assets.json', true));
	$main = $manifest->main;

	wp_enqueue_style( 'that-hair-grow-style', get_template_directory_uri() . $main->css, false, null );

	wp_enqueue_script('veganease-js', get_template_directory_uri() . $main->js, ['jquery, slick-js'], null, true);
	wp_enqueue_style( 'slick-style',"//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css");
	// wp_register_script( 'slick', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js");
	// wp_enqueue_script("slick");
	wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js", ['jquery'], null, true);

	wp_enqueue_script('veganease-styles-js', get_template_directory_uri() . $main->js, ['jquery', 'slick-js'], null, true);

	wp_enqueue_script( 'that-hair-glow-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'that_hair_glow_scripts' );

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

<<<<<<< HEAD
add_filter( 'gform_confirmation_anchor', '__return_true' );

if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page();
    
}
=======
add_filter( 'gform_confirmation_anchor', '__return_true' );
>>>>>>> dc6dea2c9f01025355a14ae096c92c56b27c0123
