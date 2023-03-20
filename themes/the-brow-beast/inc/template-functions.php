<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package The_Brow_Beast
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function the_brow_beast_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'the_brow_beast_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function the_brow_beast_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'the_brow_beast_pingback_header' );
<<<<<<< HEAD

//Custom Post Types (CPT)

function custom_post_type() {

	// Set UI labels for Custom Post Type
		$labels = array(
			'name'                => _x( 'Services', 'Post Type General Name' ),
			'singular_name'       => _x( 'Service', 'Post Type Singular Name'),
			'menu_name'           => __( 'Services'),
			'parent_item_colon'   => __( 'Parent Service'),
			'all_items'           => __( 'All  Services' ),
			'view_item'           => __( 'View  Service' ),
			'add_new_item'        => __( 'Add New Service' ),
			'add_new'             => __( 'Add New' ),
			'edit_item'           => __( 'Edit Service' ),
			'update_item'         => __( 'Update Service' ),
			'search_items'        => __( 'Search Services' ),
			'not_found'           => __( 'Not Found' ),
			'not_found_in_trash'  => __( 'Not found in Trash' ),
		);

	// Set other options for Custom Post Type

		$args = array(
			'label'               => __( 'services'),
			'description'         => __( 'services'),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_icon'           => 'dashicons-money-alt',
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'show_in_rest' => true,

		);

		// Registering your Custom Post Type
		register_post_type( 'services', $args );
	}

	add_action( 'init', 'custom_post_type', 0 );

=======
>>>>>>> dc6dea2c9f01025355a14ae096c92c56b27c0123
