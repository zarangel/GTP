<?php

/*
===================================================
Include Scripts
===================================================
*/

function gtp_script_enqueue(){
    
    //CSS
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' , array(), '4.5.2', 'all' );
    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/customstyle.css' , array(), '1.0.0', 'all' );    
    
    //JS
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js' , array(), '1.0.0', false);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/customjs.js' , array(), '1.0.0', false);
}
add_action( 'wp_enqueue_scripts', 'gtp_script_enqueue');

/*
===================================================
Activate Menus
===================================================
*/

function gtp_theme_support(){
    add_theme_support( 'post-formats',array('aside','image','video'));
    add_theme_support( 'menus' );
    register_nav_menu('primary', 'Primary Header Menu');
    register_nav_menu('secondary', 'Secondary Footer Menu');      
}
add_action('init','gtp_theme_support');

/*
===================================================
Theme Support functions
===================================================
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support( 'custom-logo', array(
	'height'      => 30,
	'width'       => 30,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );


