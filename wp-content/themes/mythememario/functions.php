<?php
    function init_template(){
        add_theme_support( 'post-thumbnails');
        add_theme_support( 'title-tag');

        register_nav_menus( 
                array(
                    'top_menu' => 'Menu principal'
                )
                );
    }

add_action('after_setup_theme','init_template');

function assets(){
    wp_register_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css', '', '4.6.0', 'all' );
    wp_register_style( 'arimo', 'https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap', '','1.0', 'all' );
    wp_enqueue_style( 'estilos', get_stylesheet_uri(), array('bootstrap','arimo') , '1.0', 'all' );
    
    wp_register_script( 'popper', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', '', '3.5.1', true );
    wp_enqueue_script('boostraps','https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js',array('jquery','popper'),'4.6.0',true);
       
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts','assets');

function sidebar(){
    register_sidebar( 
        array(
            'name' => 'pie de pagina',
            'id' => 'footer',
            'description' => 'zona de widgets para pie de paginass',
            'before_title' => '<p>',
            'afeter_title' => '</p>',
            'before_widget' => '<div id="%1$s" class="%2$s">',
            'after_widget' => '</div>'
        )
        );
}

add_action( 'widgets_init', 'sidebar');