<?php

function dentatheme_customizer( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    /*
    ** Header
    */
    $wp_customize->add_section( 'header_settings' , array(
    	'title'       => __( 'Header', 'ti' ),
    	'priority'    => 200,
	) );

		/* Top Header - Title 1 */
		$wp_customize->add_setting( 'ti_topheader_title1' );
		$wp_customize->add_control( 'ti_topheader_title1', array(
		    'label'    => __( 'Opening Hours - Title:', 'ti' ),
		    'section'  => 'header_settings',
		    'settings' => 'ti_topheader_title1',
			'priority' => '1',
		) );

		/* Top Header - Content 1 */
		$wp_customize->add_setting( 'ti_topheader_content1' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_topheader_content1', array(
		            'label' 	=> __( 'Opening Schedule - Title', 'ti' ),
		            'section' 	=> 'header_settings',
		            'settings' 	=> 'ti_topheader_content1',
		            'priority' 	=> '2'
		        )
		    )
		);

		/* Top Header - Title 2 */
		$wp_customize->add_setting( 'ti_topheader_title2' );
		$wp_customize->add_control( 'ti_topheader_title2', array(
		    'label'    => __( 'Contact Us - Title:', 'ti' ),
		    'section'  => 'header_settings',
		    'settings' => 'ti_topheader_title2',
			'priority' => '3',
		) );

		/* Top Header - Content 2 */
		$wp_customize->add_setting( 'ti_topheader_content2' );
		$wp_customize->add_control( 'ti_topheader_content2', array(
		    'label'    => __( 'Telephone - Entry:', 'ti' ),
		    'section'  => 'header_settings',
		    'settings' => 'ti_topheader_content2',
			'priority' => '4',
		) );

		/* Center Header - Logo */
		$wp_customize->add_setting( 'ti_centerheader_logo' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_centerheader_logo', array(
		    'label'    => __( 'Logo:', 'ti' ),
		    'section'  => 'header_settings',
		    'settings' => 'ti_centerheader_logo',
		    'priority' => '5',
		) ) );

	/*
    ** Footer
    */
    $wp_customize->add_section( 'footer_settings' , array(
    	'title'       => __( 'Footer', 'ti' ),
    	'priority'    => 300,
	) );

		/* Copyright - Entry */
		$wp_customize->add_setting( 'ti_copyright_entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_copyright_entry', array(
		            'label' 	=> __( 'Copyright - Entry:', 'ti' ),
		            'section' 	=> 'footer_settings',
		            'settings' 	=> 'ti_copyright_entry',
		            'priority' 	=> '10'
		        )
		    )
		);

	/*
    ** Front Page
    */
    $wp_customize->add_section( 'frontpage_settings' , array(
    	'title'       => __( 'Front Page', 'ti' ),
    	'priority'    => 250,
	) );

		/* Features - Box 1 Icon Class */
		$wp_customize->add_setting( 'ti_features_box1iconclass' );
		$wp_customize->add_control( 'ti_features_box1iconclass', array(
		    'label'    => __( 'Features - Box 1 Icon Class:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_features_box1iconclass',
			'priority' => '8',
		) );

		/* Features - Box 1 Title */
		$wp_customize->add_setting( 'ti_features_box1title' );
		$wp_customize->add_control( 'ti_features_box1title', array(
		    'label'    => __( 'Features - Box 1 Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_features_box1title',
			'priority' => '9',
		) );

		/* Features - Box 1 Entry */
		$wp_customize->add_setting( 'ti_features_box1entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box1entry', array(
		            'label' 	=> __( 'Features - Box 1 Entry:', 'ti' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'ti_features_box1entry',
		            'priority' 	=> '10'
		        )
		    )
		);

		/* Features - Box 2 Icon Class */
		$wp_customize->add_setting( 'ti_features_box2iconclass' );
		$wp_customize->add_control( 'ti_features_box2iconclass', array(
		    'label'    => __( 'Features - Box 2 Icon Class:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_features_box2iconclass',
			'priority' => '11',
		) );

		/* Features - Box 2 Title */
		$wp_customize->add_setting( 'ti_features_box2title' );
		$wp_customize->add_control( 'ti_features_box2title', array(
		    'label'    => __( 'Features - Box 2 Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_features_box2title',
			'priority' => '12',
		) );

		/* Features - Box 2 Entry */
		$wp_customize->add_setting( 'ti_features_box2entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box2entry', array(
		            'label' 	=> __( 'Features - Box 2 Entry:', 'ti' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'ti_features_box2entry',
		            'priority' 	=> '13'
		        )
		    )
		);

		/* Features - Box 3 Icon Class */
		$wp_customize->add_setting( 'ti_features_box3iconclass' );
		$wp_customize->add_control( 'ti_features_box3iconclass', array(
		    'label'    => __( 'Features - Box 3 Icon Class:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_features_box3iconclass',
			'priority' => '14',
		) );

		/* Features - Box 3 Title */
		$wp_customize->add_setting( 'ti_features_box3title' );
		$wp_customize->add_control( 'ti_features_box3title', array(
		    'label'    => __( 'Features - Box 3 Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_features_box3title',
			'priority' => '15',
		) );

		/* Features - Box 3 Entry */
		$wp_customize->add_setting( 'ti_features_box3entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_features_box3entry', array(
		            'label' 	=> __( 'Features - Box 3 Entry:', 'ti' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'ti_features_box3entry',
		            'priority' 	=> '16'
		        )
		    )
		);

		/* Featured Article - Image */
		$wp_customize->add_setting( 'ti_featuredarticle_image' );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'ti_featuredarticle_image', array(
		    'label'    => __( 'Featured Article - Image:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_featuredarticle_image',
		    'priority' => '17',
		) ) );

		/* Featured Article - Title */
		$wp_customize->add_setting( 'ti_featuredarticle_title' );
		$wp_customize->add_control( 'ti_featuredarticle_title', array(
		    'label'    => __( 'Featured Article - Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_featuredarticle_title',
			'priority' => '18',
		) );

		/* Featured Article - Entry */
		$wp_customize->add_setting( 'ti_featuredarticle_entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_featuredarticle_entry', array(
		            'label' 	=> __( 'Featured Article - Entry:', 'ti' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'ti_featuredarticle_entry',
		            'priority' 	=> '19'
		        )
		    )
		);

		/* Testimonials - Title */
		$wp_customize->add_setting( 'ti_testimonials_title' );
		$wp_customize->add_control( 'ti_testimonials_title', array(
		    'label'    => __( 'Testimonials - Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_testimonials_title',
			'priority' => '20',
		) );

		/* Testimonials - Entry */
		$wp_customize->add_setting( 'ti_testimonials_entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_testimonials_entry', array(
		            'label' 	=> __( 'Testimonials - Entry:', 'ti' ),
		            'section' 	=> 'frontpage_settings',
		            'settings' 	=> 'ti_testimonials_entry',
		            'priority' 	=> '21'
		        )
		    )
		);

		/* Testimonials - Number of articles */
		$wp_customize->add_setting( 'ti_testimonials_numberofarticles' );
		$wp_customize->add_control( 'ti_testimonials_numberofarticles', array(
		    'label'    => __( 'Testimonials - Number of articles:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_testimonials_numberofarticles',
			'priority' => '22',
		) );

		/* Latest News - Title */
		$wp_customize->add_setting( 'ti_latestnews_title' );
		$wp_customize->add_control( 'ti_latestnews_title', array(
		    'label'    => __( 'Latest News - Title:', 'ti' ),
		    'section'  => 'frontpage_settings',
		    'settings' => 'ti_latestnews_title',
			'priority' => '23',
		) );

	/**
	 *	404 Page
	 */
	$wp_customize->add_section( '404page_settings' , array(
    	'title'       => __( '404 Page', 'ti' ),
    	'priority'    => 400,
	) );

		/* Title 1 */
		$wp_customize->add_setting( 'ti_404page_title1' );
		$wp_customize->add_control( 'ti_404page_title1', array(
		    'label'    => __( 'Title 1:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_title1',
			'priority' => '1',
		) );

		/* Title 2 */
		$wp_customize->add_setting( 'ti_404page_title2' );
		$wp_customize->add_control( 'ti_404page_title2', array(
		    'label'    => __( 'Title 2:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_title2',
			'priority' => '2',
		) );

		/* Entry */
		$wp_customize->add_setting( 'ti_404page_entry' );
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'ti_404page_entry', array(
		            'label' 	=> __( 'Entry:', 'ti' ),
		            'section' 	=> '404page_settings',
		            'settings' 	=> 'ti_404page_entry',
		            'priority' 	=> '3'
		        )
		    )
		);

		/* Subtitle */
		$wp_customize->add_setting( 'ti_404page_subtitle' );
		$wp_customize->add_control( 'ti_404page_subtitle', array(
		    'label'    => __( 'Subtitle:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_subtitle',
			'priority' => '4',
		) );

		/* E-mail */
		$wp_customize->add_setting( 'ti_404page_email' );
		$wp_customize->add_control( 'ti_404page_email', array(
		    'label'    => __( 'E-mail:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_email',
			'priority' => '5',
		) );

		/* Telephone */
		$wp_customize->add_setting( 'ti_404page_telephone' );
		$wp_customize->add_control( 'ti_404page_telephone', array(
		    'label'    => __( 'Telephone:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_telephone',
			'priority' => '6',
		) );

		/* URL */
		$wp_customize->add_setting( 'ti_404page_url' );
		$wp_customize->add_control( 'ti_404page_url', array(
		    'label'    => __( 'URL:', 'ti' ),
		    'section'  => '404page_settings',
		    'settings' => 'ti_404page_url',
			'priority' => '7',
		) );

}
add_action( 'customize_register', 'dentatheme_customizer' );

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