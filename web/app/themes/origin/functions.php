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

// Remove core block patterns
add_action('init', function() {
	remove_theme_support('core-block-patterns');
},  9  );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
add_action('enqueue_block_editor_assets', function () {
	wp_enqueue_style('editor-assets', get_stylesheet_directory_uri() . '/assets/css/editor.min.css');
}, 999);

/**
 * Enqueue the main CSS files.
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

/**
 * Enqeueue specific block styles if block is present on page.
 */
function origin_enqueue_specific_block_styles() {
	wp_enqueue_block_style( 'core/quote', array(
		'handle' => 'origin-quote',
		'src'    => get_theme_file_uri( "assets/css/chunks/quote.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/quote.min.css" ),
	) );

	wp_enqueue_block_style( 'core/query-pagination', array(
		'handle' => 'origin-pagination',
		'src'    => get_theme_file_uri( "assets/css/chunks/pagination.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/pagination.min.css" ),
	) );

	wp_enqueue_block_style( 'core/query', array(
		'handle' => 'origin-query',
		'src'    => get_theme_file_uri( "assets/css/chunks/cards.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/cards.min.css" ),
	) );

	wp_enqueue_block_style( 'core/table', array(
		'handle' => 'origin-table',
		'src'    => get_theme_file_uri( "assets/css/chunks/table.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/table.min.css" ),
	) );

	wp_enqueue_block_style( 'core/post-terms', array(
		'handle' => 'origin-table',
		'src'    => get_theme_file_uri( "assets/css/chunks/tags-channels.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/tags-channels.min.css" ),
	) );

	wp_enqueue_block_style( 'cloudcatch/splide-carousel', array(
		'handle' => 'origin-carousel',
		'src'    => get_theme_file_uri( "assets/css/chunks/carousel-text.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/carousel-text.min.css" ),
	) );

	wp_enqueue_block_style( 'yoast/faq-block', array(
		'handle' => 'origin-faq',
		'src'    => get_theme_file_uri( "assets/css/chunks/accordion.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/accordion.min.css" ),
	) );

	wp_enqueue_block_style( 'jetpack/contact-form', array(
		'handle' => 'origin-form',
		'src'    => get_theme_file_uri( "assets/css/chunks/forms.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/forms.min.css" ),
	) );
}
add_action( 'init', 'origin_enqueue_specific_block_styles' );


// Allow SVG's.
function origin_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'origin_mime_types');

/**
 * Enqueue remote assets.
 */
function origin_theme_assets() {
	wp_enqueue_style( 'style-name', 'https://cdn.icomoon.io/42560/TravelDesk/style.css?l5ffji' );
}
add_action( 'wp_enqueue_scripts', 'origin_theme_assets' );

/**
 * JS Assets
 */
function origin_theme_js() {
	wp_enqueue_script(
		'origin-splide-custom',
		get_template_directory_uri() . '/assets/js/ui.js',
		array( 'wp-blocks' ),
		ORIGIN_VERSION,
		true
	);
	wp_enqueue_script(
		'origin-splide-custom',
		get_template_directory_uri() . '/assets/js/splide-custom.js',
		array( 'wp-blocks' ),
		ORIGIN_VERSION,
		true
	);
}
add_action( 'enqueue_block_assets', 'origin_theme_js' );

/**
 * Register CPT's.
 * - Register 'Case Studies' post type.
 * - Register 'Insights' post type.
 */
function origin_cpt() {
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

	$labels_insights = array(
		'name'               => _x( 'Insights', 'insights' ),
		'singular_name'      => _x( 'Insights', 'insight' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Insight' ),
		'edit_item'          => __( 'Edit Insight' ),
		'new_item'           => __( 'New Insight' ),
		'all_items'          => __( 'All Insights' ),
		'view_item'          => __( 'View Insight' ),
		'search_items'       => __( 'Search Insights' ),
		'not_found'          => __( 'No insights found' ),
		'not_found_in_trash' => __( 'No insights found in the Trash' ), 
		'menu_name'          => 'Insights'
	);
	$args_insights = array(
		'labels'        => $labels_insights,
		'description'   => 'Holds our insights data',
		'public'        => true,
		'menu_position' => 6,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
		'show_in_rest'  => true,
		'taxonomies' => array('client'),
	);
	register_post_type( 'insights', $args_insights ); 
}
add_action( 'init', 'origin_cpt' );

/**
 * Register taxonomy - 'Clients'.
 */
function origin_register_taxonomy_clients() {
	// Define UI labels
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
	register_taxonomy('clients',array('case-study', 'insights'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		// 'public' => false,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'client' ),
	));
}
add_action( 'init', 'origin_register_taxonomy_clients', 0 );

/**
 * Register taxonomy - 'Channels', for Case Study CPT.
 */
function origin_register_taxonomy_channels() {
	// Define UI labels
	$labels = array(
		'name' => _x( 'Channels', 'taxonomy general name' ),
		'singular_name' => _x( 'Channel', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Channels' ),
		'all_items' => __( 'All Channels' ),
		'parent_item' => __( 'Parent Channel' ),
		'parent_item_colon' => __( 'Parent Channel:' ),
		'edit_item' => __( 'Edit Channel' ), 
		'update_item' => __( 'Update Channel' ),
		'add_new_item' => __( 'Add New Channel' ),
		'new_item_name' => __( 'New Channel Name' ),
		'menu_name' => __( 'Channels' ),
	);

	// Now register the taxonomy
	register_taxonomy('channels',array('case-study'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'channels' ),
	));
}
add_action( 'init', 'origin_register_taxonomy_channels', 0 );

/**
 * Register taxonomy - 'Featured'.
 */
function origin_register_taxonomy_featured() {
	// Define UI labels
	$labels = array(
		'name' => _x( 'Featured', 'taxonomy general name' ),
		'singular_name' => _x( 'Featured', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Featured' ),
		'all_items' => __( 'All Featured' ),
		'parent_item' => __( 'Parent Featured' ),
		'parent_item_colon' => __( 'Parent Featured:' ),
		'edit_item' => __( 'Edit Featured' ), 
		'update_item' => __( 'Update Featured' ),
		'add_new_item' => __( 'Add New Featured' ),
		'new_item_name' => __( 'New Featured Name' ),
		'menu_name' => __( 'Featured' ),
	);

	// Now register the taxonomy
	register_taxonomy('featured',array('case-study', 'insights'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'featured' ),
	));
}
add_action( 'init', 'origin_register_taxonomy_featured', 0 );

function origin_custom_login() {
	echo '<style type="text/css">
	  h1 a {
		background-image: url(' . get_template_directory_uri() . '/assets/images/traveldesk-red.svg) !important;
		width: 300px !important;
		background-size: contain !important;
		background-position: center center !important;
	  }
	</style>';
}
add_action('login_head', 'origin_custom_login');
  
// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );
