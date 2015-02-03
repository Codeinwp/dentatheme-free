<?php
/**
 *  Customizer
 */
function denta_lite_customizer( $wp_customize ) {

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $wp_customize->get_setting( 'background_color' )->transport = 'postMessage';

    function denta_lite_sanitize_callback_text( $input ) {
        return wp_kses_post( force_balance_tags( $input ) );
    }

    /**
     *  General Panel
     */
    $wp_customize->add_panel( 'denta_lite_general_panel', array(
        'priority'          => 200,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'General', 'denta_lite' ),
        'description'       => __( 'General settings.', 'denta_lite' ),
    ) );

        /**
         *  Left Header Section
         */
        $wp_customize->add_section( 'denta_lite_general_leftheader_section', array(
            'priority'          => 1,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Left Header', 'denta_lite' ),
            'description'       => __( 'Settings for left header.', 'denta_lite' ),
            'panel'             => 'denta_lite_general_panel',
        ) );

            // Title
            $wp_customize->add_setting( 'denta_lite_leftheader_title', array(
                'default'           => __( 'Opening Hours:', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_leftheader_title', array(
                'priority'  => 1,
                'section'   => 'denta_lite_general_leftheader_section',
                'settings'  => 'denta_lite_leftheader_title',
                'label'     => __( 'Title:', 'denta_lite' ),
                'type'      => 'text'
            ) );

            // Entry
            $wp_customize->add_setting( 'denta_lite_leftheader_entry', array(
                'default'           => __( 'Monday to Saturday: 8am - 6pm', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_leftheader_entry', array(
                'type'          => 'textarea',
                'priority'      => 2,
                'section'       => 'denta_lite_general_leftheader_section',
                'label'         => __( 'Entry:', 'denta_lite' )
            ) );

        /**
         *  Right Header Section
         */
        $wp_customize->add_section( 'denta_lite_general_rightheader_section', array(
            'priority'          => 2,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Right Header', 'denta_lite' ),
            'description'       => __( 'Settings for right header.', 'denta_lite' ),
            'panel'             => 'denta_lite_general_panel',
        ) );

            // Title
            $wp_customize->add_setting( 'denta_lite_rightheader_title', array(
                'default'           => __( 'Contact Us:', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_rightheader_title', array(
                'priority'  => 1,
                'section'   => 'denta_lite_general_rightheader_section',
                'settings'  => 'denta_lite_rightheader_title',
                'label'     => __( 'Title:', 'denta_lite' ),
                'type'      => 'text'
            ) );

            // Telephone Number
            $wp_customize->add_setting( 'denta_lite_rightheader_telephonenumber', array(
                'default'           => __( '+1 123 7798 33', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_rightheader_telephonenumber', array(
                'priority'  => 2,
                'section'   => 'denta_lite_general_rightheader_section',
                'settings'  => 'denta_lite_rightheader_telephonenumber',
                'label'     => __( 'Telephone Number:', 'denta_lite' ),
                'type'      => 'text'
            ) );

        /**
         *  Footer Section
         */
        $wp_customize->add_section( 'denta_lite_general_footer_section', array(
            'priority'          => 3,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Footer', 'denta_lite' ),
            'description'       => __( 'Settings for right header.', 'denta_lite' ),
            'panel'             => 'denta_lite_general_panel',
        ) );

            // Entry
            $wp_customize->add_setting( 'denta_lite_footer_entry', array(
                'default'           => 'Copyright',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_footer_entry', array(
                'type'          => 'textarea',
                'priority'      => 1,
                'section'       => 'denta_lite_general_footer_section',
                'label'         => __( 'Entry:', 'denta_lite' )
            ) );

    /**
     *  Frontpage Panel
     */
    $wp_customize->add_panel( 'denta_lite_frontpage_panel', array(
        'priority'          => 250,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Frontpage', 'denta_lite' ),
        'description'       => __( 'Frontpage settings.', 'denta_lite' ),
    ) );

        /**
         *  Features Boxes Section
         */
        $wp_customize->add_section( 'denta_lite_frontpage_featuresboxes_section', array(
            'priority'          => 1,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Features Boxes', 'denta_lite' ),
            'description'       => __( 'Settings for features boxes.', 'denta_lite' ),
            'panel'             => 'denta_lite_frontpage_panel',
        ) );

            // Box 1 - Icon Class
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box1iconclass', array(
                'default'           => __( 'fa-phone', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box1iconclass', array(
                'priority'      => 1,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'settings'      => 'denta_lite_featuresboxes_box1iconclass',
                'label'         => __( 'Box 1 - Icon Class:', 'denta_lite' ),
                'description'   => __( 'Search the classes for more icons from ', 'denta_lite' ) . '<a href="'. esc_url( __( 'http://fortawesome.github.io/Font-Awesome/icons', 'denta_lite' ) ) .'" title="'. __( 'Font-Awesome', 'denta_lite' ) .'" target="_blank">'. __( 'here', 'denta_lite' ) .'</a>.',
                'type'          => 'text'
            ) );

            // Box 1 - Title
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box1title', array(
                'default'           => __( 'Emergy Case', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box1title', array(
                'priority'      => 2,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'settings'      => 'denta_lite_featuresboxes_box1title',
                'label'         => __( 'Box 1 - Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // Box 1 - Entry
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box1entry', array(
                'default'           => __( 'Per ad persius epicuri accusamus, ea usu semper.', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box1entry', array(
                'type'          => 'textarea',
                'priority'      => 3,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'label'         => __( 'Box 1 - Entry:', 'denta_lite' )
            ) );

            // Box 2 - Icon Class
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box2iconclass', array(
                'default'           => __( 'fa-heart', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box2iconclass', array(
                'priority'      => 4,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'settings'      => 'denta_lite_featuresboxes_box2iconclass',
                'label'         => __( 'Box 2 - Icon Class:', 'denta_lite' ),
                'description'   => __( 'Search the classes for more icons from ', 'denta_lite' ) . '<a href="'. esc_url( __( 'http://fortawesome.github.io/Font-Awesome/icons', 'denta_lite' ) ) .'" title="'. __( 'Font-Awesome', 'denta_lite' ) .'" target="_blank">'. __( 'here', 'denta_lite' ) .'</a>.',
                'type'          => 'text'
            ) );

            // Box 2 - Title
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box2title', array(
                'default'           => __( 'Free Consultation', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box2title', array(
                'priority'      => 5,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'settings'      => 'denta_lite_featuresboxes_box2title',
                'label'         => __( 'Box 2 - Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // Box 2 - Entry
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box2entry', array(
                'default'           => __( 'Per ad persius epicuri accusamus, ea usu semper.', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box2entry', array(
                'type'          => 'textarea',
                'priority'      => 6,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'label'         => __( 'Box 2 - Entry:', 'denta_lite' )
            ) );

            // Box 3 - Icon Class
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box3iconclass', array(
                'default'           => __( 'fa-users', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box3iconclass', array(
                'priority'      => 7,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'settings'      => 'denta_lite_featuresboxes_box3iconclass',
                'label'         => __( 'Box 3 - Icon Class:', 'denta_lite' ),
                'description'   =>  __( 'Search the classes for more icons from ', 'denta_lite' ) . '<a href="'. esc_url( __( 'http://fortawesome.github.io/Font-Awesome/icons', 'denta_lite' ) ) .'" title="'. __( 'Font-Awesome', 'denta_lite' ) .'" target="_blank">'. __( 'here', 'denta_lite' ) .'</a>.',
                'type'          => 'text'
            ) );

            // Box 3 - Title
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box3title', array(
                'default'           => __( 'Qualified Doctors', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box3title', array(
                'priority'      => 8,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'settings'      => 'denta_lite_featuresboxes_box3title',
                'label'         => __( 'Box 3 - Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // Box 3 - Entry
            $wp_customize->add_setting( 'denta_lite_featuresboxes_box3entry', array(
                'default'           => __( 'Per ad persius epicuri accusamus, ea usu semper.', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_featuresboxes_box3entry', array(
                'type'          => 'textarea',
                'priority'      => 9,
                'section'       => 'denta_lite_frontpage_featuresboxes_section',
                'label'         => __( 'Box 3 - Entry:', 'denta_lite' )
            ) );

        /**
         *  Featured Article Section
         */
        $wp_customize->add_section( 'denta_lite_frontpage_featuredarticle_section', array(
            'priority'          => 2,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Featured Article', 'denta_lite' ),
            'description'       => __( 'Settings for featured article.', 'denta_lite' ),
            'panel'             => 'denta_lite_frontpage_panel',
        ) );

            // Image
            $wp_customize->add_setting( 'denta_lite_featuredarticle_image', array(
                'sanitize_callback' => 'esc_url',
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh'
            ) );
            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'denta_lite_featuredarticle_image', array(
                'priority'  => 1,
                'label'     => __( 'Image:', 'denta_lite' ),
                'section'   => 'denta_lite_frontpage_featuredarticle_section',
                'settings'  => 'denta_lite_featuredarticle_image',
            ) ) );

            // Title
            $wp_customize->add_setting( 'denta_lite_featuredarticle_title', array(
                'default'           => __( 'Welcome to Our Center', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_featuredarticle_title', array(
                'priority'      => 2,
                'section'       => 'denta_lite_frontpage_featuredarticle_section',
                'settings'      => 'denta_lite_featuredarticle_title',
                'label'         => __( 'Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // Entry
            $wp_customize->add_setting( 'denta_lite_featuredarticle_entry', array(
                'default'           => __( 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut.', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_featuredarticle_entry', array(
                'type'          => 'textarea',
                'priority'      => 3,
                'section'       => 'denta_lite_frontpage_featuredarticle_section',
                'settings'      => 'denta_lite_featuredarticle_entry',
                'label'         => __( 'Entry:', 'denta_lite' )
            ) );

        /**
         *  Latest News Section
         */
        $wp_customize->add_section( 'denta_lite_frontpage_latestnews_section', array(
            'priority'          => 3,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Latest News', 'denta_lite' ),
            'description'       => __( 'Settings for latest news.', 'denta_lite' ),
            'panel'             => 'denta_lite_frontpage_panel',
        ) );

            // Title
            $wp_customize->add_setting( 'denta_lite_latestnews_title', array(
                'default'           => __( 'Latest News', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_latestnews_title', array(
                'priority'      => 1,
                'section'       => 'denta_lite_frontpage_latestnews_section',
                'settings'      => 'denta_lite_latestnews_title',
                'label'         => __( 'Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

    /**
     *  404 Panel
     */
    $wp_customize->add_panel( 'denta_lite_404_panel', array(
        'priority'          => 300,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( '404', 'denta_lite' ),
        'description'       => __( '404 settings.', 'denta_lite' ),
    ) );

        /**
         *  General
         */
        $wp_customize->add_section( 'denta_lite_404_general_section', array(
            'priority'          => 1,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'General', 'denta_lite' ),
            'description'       => __( 'General settings for 404.', 'denta_lite' ),
            'panel'             => 'denta_lite_404_panel',
        ) );

            // Title
            $wp_customize->add_setting( 'denta_lite_404_general_title', array(
                'default'           => __( 'Error', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_404_general_title', array(
                'priority'      => 1,
                'section'       => 'denta_lite_404_general_section',
                'settings'      => 'denta_lite_404_general_title',
                'label'         => __( 'Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // Subtitle
            $wp_customize->add_setting( 'denta_lite_404_general_subtitle', array(
                'default'           => __( 'The page you were looking for was not found.', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_404_general_subtitle', array(
                'priority'      => 2,
                'section'       => 'denta_lite_404_general_section',
                'settings'      => 'denta_lite_404_general_subtitle',
                'label'         => __( 'Subtitle:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // Entry
            $wp_customize->add_setting( 'denta_lite_404_general_entry', array(
                'default'           => __( 'The page you are looking for does not exist, I can take you to the <a href="'. esc_url( home_url() ) .'" title="'. __( 'home page', 'denta_lite' ) .'">home page</a>.', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'esc_textarea',
            ) );
            $wp_customize->add_control( 'denta_lite_404_general_entry', array(
                'type'          => 'textarea',
                'priority'      => 3,
                'section'       => 'denta_lite_404_general_section',
                'settings'      => 'denta_lite_404_general_entry',
                'label'         => __( 'Entry:', 'denta_lite' )
            ) );

        /**
         *  Contact Section
         */
        $wp_customize->add_section( 'denta_lite_404_contact_section', array(
            'priority'          => 2,
            'capability'        => 'edit_theme_options',
            'theme_supports'    => '',
            'title'             => __( 'Contact', 'denta_lite' ),
            'description'       => __( 'Contact settings for 404.', 'denta_lite' ),
            'panel'             => 'denta_lite_404_panel',
        ) );

            // Title
            $wp_customize->add_setting( 'denta_lite_404_contact_title', array(
                'default'           => __( 'Contact', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_404_contact_title', array(
                'priority'      => 1,
                'section'       => 'denta_lite_404_contact_section',
                'settings'      => 'denta_lite_404_contact_title',
                'label'         => __( 'Title:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // E-mail
            $wp_customize->add_setting( 'denta_lite_404_contact_email', array(
                'default'           => __( 'contact@yourwebsite.com', 'denta_lite' ),
                'type'              => 'theme_mod',
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'sanitize_callback' => 'sanitize_email',
            ) );
            $wp_customize->add_control( 'denta_lite_404_contact_email', array(
                'type'      => 'email',
                'priority'  => 2,
                'section'   => 'denta_lite_404_contact_section',
                'settings'  => 'denta_lite_404_contact_email',
                'label'     => __( 'E-mail:', 'denta_lite' ),
            ) );

            // Telephone
            $wp_customize->add_setting( 'denta_lite_404_contact_telephone', array(
                'default'           => __( '0001234567', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'denta_lite_sanitize_callback_text',
            ) );
            $wp_customize->add_control( 'denta_lite_404_contact_telephone', array(
                'priority'      => 3,
                'section'       => 'denta_lite_404_contact_section',
                'settings'      => 'denta_lite_404_contact_telephone',
                'label'         => __( 'Telephone:', 'denta_lite' ),
                'type'          => 'text'
            ) );

            // URL
            $wp_customize->add_setting( 'denta_lite_404_contact_url', array(
                'default'           => __( 'http://www.yourwebsite.com', 'denta_lite' ),
                'capability'        => 'edit_theme_options',
                'transport'         => 'refresh',
                'type'              => 'theme_mod',
                'sanitize_callback' => 'esc_url',
            ) );
            $wp_customize->add_control( 'denta_lite_404_contact_url', array(
                'priority'      => 4,
                'section'       => 'denta_lite_404_contact_section',
                'settings'      => 'denta_lite_404_contact_url',
                'label'         => __( 'URL:', 'denta_lite' ),
                'type'          => 'text'
            ) );

}
add_action( 'customize_register', 'denta_lite_customizer' );
?>