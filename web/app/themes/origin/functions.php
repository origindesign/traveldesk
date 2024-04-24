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

	wp_enqueue_block_style( 'core/pullquote', array(
		'handle' => 'origin-pullquote',
		'src'    => get_theme_file_uri( "assets/css/chunks/pullquote.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/pullquote.min.css" ),
	) );

	wp_enqueue_block_style( 'core/list', array(
		'handle' => 'origin-list',
		'src'    => get_theme_file_uri( "assets/css/chunks/list.min.css" ),
		'path'   => get_theme_file_path( "assets/css/chunks/list.min.css" ),
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
 * Add post 'read time' shortcode.
*/
function origin_reading_duration_shortcode( $atts, $content = null ) {
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);

	if ($readingtime == 1) {
		$timer = " min";
	} else {
		$timer = " mins";
	}
	$totalreadingtime = '<div class="read-time">' . '<span>' . $readingtime . $timer . '</span></div>';

	return $totalreadingtime;
}
add_shortcode("reading_duration", "origin_reading_duration_shortcode");

/**
 * Current year dynamic shortcode
 */
function footer_copyright() {
	$year = date_i18n ('Y');
	return '<p>© 2000 - ' . $year . ' MMGY Roam, LLC d/b/a TravelDesk is a wholly owned subsidiary of MMGY Global, LLC.</p>';
}
add_shortcode ('footer_copyright', 'footer_copyright');

/**
 * Remove comments from admin menu.
*/
function origin_remove_admin_menus() {
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_init', 'origin_remove_admin_menus' );


/**
 * Enqueue remote assets.
 */
function origin_theme_assets() {
	wp_enqueue_style( 'icomoon', 'https://cdn.icomoon.io/42560/TravelDesk/style.css?51yfns' );
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

	wp_enqueue_script(
		'scroll-magic',
		'https://cdn.jsdelivr.net/combine/npm/gsap@3.11.4/dist/gsap.min.js,npm/scrollmagic@2.0.8/scrollmagic/uncompressed/ScrollMagic.min.js,npm/scrollmagic@2.0.8/scrollmagic/minified/plugins/animation.gsap.min.js',
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
 * Register taxonomy - 'Categories', for Insights CPT.
 */
function origin_register_taxonomy_cat() {
	// Define UI labels
	$labels = array(
		'name' => _x( 'Categories ( Insights )', 'taxonomy general name' ),
		'singular_name' => _x( 'Categories', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Categories' ),
		'all_items' => __( 'All Categories' ),
		'parent_item' => __( 'Parent Category' ),
		'parent_item_colon' => __( 'Parent Category:' ),
		'edit_item' => __( 'Edit Category' ), 
		'update_item' => __( 'Update Category' ),
		'add_new_item' => __( 'Add New Category' ),
		'new_item_name' => __( 'New Category Name' ),
		'menu_name' => __( 'Categories ( Insights )' ),
	);

	// Now register the taxonomy
	register_taxonomy('categories-insights',array('insights'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categories-insights' ),
	));
}
add_action( 'init', 'origin_register_taxonomy_cat', 0 );

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

/**
 * Set default featured taxonomy. This is then used as part of the 'featured' post display logic.
 */
function origin_set_default_featured( $post_id, $post ) {
	if ( 'publish' === $post->post_status ) {
		$defaults = array(
			'featured' => array( 'standard' ),
			);
		$taxonomies = get_object_taxonomies( $post->post_type );
		foreach ( (array) $taxonomies as $taxonomy ) {
			$terms = wp_get_post_terms( $post_id, $taxonomy );
			if ( empty( $terms ) && array_key_exists( $taxonomy, $defaults ) ) {
				wp_set_object_terms( $post_id, $defaults[$taxonomy], $taxonomy );
			}
		}
	}
}
add_action( 'save_post', 'origin_set_default_featured', 100, 2 );

/**
 * wp-login customizations.
 */
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

/**
 * Add print attr in order to defer the resource until page load.
 */
function origin_defer_css( $html, $handle ) {
	$handles = array( 'icomoon' );
	if ( in_array( $handle, $handles ) ) {
	  $html = str_replace( 'media=\'all\'', 'media=\'print\' onload="this.onload=null;this.media=\'all\'"', $html );
	}
	return $html;
}
add_filter( 'style_loader_tag', 'origin_defer_css', 10, 2 );

/**
 * Remove default 'Posts' from dashboard.
 */

// Remove side menu
add_action( 'admin_menu', 'remove_default_post_type' );
function remove_default_post_type() {
	remove_menu_page( 'edit.php' );
}

// Remove +New post in top Admin Menu Bar
add_action( 'admin_bar_menu', 'remove_default_post_type_menu_bar', 999 );
function remove_default_post_type_menu_bar( $wp_admin_bar ) {
	$wp_admin_bar->remove_node( 'new-post' );
}

// Remove Quick Draft Dashboard Widget
add_action( 'wp_dashboard_setup', 'remove_draft_widget', 999 );
function remove_draft_widget(){
	remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
}
  
// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );
