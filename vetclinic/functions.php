<?php

// Registrera dynamiska menyer
add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus (array(
        'main-menu' => "Huvudmeny"
    ));
}

// Aktivera stöd för dynamisk headerbild
$args = array(
    'width' => 1920,
    'height' => 646,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads' => true
);
add_theme_support('custom-header', $args);

function create_custom_post_types() {
    register_post_type('custom_info_box_1', array(
        'labels' => array(
            'name' => 'Info Box 1',
            'singular_name' => 'Info Box 1',
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor'),
    ));

    register_post_type('custom_info_box_2', array(
        'labels' => array(
            'name' => 'Info Box 2',
            'singular_name' => 'Info Box 2',
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor'),
    ));
}
add_action('init', 'create_custom_post_types');


// Funktion för att registrera sidofält
function theme_prefix_register_sidebar() {
    register_sidebar( array(
        'name'          => __( 'Sidofält', 'text-domain' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Detta är sidofältet som visas på sidor med sidebar-mallen.', 'text-domain' ),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'theme_prefix_register_sidebar' );
