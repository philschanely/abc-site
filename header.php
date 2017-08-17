<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <?php wp_head(); ?>
    </head>
    <body>
       <header>
            <h1><a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo('template_directory'); ?>/pics/logo-white.png"></a></h1>
            <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'top',
                    'container' => false
                )); 
            ?>
            <ul class="church-info">
                    <li>2900 W Main St, Richmond, IN 47374</li>
                    <li>(765) 935-7783</li>
                    <li class="give-button">Give Now</li>
            </ul>
        </header>
    <main>