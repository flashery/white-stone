<?php
function my_theme_enqueue_scripts()
{
    // Enqueue the compiled Tailwind CSS
    wp_enqueue_style(
        'my-theme-styles',
        get_stylesheet_directory_uri() . '/dist/assets/css/style.css',
        array(),  // Dependencies
        '1.0.0'   // Version
    );

    // Enqueue Google Fonts (Raleway)
    wp_enqueue_style(
        'white-stone-google-fonts',
        'https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap',
        array(),
        null
    );

    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/assets/js/swiper-bundle.min.js',
        array(),
        '1.0.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


function custom_banner_customizer_settings($wp_customize) {
    // Banner Background Image
    $wp_customize->add_setting('banner_background_image', array(
        'default' => get_template_directory_uri().'/assets/banner.jpg',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_background_image', array(
        'label' => 'Banner Background Image',
        'section' => 'title_tagline',
        'settings' => 'banner_background_image',
    )));

    // Banner Heading
    $wp_customize->add_setting('banner_heading', array(
        'default' => 'Your Property Journey',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('banner_heading', array(
        'label' => 'Banner Heading',
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // Banner Subheading
    $wp_customize->add_setting('banner_subheading', array(
        'default' => 'Starts Here.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('banner_subheading', array(
        'label' => 'Banner Subheading',
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // Banner Description
    $wp_customize->add_setting('banner_description', array(
        'default' => 'We create trusted relationships that assist first home buyers...',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('banner_description', array(
        'label' => 'Banner Description',
        'section' => 'title_tagline',
        'type' => 'textarea',
    ));

    // Banner CTA Text
    $wp_customize->add_setting('banner_cta_text', array(
        'default' => 'View Our Properties',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('banner_cta_text', array(
        'label' => 'CTA Button Text',
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    // Banner CTA Link
    $wp_customize->add_setting('banner_cta_link', array(
        'default' => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('banner_cta_link', array(
        'label' => 'CTA Button Link',
        'section' => 'title_tagline',
        'type' => 'url',
    ));
}
add_action('customize_register', 'custom_banner_customizer_settings');
