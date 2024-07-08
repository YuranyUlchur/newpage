<?php
// Functions
require_once get_template_directory() . '/class-bootstrap-navwalker.php';

function themenutrarte()
{
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0');
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'themenutrarte');

function themenutrarte_widgets_init()
{
    register_sidebar(
        array(
            'name' => __('Primary Sidebar', 'themenutrarte'),
            'id' => 'primary-sidebar',
            'description' => __('The main sidebar appears on the right on each page except the front page template', 'themenutrarte'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        )
    );

    // Register the new social media widget
    register_sidebar(
        array(
            'name' => __('Social Sidebar', 'themenutrarte'),
            'id' => 'social-sidebar',
            'description' => __('Sidebar for social media widgets', 'themenutrarte'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'themenutrarte_widgets_init');

function get_menu_items_by_registered_slug($menu_slug)
{
    $menu_items = array();

    if (($locations = get_nav_menu_locations()) && isset($locations[$menu_slug])) {
        $menu = get_term($locations[$menu_slug]);
        $menu_items = wp_get_nav_menu_items($menu->term_id);
    }
    return $menu_items;
}

function register_my_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
        )
    );
}
add_action('init', 'register_my_menus');

function theme_enqueue_scripts()
{
    // Register the custom script
    wp_register_script('main-scripts', get_template_directory_uri() . '/main/main.js', array('jquery'), '1.0', true);

    wp_enqueue_script('main-scripts');
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
?>