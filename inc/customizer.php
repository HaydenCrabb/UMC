<?php

function themeslug_sanitize_url( $url ) {
  return esc_url_raw( $url );
}

function twentytwenty_customize_register( $wp_customize ) {
  /* $wp_customize->add_setting( 'themeslug_url_setting_1', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'themeslug_sanitize_url',
  ) );

  $wp_customize->add_setting( 'themeslug_url_setting_2', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'themeslug_sanitize_url',
  ) );

  $wp_customize->add_setting( 'button_1_text' , array(
      'default'     => '',
          'transport'     => 'refresh',
     ) );

     */
  $wp_customize->add_setting( 'book_appointment_destination' , array(
         'default'    => '',
          'transport'     => 'refresh',
     ) );
  $wp_customize->add_setting( 'pay_bill_destination' , array(
         'default'    => '',
          'transport'     => 'refresh',
     ) );
  $wp_customize->add_setting( 'patient_portal_destination' , array(
         'default'    => '',
          'transport'     => 'refresh',
     ) );
  $wp_customize->add_setting( 'home_site_logo' , array(
          'transport'     => 'refresh',
          'height'        => 101,
          'width'        => 400,
     ) );

    // add footer settings
  $wp_customize->add_setting( 'footer_site_logo' , array(
          'transport'     => 'refresh',
          'height'        => 101,
          'width'        => 400,
     ) );
  $wp_customize->add_setting( 'home_entry_text' , array(
      'default'     => '',
          'transport'     => 'refresh',
     ) );
  /*
  $wp_customize->add_setting( 'contact_us_text' , array(
         'default'    => '',
          'transport'     => 'refresh',
     ) );
  $wp_customize->add_setting( 'themeslug_url_footer_button_1', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'themeslug_sanitize_url',
  ) );

  $wp_customize->add_setting( 'themeslug_url_footer_button_2', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'themeslug_sanitize_url',
  ) );
  $wp_customize->add_setting( 'footer_button_1_text' , array(
         'default'    => '',
          'transport'     => 'refresh',
     ) );
  $wp_customize->add_setting( 'footer_button_2_text' , array(
         'default'    => '',
          'transport'     => 'refresh',
     ) );


  // Add Sections
  $wp_customize->add_section( 'twentytwenty_header_options' , array(
         'title'      => __( 'Header Options', 'twentytwenty' ),
         'priority'   => 20,
     ) );
   */
  $wp_customize->add_section( 'twentytwenty_more_footer_options' , array(
         'title'      => __( 'More Options', 'twentytwenty' ),
         'priority'   => 30,
     ) );
  /*


  // Add Controls

  $wp_customize->add_control('button_text_1_control', array(
          'label'             => __('Button 1 Text', 'twentytwenty'),
          'section'           => 'twentytwenty_header_options',
          'settings'          => 'button_1_text',    
      ));

  $wp_customize->add_control( 'themeslug_url_setting_1', array(
      'type' => 'url',
      'section' => 'twentytwenty_header_options',
      'label' => __( 'Button Destination URL' ),
      'settings' => 'themeslug_url_setting_1',
      'description' => __( 'Destination of first button' ),
      'input_attrs' => array(
        'placeholder' => __( '/more-options OR www.google.com' ),
      ),
    ) );

  $wp_customize->add_control('button_text_2_control', array(
          'label'             => __('Button 2 Text', 'twentytwenty'),
          'section'           => 'twentytwenty_header_options',
          'settings'          => 'button_2_text',    
      ));

  $wp_customize->add_control( 'themeslug_url_setting_2', array(
      'type' => 'url',
      'section' => 'twentytwenty_header_options',
      'label' => __( 'Button Destination URL 2' ),
      'settings' => 'themeslug_url_setting_2',
      'description' => __( 'Destination of Second button' ),
      'input_attrs' => array(
        'placeholder' => __( '/more-options OR www.google.com' ),
      ),
    ) );

  //add footer controls
  */
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_footer_site_logo_control', array(
          'label'             => __('Footer Site Logo', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'footer_site_logo',    
      )));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'customizer_home_site_logo_control', array(
          'label'             => __('Home Page Site Logo', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'home_site_logo',    
      )));
  $wp_customize->add_control('book_appointment_destination_control', array(
          'type'              => 'url',
          'label'             => __('Book Appointment Destination', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'book_appointment_destination',
          'input_attrs' => array(
            'placeholder' => __( 'www.google.com etc...' ),
          ),
      ));
  $wp_customize->add_control('pay_bill_destination_control', array(
          'type'              => 'url',
          'label'             => __('Pay Bill Link Destination', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'pay_bill_destination',
          'input_attrs' => array(
            'placeholder' => __( 'www.google.com etc...' ),
          ),
      ));
  $wp_customize->add_control('patient_portal_destination_control', array(
          'type'              => 'url',
          'label'             => __('Patient Portal Destination', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'patient_portal_destination',
          'input_attrs' => array(
            'placeholder' => __( 'www.google.com etc...' ),
          ),
      ));
  $wp_customize->add_control('home_entry_text_control', array(
          'label'             => __('Home Page Tagline Text', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'home_entry_text',    
      ));
  /*
  $wp_customize->add_control( 'footer_button_1_url_control', array(
      'type' => 'url',
      'section' => 'twentytwenty_more_footer_options',
      'label' => __( 'Button 1 Destination URL' ),
      'settings' => 'themeslug_url_footer_button_1',
      'description' => __( 'Destination of first button' ),
      'input_attrs' => array(
        'placeholder' => __( '/more-options OR www.google.com' ),
      ),
    ) );
  $wp_customize->add_control('footer_button_2_text_control', array(
          'label'             => __('Button 2 Text', 'twentytwenty'),
          'section'           => 'twentytwenty_more_footer_options',
          'settings'          => 'footer_button_2_text',    
      ));

  $wp_customize->add_control( 'footer_button_2_url_control', array(
      'type' => 'url',
      'section' => 'twentytwenty_more_footer_options',
      'label' => __( 'Button 2 Destination URL' ),
      'settings' => 'themeslug_url_footer_button_2',
      'description' => __( 'Destination of second button' ),
      'input_attrs' => array(
        'placeholder' => __( '/more-options OR www.google.com' ),
      ),
    ) );
  */
}
add_action('customize_register', 'twentytwenty_customize_register');



?>