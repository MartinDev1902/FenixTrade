<?php
/*
=====================
	Add Styles And Scripts
=====================
*/

add_action( 'wp_enqueue_scripts', 'theme_load_scripts' );
function theme_load_scripts(){

    // Scripts
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.min.js', false , false , true);

    //Styles
	wp_enqueue_style( 'main',get_template_directory_uri() . '/assets/css/main.min.css');
}

