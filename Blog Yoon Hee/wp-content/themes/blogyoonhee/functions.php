<?php

function agregar_estilos() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'blog-style', get_stylesheet_uri(), $dependencies ); 
}

function agregar_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'agregar_estilos' );
add_action( 'wp_enqueue_scripts', 'agregar_scripts' );

function blog_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'blog_wp_setup' );


?>