<?php

function my_theme_setup() {
    
    add_theme_support('nav-menus');

    register_nav_menus(array(
        'main' => 'Main',
    ));

    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(200, 150, true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('after_setup_theme', 'my_theme_setup');


function my_sidebar_setup() {
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Main Sidebar',
            'before_widget' => '<hr>',
            'after_widget' => '',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
    }
}
add_action('widgets_init', 'my_sidebar_setup');

function mi_tema_scripts() {
    wp_enqueue_style('mi-estilo-principal', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mi_tema_scripts');

function should_display_sidebar() {
    return !is_single();
}

function agregar_modernizr() {
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-custom.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'agregar_modernizr');

function agregar_respondjs() {
    global $is_IE;
    if ($is_IE) {
        wp_enqueue_script('respondjs', get_template_directory_uri() . '/js/respond.js', array(), '1.4.2', false);
    }
}
add_action('wp_enqueue_scripts', 'agregar_respondjs');
?>


