<?php

// ########### THUMBNAILS ###########

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 600, 600 );
//600 by 600 px wide, crop from the center

// ########### EXCERPT ###########

function wow_theme_excerpt_length( $length ) {
    return 100;
}
add_filter( 'excerpt_length', 'wow_theme_excerpt_length', 999 );


// ########### MENUS ###########

add_theme_support( 'menus' );

function register_theme_menus() {

    register_nav_menus(
        array(
            'primary-menu' => _( 'Primary Menu' ),
            'secondary-menu' => _( 'Footer Menu' )
        )
      );
}

add_action( 'init', 'register_theme_menus' );

// ########### STYLESHEETS ###########

function wow_theme_styles() {

    wp_enqueue_style( 'main_css' , get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'wow_theme_styles' );

// ########### JAVASCRIPT ###########

function wow_theme_js() {

    wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '' , true );
}

add_action( 'wp_enqueue_scripts', 'wow_theme_js' );

############# AFC #############

//define( 'ACF_LITE', true );

//include_once('advanced-custom-fields/acf.php');

?>
