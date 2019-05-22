<?php

/*aqui se indica la agregacion de los estilos css*/
function agregar_estilos() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'blog-style', get_stylesheet_uri(), $dependencies ); 
}

/*aqui se agregan los scripts de bootstrap */
function agregar_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/bootstrap/js/bootstrap.min.js', $dependencies, '4.3.1', true );
}

add_action( 'wp_enqueue_scripts', 'agregar_estilos' );
add_action( 'wp_enqueue_scripts', 'agregar_scripts' );

/*se agregan las funciones de titulos*/
function blog_wp_setup() {
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'blog_wp_setup' );


 /*para agregar el menu*/
function blog_register_menu() {
    register_nav_menu('header-menu', __( 'Header Menu' ));
}
add_action( 'init', 'blog_register_menu' );

/*WIDGETS*/
function bootstrapstarter_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer - Copyright Text',
        'id'            => 'footer-copyright-text',
        'before_widget' => '<div class="footer_copyright_text">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Inset',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-module sidebar-module-inset">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
        'name'          => 'Sidebar - Default',
        'id'            => 'sidebar-2',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'bootstrapstarter_widgets_init' );




?>