<?php   

function theme_css(){
    wp_enqueue_style('main_style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','theme_css');
