<?php
/*
=====================
	Theme Setup Function
=====================
*/

function theme_setup(){
	add_theme_support( 'post-thumbnails' );
	add_theme_support('menus');

	//main menu
	register_nav_menus(
		array( 
			'main-menu' => __( 'Main Menu', 'fenix-trade' ),
			'language-switcher-desktop' => __('Language Switcher Desktop', 'fenix-trade'),
			'language-switcher-mobile'  => __('Language Switcher Mobile', 'fenix-trade')
		)
    );
    
}

add_action( 'after_setup_theme', 'theme_setup' );