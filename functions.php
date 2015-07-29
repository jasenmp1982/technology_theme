<?php

// Scripts & Styles

function theme_scripts() {
    
    // Add Bootstrap default CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css' );

    // Add Font Awesome stylesheet
    wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/inc/css/font-awesome.min.css' );
    
    // Add Bootstrap default JS
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/inc/js/bootstrap.min.js', array('jquery') );
    
    // Add Theme JS
    wp_enqueue_script('themejs', get_template_directory_uri().'/inc/js/theme.js', array('jquery') );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// Enable support for HTML5 markup.

add_theme_support( 'html5', array(
    
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
    'caption',

) );

// Custom Functions

require get_template_directory() . '/inc/extras.php';

// Theme Admin Menu