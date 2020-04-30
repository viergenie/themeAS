<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );
 
// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );
 
/*** Ajouter un script ou un fichier CSS de la bonne façon */
function wpdocs_theme_name_scripts() {
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   wp_enqueue_style( 'etan_webflow', get_template_directory_uri().'/css/etan.webflow.css' );
   wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css' );
   wp_enqueue_style( 'webflow', get_template_directory_uri().'/css/webflow.css' );
   wp_enqueue_script( 'webfontloader', get_template_directory_uri().'/js/webfontloader.js' );
   wp_enqueue_script( 'touch', get_template_directory_uri().'/js/touch.js' );
   wp_enqueue_script( 'webfont', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
 
 
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
   wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}
// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
               register_sidebar( array(
                               'name'          => 'Sidebar',
                               'id'            => 'sidebar',
                               'before_widget' => '<div>',
                               'after_widget'  => '</div>',
                               'before_title'  => '<h2>',
                               'after_title'   => '</h2>',
               ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );
 
// Register a new navigation menu
function add_Main_Nav() {
 register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );
 
//add_action( 'wp_head', 'my_header_scripts' );
