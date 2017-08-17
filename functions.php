<?php

function register_menus() {
    register_nav_menus(
        array( 
            'top' => __( 'Main Nav' ),
            'bottom' => __( 'Footer Nav' ) 
        )
    );
}
add_action( 'init', 'register_menus' );