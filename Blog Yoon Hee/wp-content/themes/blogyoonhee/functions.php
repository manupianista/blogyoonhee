<?php

/*aqui se indica la agregacion de los estilos css*/
function agregar_estilos() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    $dependencies = array('bootstrap');
    wp_enqueue_style( 'blog-style', get_stylesheet_uri(), $dependencies ); 
}

/*aqui se agregan los scripts de bootstrap */
function agregar_scripts() {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', $dependencies, '4.3.1', true );
}

function agregar_scripts_toggle() {
    $dependencies = array('jquery');
    wp_enqueue_script('toggle', get_template_directory_uri().'/assets/js/toggle.js', $dependecies);
}

add_action( 'wp_enqueue_scripts', 'agregar_estilos' );
add_action( 'wp_enqueue_scripts', 'agregar_scripts' );
add_action( 'wp_enqueue_scripts', 'agregar_scripts_toggle' );

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


/*
function namespace_theme_stylesheets() {
    wp_register_style( 'mamies-wafers-bootstrap-min',  get_template_directory_uri() .'/css/bootstrap.min.css', array(), null, 'all' );
    wp_register_style( 'mamies-wafers-carousel',  get_template_directory_uri() .'/css/carousel.css', array(), null, 'all' );
    wp_register_style( 'mamies-wafers-style', get_stylesheet_uri(), '', null, 'all' );
    wp_enqueue_style( 'mamies-wafers-bootstrap-min' );
    wp_enqueue_style( 'mamies-wafers-carousel' );
    wp_enqueue_style( 'mamies-wafers-style' );
}
add_action( 'wp_enqueue_scripts', 'namespace_theme_stylesheets' );*/

/*
foreach( glob( get_template_directory(). 'assets/css/*.css' ) as $file ) {
            $file = str_replace(get_template_directory(), '', $file);
            echo ( get_template_directory_uri() . $file);
            // $file contains the name and extension of the file
            wp_enqueue_style( $file.'style', get_template_directory_uri() . $file);
        }



    foreach( glob( get_template_directory(). 'assets/js/*.js' ) as $file ) {
        $file = str_replace(get_template_directory(), '', $file);
        // $file contains the name and extension of the file
        wp_enqueue_script( $file . 'script', get_template_directory_uri() . $file);
    }
*/
?>