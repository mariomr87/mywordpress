<?php
    function init_template(){
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'title-tag');
    }

add_action('after_setup_theme','init_template');

function assets(){
    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', '', '4.6.0', 'all' );
    wp_register_style( 'arimo', 'https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap', '','1.0', 'all' );

    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap','arimo') , '1.0', 'all' );
    
}

add_action('wp_enqueue_scripts','assets');