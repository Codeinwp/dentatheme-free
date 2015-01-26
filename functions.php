<?php

/**
 *	Require Once
 */
require_once( 'includes/customizer.php' );
require_once( 'includes/metaboxes/custom-metaboxes.php' );
require_once( 'includes/custom-functions.php' );
require_once( 'includes/custom-widgets.php' );

/**
 *  Setup
 */
if ( !function_exists( 'denta_lite_setup' ) ) {

    function denta_lite_setup() {

        // Post Thumbnails
        add_theme_support( 'post-thumbnails' );

        // Automatic Feed Links
        add_theme_support( 'automatic-feed-links' );

        // Title Tag
        add_theme_support( "title-tag" );

        // Custom Header
        $args_custom_header = array(
            'width'         => '262',
            'height'        => '90',
            'flex-height'   => true,
            'header-text'   => true,
            'default-image' => get_template_directory_uri() . '/images/logo.png'
        );
        add_theme_support( "custom-header", $args_custom_header );

        // Custom Background
        $args_custom_background = array(
            'default-color'         => '#ffffff',
            'default-repeat'        => 'no-repeat',
            'default-attachment'    => 'fixed'
        );
        add_theme_support( "custom-background", $args_custom_background );

        // Add Editor Style
        add_editor_style();

        // The Post Thumbnail
        the_post_thumbnail();

        // Header Navigation
        $header_navigation_args = array(
            'header_navigation' => __( 'Header Navigation', 'denta_lite' )
        );
        register_nav_menus( $header_navigation_args );

    }

}
add_action( 'after_setup_theme', 'denta_lite_setup' );

/**
 *	WP Enqueue Style
 */
function denta_lite_wp_enqueue_style() {
	wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.1.4' );
    wp_enqueue_style( 'nivo-lightbox', get_template_directory_uri() . '/css/nivo-lightbox.css', array(), '1.2.0' );
	wp_enqueue_style( 'font-family-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:600italic,400italic,400,600,700,300,800' );
    wp_enqueue_style( 'font-family-cabin', 'http://fonts.googleapis.com/css?family=Cabin' );
    wp_enqueue_style( 'font-family-source-sans-pro', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro' );
    if ( is_singular() ) wp_enqueue_script( "comment-reply" );
    if ( is_rtl() ) {
        wp_enqueue_style( 'rtl', get_template_directory_uri() . '/rtl.css', array(), '1.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'denta_lite_wp_enqueue_style' );

/**
 *	WP Enqueue Script
 */
function denta_lite_wp_enqueue_script() {
    wp_enqueue_script( 'masonry' );
    wp_enqueue_script( 'all-scripts', get_template_directory_uri() . '/js/all-scripts.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), '3.7.2', false );
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'denta_lite_wp_enqueue_script' );

/**
 * Load only in IE as of WP 4.1
 */
function denta_lite_html5shiv( $tag, $handle, $src ) {
    if ( 'html5shiv' === $handle ) {
        $tag = "<!--[if lt IE 9]>\n";
        $tag .= "<script type='text/javascript' src='$src'></script>\n";
        $tag .= "<![endif]-->\n";
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'denta_lite_html5shiv', 10, 3 );

/**
 *  Content Width
 */
if ( ! isset( $content_width ) ) $content_width = 756;

/**
 *  General Sidebar
 */
function denta_lite_general_sidebar() {

    $args = array(
        'id'            => 'general_sidebar',
        'name'          => __( 'General Sidebar', 'denta_lite' ),
        'description'   => __( 'Use this sidebar to display widgets in your website, including posts and pages.', 'denta_lite' ),
        'before_title'  => '<div class="title-widget">',
        'after_title'   => '</div>',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
    );
    register_sidebar( $args );

}
add_action( 'widgets_init', 'denta_lite_general_sidebar' );

/**
 *  WP Title
 */
function denta_lite_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'denta_lite' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'denta_lite_wp_title', 10, 2 );