<?php
/*
*Registrando zonas de menus
*
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*
*/


function hsn_menus(){

    register_nav_menus(array(
        'main-menu' => __('Menu principal en encabezado', 'hsn'),
        'footer-menu' => __('Menu secundario pie de página', 'hsn')
    ));

    
}

add_action('init', 'hsn_menus');