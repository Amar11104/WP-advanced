<?php
function load_scripts() {
    wp_enqueue_style('style',get_template_directory_uri()."/style.css", false, '1.1', 'all');
    wp_enqueue_script('style',get_template_directory_uri()."/js/main.js",array(), '1.0', true);
}
add_action('wp_enqueue_scripts','load_scripts');

function config(){
    register_nav_menus(
    array(
        'wp_devs_main_menu'=> 'Main Menu',
        'wp_devs_footermenu'=> 'Footer Menu',
    ));
}

$args = array(
    'width' => 225,
    'height' => 1920
);

add_theme_support('custom-header',$args);
add_theme_support('post-thumbnails');
add_theme_support('custom-logo', array(
    'height' => 110,
    'width' => 200,
    'flex-height' => true,
    'flex-width' => true
));

add_theme_support('automatic-feed-links');
add_theme_support('html5',array('comment-list', 'comment-form', 'gallery', 'caption', 'style', 'script'));
add_theme_support('title-tag');

add_action('after_setup_theme', 'config', 0);
?>