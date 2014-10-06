<?php

/**
 *	Require Once
 */
require_once( 'includes/customizer.php' );
require_once( 'includes/metaboxes/custom-metaboxes.php' );
require_once( 'includes/custom-functions.php' );
require_once( 'includes/custom-widgets.php' );

/**
 *	WP Enqueue Style
 */
function ti_wp_enqueue_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_style( 'font-family-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:600italic,400italic,400,600,700,300,800' );
    wp_enqueue_style( 'font-family-cabin', 'http://fonts.googleapis.com/css?family=Cabin' );
    wp_enqueue_style( 'font-family-source-sans-pro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro' );
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
    if ( is_rtl() ) {
        wp_enqueue_style( 'rtl', get_template_directory_uri() . '/css/rtl.css', array(), '1.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'ti_wp_enqueue_style' );

/**
 *	WP Enqueue Script
 */
function ti_wp_enqueue_script() {
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'carouFredSel', get_template_directory_uri() . '/js/jquery.carouFredSel-6.2.1-packed.js', array( 'jquery' ), '6.2.1', true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'ti_wp_enqueue_script' );

/**
 *	Custom Navigation Menus
 */
function ti_custom_navigation_menus() {

	$locations = array(
		'header_navigation' => __( 'Header Navigation', 'ti' ),
        'footer_navigation' => __( 'Footer Navigation', 'ti' )
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'ti_custom_navigation_menus' );

/**
 *  Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 756;

/**
 *	Add Theme Support
 */
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

/**
 *  Custom Post Type: Testimonials
 */
function ti_testimonials() {

    $labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'ti' ),
        'singular_name'       => _x( 'Testimonial', 'Post Type Singular Name', 'ti' ),
        'menu_name'           => __( 'Testimonials', 'ti' ),
        'parent_item_colon'   => __( 'Parent Testimonial:', 'ti' ),
        'all_items'           => __( 'All Testimonials', 'ti' ),
        'view_item'           => __( 'View Testimonial', 'ti' ),
        'add_new_item'        => __( 'Add New Testimonial', 'ti' ),
        'add_new'             => __( 'Add New Testimonial', 'ti' ),
        'edit_item'           => __( 'Edit Testimonial', 'ti' ),
        'update_item'         => __( 'Update Testimonial', 'ti' ),
        'search_items'        => __( 'Search Testimonial', 'ti' ),
        'not_found'           => __( 'Not found Testimonial', 'ti' ),
        'not_found_in_trash'  => __( 'Not found Testimonial in Trash', 'ti' ),
    );
    $args = array(
        'label'               => __( 'testimonials', 'ti' ),
        'description'         => __( 'Description for testimonials.', 'ti' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
        'taxonomies'          => array(),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-comments',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    register_post_type( 'testimonials', $args );

}
add_action( 'init', 'ti_testimonials', 0 );

/**
 *  General Sidebar
 */
function ti_general_sidebar() {

    $args = array(
        'id'            => 'general_sidebar',
        'name'          => __( 'General Sidebar', 'ti' ),
        'description'   => __( 'Use this sidebar to display widgets in your website, including posts and pages.', 'ti' ),
        'before_title'  => '<div class="title-widget">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'ti_general_sidebar' );