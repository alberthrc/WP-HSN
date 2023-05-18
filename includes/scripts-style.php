<?php

/*
* Archivo de registro y carga de estilos y scripts
*
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*
*/

/*
* Registrando y cargando estilos
*/

function hsn_theme_styles(){

    // registrar los estilos

    // wp_register_style('normalize', THEMEROOT . '/css/normalize.css', '', '8.0.1', 'all');
    wp_register_style('hsn-styles', get_stylesheet_uri(), '', '1.0', 'all');

    //cargando estilos
    wp_enqueue_style('hsn-styles');
}

add_action('wp_enqueue_scripts', 'hsn_theme_styles');


/*
* Registrando y cargando scripts
*/

function hsn_theme_scripts(){

    //registrando scripts

    wp_register_script('app-script', THEMEROOT .'/js/app.js', array('jquery'), '1.0', true);


    // cargando scripts
    wp_enqueue_script('app-script');

}

add_action('wp_enqueue_scripts', 'hsn_theme_scripts');