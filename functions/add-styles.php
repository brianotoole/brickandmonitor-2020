<?php

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// add stylesheets
function spx_styles() {

    // bundled entry stylesheet
    $ver = filemtime( get_template_directory() . '/dist/bundle.css' );
    wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/dist/bundle.css', array(), $ver );

    // slick carousel
    wp_enqueue_style( 'slick-carousel', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css', array(), $ver );
    // slick theme
    wp_enqueue_style( 'slick-carousel-theme', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css', array(), $ver );

}
add_action( 'wp_enqueue_scripts', 'spx_styles' );

?>
