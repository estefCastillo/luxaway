<?php
// Registro del menú de WordPress
function my_theme_setup() {
    // Habilitar soporte para menús
    add_theme_support('nav-menus');

    // Registrar el menú
    register_nav_menus(array(
        'main' => 'Main',
    ));

    // Habilitar thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(200, 150, true);

    // Permitir comentarios encadenados
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('after_setup_theme', 'my_theme_setup');

// Registrar el Sidebar principal
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
?>
