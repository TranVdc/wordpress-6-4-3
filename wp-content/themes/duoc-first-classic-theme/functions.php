<?php
add_theme_support( 'custom-background' );

// custom header
function themename_custom_header_setup()
{
    $args = array(
        'default-image' => get_template_directory_uri() . '/img/default-image.png',
        'default-text-color' => '000',
        'width' => 1000,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-header', $args);
}

add_action('after_setup_theme', 'themename_custom_header_setup');
add_theme_support( 'custom-header' );


// custom logo
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_theme_support( 'post-thumbnails' );
