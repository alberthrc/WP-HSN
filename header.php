<?php
/*
*
* Header file
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Esto es una simple descripcion de la página hermosa">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <?php if( is_single() && comments_open() ): ?>
        <?php wp_enqueue_script('comment-reply'); ?>
    <?php endif; ?>

    <?php  wp_head();?>
</head>
<body <?php body_class(); ?>>
    <?php 
        $options = get_theme_mod('hsn_settings');

        // Logo
        if( !empty($options['logo']) ){
            $logo = $options['logo'];
        }else{
            $logo = IMAGES . 'img/logo.png';
        }
    ?>
    
    <header class="header header__contenedor">
        <div class="header__barra">
            <div class="header__logo">
                <a href="/">
                    <img class="img__logo" src="<?= $logo; ?>" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
            <div class="menu__hamburg" id="toggle__menu">
                <img class="menu__img" src="<?= IMAGES; ?>/menu.png" alt="">
            </div>
            <div class="back__menu" id="back-menu"></div>
                <nav>
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'navegacion',
                        'menu_id'    => 'navegacion__menu'
                    ));?> 
                </nav>
        </div>
    </header>