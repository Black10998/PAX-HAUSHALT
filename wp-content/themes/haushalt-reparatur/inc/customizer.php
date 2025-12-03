<?php
/**
 * Theme Customizer
 *
 * @package Haushalt_Reparatur
 */

/**
 * Add postMessage support for site title and description
 */
function haushalt_reparatur_customize_register($wp_customize) {
    $wp_customize->get_setting('blogname')->transport         = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector'        => '.site-title a',
            'render_callback' => 'haushalt_reparatur_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector'        => '.site-description',
            'render_callback' => 'haushalt_reparatur_customize_partial_blogdescription',
        ));
    }

    // Add Contact Section
    $wp_customize->add_section('haushalt_reparatur_contact', array(
        'title'    => __('Kontaktinformationen', 'haushalt-reparatur'),
        'priority' => 30,
    ));

    // Phone Number
    $wp_customize->add_setting('haushalt_reparatur_phone', array(
        'default'           => '+49 123 456 7890',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('haushalt_reparatur_phone', array(
        'label'   => __('Telefonnummer', 'haushalt-reparatur'),
        'section' => 'haushalt_reparatur_contact',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('haushalt_reparatur_email', array(
        'default'           => 'info@haushalt-reparatur.de',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('haushalt_reparatur_email', array(
        'label'   => __('E-Mail Adresse', 'haushalt-reparatur'),
        'section' => 'haushalt_reparatur_contact',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('haushalt_reparatur_address', array(
        'default'           => 'Musterstraße 123, 12345 Berlin',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('haushalt_reparatur_address', array(
        'label'   => __('Adresse', 'haushalt-reparatur'),
        'section' => 'haushalt_reparatur_contact',
        'type'    => 'textarea',
    ));
}
add_action('customize_register', 'haushalt_reparatur_customize_register');

/**
 * Render the site title for the selective refresh partial
 */
function haushalt_reparatur_customize_partial_blogname() {
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial
 */
function haushalt_reparatur_customize_partial_blogdescription() {
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously
 */
function haushalt_reparatur_customize_preview_js() {
    wp_enqueue_script('haushalt-reparatur-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array('customize-preview'), '1.0.0', true);
}
add_action('customize_preview_init', 'haushalt_reparatur_customize_preview_js');
