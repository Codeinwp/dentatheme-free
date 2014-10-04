<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/webdevstudios/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'dentatheme_metaboxes' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function dentatheme_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = 'ti_';

	$meta_boxes['testimonials_details_metabox'] = array(
		'id'         => 'testimonials_details',
		'title'      => __( 'Testimonials - Details', 'ti' ),
		'pages'      => array( 'testimonials' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Position:', 'ti' ),
				'desc' => __( 'Type the position (example: C.E.O., Founder, etc.).', 'ti' ),
				'id'   => $prefix . 'testimonial_position',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Company Name:', 'ti' ),
				'desc' => __( 'Type the company name (example: ThemeIsle L.L.C., etc.).', 'ti' ),
				'id'   => $prefix . 'testimonial_companyname',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Company Link:', 'ti' ),
				'desc' => __( 'Type the company link (example: http://www.themeisle.com).', 'ti' ),
				'id'   => $prefix . 'testimonial_companylink',
				'type' => 'text_medium',
			),
		),
	);

	$meta_boxes['page_custom_metaboxes'] = array(
		'id'         => 'page_custom_metaboxes',
		'title'      => __( 'Informations', 'ti' ),
		'pages'      => array( 'page' ),
		'show_on'    => array( 'key' => 'page-template', 'value' => 'page-custom.php' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Title:', 'ti' ),
				'id'   => $prefix . 'informations_title',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'E-mail:', 'ti' ),
				'id'   => $prefix . 'informations_email',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Telephone:', 'ti' ),
				'id'   => $prefix . 'informations_telephone',
				'type' => 'text_medium',
			),

			array(
				'name' => __( 'URL:', 'ti' ),
				'id'   => $prefix . 'informations_url',
				'type' => 'text_medium',
			),
		),
	);

	$meta_boxes['doctors_metaboxes'] = array(
		'id'         => 'doctors_metaboxes',
		'title'      => __( 'Social Links:', 'ti' ),
		'pages'      => array( 'doctors' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Facebook:', 'ti' ),
				'id'   => $prefix . 'doctors_facebook',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Twitter:', 'ti' ),
				'id'   => $prefix . 'doctors_twitter',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Google+:', 'ti' ),
				'id'   => $prefix . 'doctors_googleplus',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'LinkedIn:', 'ti' ),
				'id'   => $prefix . 'doctors_linkedin',
				'type' => 'text_medium',
			),
		),
	);

	$meta_boxes['page_ourdoctors_metaboxes'] = array(
		'id'         => 'page_ourdoctors_metaboxes',
		'title'      => __( 'Settings', 'ti' ),
		'pages'      => array( 'page' ),
		'show_on'    => array( 'key' => 'page-template', 'value' => 'page-ourdoctors.php' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Number of articles:', 'ti' ),
				'id'   => $prefix . 'ourdoctors_numberofarticles',
				'type' => 'text_medium',
			),
		),
	);

	return $meta_boxes;
}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
/**
 * Initialize the metabox class.
 */
function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
