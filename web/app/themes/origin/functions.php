<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package origin
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'ORIGIN_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function origin_setup() {
	add_editor_style( './assets/css/main.min.css' );
	add_editor_style( './assets/css/editor.min.css' );
}
add_action( 'after_setup_theme', 'origin_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function origin_styles() {
	wp_enqueue_style(
		'origin-style',
		get_stylesheet_uri(),
		[],
		ORIGIN_VERSION
	);
	wp_enqueue_style(
		'origin-shared-styles',
		get_theme_file_uri( 'assets/css/main.min.css' ),
		[],
		ORIGIN_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'origin_styles' );

add_action( 'customize_register', '__return_true' );

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );

// Allow SVG's.
function origin_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'origin_mime_types');

/**
 * Remote assets.
 */
function origin_theme_assets() {
	wp_enqueue_style( 'style-name', 'https://cdn.icomoon.io/42560/TravelDesk/style.css?nh15ks' );
}
add_action( 'wp_enqueue_scripts', 'origin_theme_assets' );

/**
 * CPT's
 */
function origin_cpt_case_study() {
	$labels = array(
		'name'               => _x( 'Case Studies', 'case studies' ),
		'singular_name'      => _x( 'Case Study', 'case study' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Case Study' ),
		'edit_item'          => __( 'Edit Case Study' ),
		'new_item'           => __( 'New Case Study' ),
		'all_items'          => __( 'All Case Studies' ),
		'view_item'          => __( 'View Case Study' ),
		'search_items'       => __( 'Search Case Studies' ),
		'not_found'          => __( 'No case studies found' ),
		'not_found_in_trash' => __( 'No case studies found in the Trash' ), 
		'menu_name'          => 'Case Study'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Holds our case studies data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'show_in_rest'  => true,
		'taxonomies' => array('client'),
	);
	register_post_type( 'case-study', $args ); 
}
add_action( 'init', 'origin_cpt_case_study' );



  
add_action( 'init', 'origin_clients_taxonomy', 0 );
  
  
function origin_clients_taxonomy() {
  
  $labels = array(
    'name' => _x( 'Clients', 'taxonomy general name' ),
    'singular_name' => _x( 'Client', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Clients' ),
    'all_items' => __( 'All Clients' ),
    'parent_item' => __( 'Parent Client' ),
    'parent_item_colon' => __( 'Parent Client:' ),
    'edit_item' => __( 'Edit Client' ), 
    'update_item' => __( 'Update Client' ),
    'add_new_item' => __( 'Add New Client' ),
    'new_item_name' => __( 'New Client Name' ),
    'menu_name' => __( 'Clients' ),
  );    
  
// Now register the taxonomy
  register_taxonomy('clients',array('case-study'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'client' ),
  ));
  
}