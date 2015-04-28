<?php

// enqueue the parent theme style.css file
add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

// add theme support for post-formats
add_action( 'after_setup_theme', 'child_theme_formats', 11 );
function child_theme_formats(){
     add_theme_support( 'post-formats', array( 'gallery', 'image', 'link', 'quote', 'status' ) );
}


/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 825;
}





add_filter( 'jetpack_development_mode', '__return_true' );
