<?php

/**
 *	Sanitize Callback: Text
 */
function denta_lite_sanitize_callback_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

/**
 *	Sanitize Callback: Textarea
 */
function denta_lite_sanitize_callback_textarea( $input ) {
	return htmlspecialchars_decode( $input );
}

function dentatheme_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header
    */
    $wp_customize->add_section( 'header_settings' , array(
    	'title'			=> __( 'Header', 'denta_lite' ),
    	'priority'		=> 200,
    	'description'	=> __( 'Denta Lite theme header options.' )
	) );

		/* Top Header - Title 1 */
		$wp_customize->add_setting( 'denta_lite_topheader_title1', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_topheader_title1', array(
		    'label'    => __( 'Opening Hours - Title:', 'denta_lite' ),
		    'section'  => 'header_settings',
		    'settings' => 'denta_lite_topheader_title1',
			'priority' => '1',
		) );

		/* Top Header - Content 1 */
		$wp_customize->add_setting( 'denta_lite_topheader_content1', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'denta_lite_topheader_content1', array(
		            'label' 	=> __( 'Opening Schedule:', 'denta_lite' ),
		            'section' 	=> 'header_settings',
		            'settings' 	=> 'denta_lite_topheader_content1',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Top Header - Title 2 */
		$wp_customize->add_setting( 'denta_lite_topheader_title2', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
			) );
		$wp_customize->add_control( 'denta_lite_topheader_title2', array(
		    'label'    => __( 'Contact Us - Title:', 'denta_lite' ),
		    'section'  => 'header_settings',
		    'settings' => 'denta_lite_topheader_title2',
			'priority' => '3',
		) );

		/* Top Header - Content 2 */
		$wp_customize->add_setting( 'denta_lite_topheader_content2', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
			) );
		$wp_customize->add_control( 'denta_lite_topheader_content2', array(
		    'label'    => __( 'Telephone - Entry:', 'denta_lite' ),
		    'section'  => 'header_settings',
		    'settings' => 'denta_lite_topheader_content2',
			'priority' => '4',
		) );

	/*
    ** Front Page
    */
    $wp_customize->add_section( 'frontpage_settings' , array(
    	'title'       => __( 'Front Page', 'denta_lite' ),
    	'priority'    => 250,
	) );

		/* Features - Box 1 Icon Class */
		$wp_customize->add_setting( 'denta_lite_features_box1iconclass', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_features_box1iconclass', array(
		    'label'    => __( 'Features - Box 1 Icon Class:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_features_box1iconclass',
			'priority' => '8',
		) );

		/* Features - Box 1 Title */
		$wp_customize->add_setting( 'denta_lite_features_box1title', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_features_box1title', array(
		    'label'    => __( 'Features - Box 1 Title:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_features_box1title',
			'priority' => '9',
		) );

		/* Features - Box 1 Entry */
		$wp_customize->add_setting( 'denta_lite_features_box1entry', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'denta_lite_features_box1entry', array(
		            'label' 	=> __( 'Features - Box 1 Entry:', 'denta_lite' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'denta_lite_features_box1entry',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Features - Box 2 Icon Class */
		$wp_customize->add_setting( 'denta_lite_features_box2iconclass', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_features_box2iconclass', array(
		    'label'    => __( 'Features - Box 2 Icon Class:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_features_box2iconclass',
			'priority' => '11',
		) );

		/* Features - Box 2 Title */
		$wp_customize->add_setting( 'denta_lite_features_box2title', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_features_box2title', array(
		    'label'    => __( 'Features - Box 2 Title:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_features_box2title',
			'priority' => '12',
		) );

		/* Features - Box 2 Entry */
		$wp_customize->add_setting( 'denta_lite_features_box2entry', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'denta_lite_features_box2entry', array(
		            'label' 	=> __( 'Features - Box 2 Entry:', 'denta_lite' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'denta_lite_features_box2entry',
		            'priority' 	=> '13'
		        )
		    )
		);

		/* Features - Box 3 Icon Class */
		$wp_customize->add_setting( 'denta_lite_features_box3iconclass', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_features_box3iconclass', array(
		    'label'    => __( 'Features - Box 3 Icon Class:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_features_box3iconclass',
			'priority' => '14',
		) );

		/* Features - Box 3 Title */
		$wp_customize->add_setting( 'denta_lite_features_box3title', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_features_box3title', array(
		    'label'    => __( 'Features - Box 3 Title:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_features_box3title',
			'priority' => '15',
		) );

		/* Features - Box 3 Entry */
		$wp_customize->add_setting( 'denta_lite_features_box3entry', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'denta_lite_features_box3entry', array(
		            'label' 	=> __( 'Features - Box 3 Entry:', 'denta_lite' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'denta_lite_features_box3entry',
		            'priority' 	=> '16'
		        )
		    )
		);

		/* Featured Article - Image */
		$wp_customize->add_setting( 'denta_lite_featuredarticle_image', array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'denta_lite_featuredarticle_image', array(
		    'label'    => __( 'Featured Article - Image:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_featuredarticle_image',
		    'priority' => '17',
		) ) );

		/* Featured Article - Title */
		$wp_customize->add_setting( 'denta_lite_featuredarticle_title', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_featuredarticle_title', array(
		    'label'    => __( 'Featured Article - Title:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_featuredarticle_title',
			'priority' => '18',
		) );

		/* Featured Article - Entry */
		$wp_customize->add_setting( 'denta_lite_featuredarticle_entry', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'denta_lite_featuredarticle_entry', array(
		            'label' 	=> __( 'Featured Article - Entry:', 'denta_lite' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'denta_lite_featuredarticle_entry',
		            'priority' 	=> '19'
		        )
		    )
		);

		/* Latest News - Title */
		$wp_customize->add_setting( 'denta_lite_latestnews_title', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_latestnews_title', array(
		    'label'    => __( 'Latest News - Title:', 'denta_lite' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'denta_lite_latestnews_title',
			'priority' => '23',
		) );

	/**
	 *	404 Page
	 */
	$wp_customize->add_section( '404page_settings' , array(
    	'title'       => __( '404 Page', 'denta_lite' ),
    	'priority'    => 300,
	) );

		/* Title 1 */
		$wp_customize->add_setting( 'denta_lite_404page_title1', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_404page_title1', array(
		    'label'    => __( 'Title 1:', 'denta_lite' ),
		    'section'  => '404page_settings',
		    'settings' => 'denta_lite_404page_title1',
			'priority' => '1',
		) );

		/* Title 2 */
		$wp_customize->add_setting( 'denta_lite_404page_title2', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_404page_title2', array(
		    'label'    => __( 'Title 2:', 'denta_lite' ),
		    'section'  => '404page_settings',
		    'settings' => 'denta_lite_404page_title2',
			'priority' => '2',
		) );

		/* Entry */
		$wp_customize->add_setting( 'denta_lite_404page_entry', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'denta_lite_404page_entry', array(
		            'label' 	=> __( 'Entry:', 'denta_lite' ),
		            'section' 	=> '404page_settings',
		            'settings' 	=> 'denta_lite_404page_entry',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Subtitle */
		$wp_customize->add_setting( 'denta_lite_404page_subtitle', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_404page_subtitle', array(
		    'label'    => __( 'Subtitle:', 'denta_lite' ),
		    'section'  => '404page_settings',
		    'settings' => 'denta_lite_404page_subtitle',
			'priority' => '4',
		) );

		/* E-mail */
		$wp_customize->add_setting( 'denta_lite_404page_email', array(
			'sanitize_callback' => 'is_email'
		) );
		$wp_customize->add_control( 'denta_lite_404page_email', array(
		    'label'    => __( 'E-mail:', 'denta_lite' ),
		    'section'  => '404page_settings',
		    'settings' => 'denta_lite_404page_email',
			'priority' => '5',
		) );

		/* Telephone */
		$wp_customize->add_setting( 'denta_lite_404page_telephone', array(
			'sanitize_callback' => 'denta_lite_sanitize_callback_text'
		) );
		$wp_customize->add_control( 'denta_lite_404page_telephone', array(
		    'label'    => __( 'Telephone:', 'denta_lite' ),
		    'section'  => '404page_settings',
		    'settings' => 'denta_lite_404page_telephone',
			'priority' => '6',
		) );

		/* URL */
		$wp_customize->add_setting( 'denta_lite_404page_url', array(
			'sanitize_callback' => 'esc_url_raw'
		) );
		$wp_customize->add_control( 'denta_lite_404page_url', array(
		    'label'    => __( 'URL:', 'denta_lite' ),
		    'section'  => '404page_settings',
		    'settings' => 'denta_lite_404page_url',
			'priority' => '7',
		) );

}
add_action( 'customize_register', 'dentatheme_customizer' );

/**
 *	Active Callback
 */
function active_callback( $active, $control ) {

	// 404 Page Settings
    if ( '404page_settings' === $control->section ) {
        $active = is_404();
    }

    // Frontpage Settings
    if ( 'frontpage_settings' === $control->section ) {
        $active = is_home();
    }

    return $active;

}
add_filter( 'customize_control_active', 'active_callback', 10, 2 );

/**
 *	Registers
 */
function denta_lite_registers() {
	wp_register_script( 'denta_lite_customizer_script', get_template_directory_uri() . '/js/denta_lite_customizer.js', array("jquery"), '20120206', true  );
	wp_enqueue_script( 'denta_lite_customizer_script' );
	wp_localize_script( 'denta_lite_customizer_script', 'denta_lite_buttons', array(
		'doc'		=> __( 'Documentation', 'denta_lite' ),
		'pro'		=> __( 'View PRO Version', 'denta_lite' ),
		'team'		=> '<span class="sidebar-content-title">'. __( 'Our Team Section', 'denta_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'denta_lite' ) .'</span>',
		'services'	=> '<span class="sidebar-content-title">'. __( 'Services Section', 'denta_lite' ) .'</span><span class="sidebar-content-description">'. __( '(available in PRO version)', 'denta_lite' ) .'</span>'
	) );
}
add_action( 'customize_controls_enqueue_scripts', 'denta_lite_registers' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */

function denta_lite_customize_preview_js() {
	wp_enqueue_script( 'denta_lite_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'denta_lite_customize_preview_js' );

if( class_exists( 'WP_Customize_Control' ) ):
	class Example_Customize_Textarea_Control extends WP_Customize_Control {
	    public $type = 'textarea';

	    public function render_content() { ?>

	        <label>
	        	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	        	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
	        </label>

	        <?php
	    }
	}
endif;

?>