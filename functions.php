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
//add_action( 'wp_head', 'my_header_scripts' );
