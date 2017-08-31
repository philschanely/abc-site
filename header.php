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
            <nav class="nav">
              <div class="church-info">
                <p>
                  <a class="address"
                     href="https://www.google.com/maps/place/2900+W+Main+St,+Richmond,+IN+47374/@39.830124,-84.9431976,17z/data=!3m1!4b1!4m5!3m4!1s0x886aaa8009df26c1:0x6f603d568fc9c398!8m2!3d39.830124!4d-84.9410089">
                     2900 W Main St, Richmond, IN 47374
                  </a>
                  <span class="phone">(765) 935-7783</span>
                </p>
              </div>
              <?php
                  wp_nav_menu( array(
                      'theme_location' => 'top',
                      'container' => false
                  ));
              ?>
            </nav>
        </header>
    <main>
