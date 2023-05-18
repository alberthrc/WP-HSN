<?php 
/*
* Añadiendo opciones al personalizador del thema
*
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*
*
*/

function hsn_customize_register($wp_customize){
    
    //Panel encabezado
    $wp_customize->add_panel('hsn_header_panel', array( 
        'title' => __('Encabezado', 'hsn'),
        'description' => __('Opciones del encabezado', 'hsn'),
        'priority' => 35
    ));



    // Secciónm encabezado normal
    $wp_customize->add_section('nsh_header', array(
        'title' => __('Encabezado normal', 'hsn'),
        'description' => __('Opciones del encabezado normal', 'hsn'),
        'priority' => 20
    ));

    //Logo
    $wp_customize->add_setting('hsn_settings[logo]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control(new wp_Customize_Image_Control($wp_customize, 'logo', array(
        'label' => __('Logo', 'hsn'),
        'section' => 'nsh_header',
        'settings' => 'hsn_settings[logo]'

    )));

}

add_action('customize_register', 'hsn_customize_register');

