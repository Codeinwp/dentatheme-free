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

	$meta_boxes['page_custom_metaboxes'] = array(
		'id'         => 'page_custom_metaboxes',
		'title'      => __( 'Informations', 'denta_lite' ),
		'pages'      => array( 'page' ),
		'show_on'    => array( 'key' => 'template-template', 'value' => 'template-custom.php' ),
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true,
		'fields'     => array(
			array(
				'name' => __( 'Title:', 'denta_lite' ),
				'id'   => $prefix . 'informations_title',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'E-mail:', 'denta_lite' ),
				'id'   => $prefix . 'informations_email',
				'type' => 'text_medium',
			),
			array(
				'name' => __( 'Telephone:', 'denta_lite' ),
				'id'   => $prefix . 'informations_telephone',
				'type' => 'text_medium',
			),

			array(
				'name' => __( 'URL:', 'denta_lite' ),
				'id'   => $prefix . 'informations_url',
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
