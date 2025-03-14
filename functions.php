<?php /* fonksiyon içerisinde diğer cssler de aynı mantıkla dahil edilebiliyor */ ?> 
<?php   

function theme_css(){
    wp_enqueue_script("main-js",get_theme_file_uri('/build/index.js'),array('jquery'),'1.0',true);
    wp_enqueue_style('main_styleindex',get_theme_file_uri('/css/theme.css'));
    wp_enqueue_style('main_index',get_theme_file_uri('/css/theme-elements.css'));
    wp_enqueue_style('main_index2',get_theme_file_uri('/css/theme-blog.css'));
    wp_enqueue_style('main_index3',get_theme_file_uri('/css/theme-shop.css'));
    wp_enqueue_style('headercss',get_theme_file_uri('vendor/circle-flip-slideshow/css/component.css'));
    wp_enqueue_style('font_awesome',"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('google_font',"//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap");



}

add_action('wp_enqueue_scripts','theme_css');


function university_features(){
    add_theme_support("title-tag");

}

add_action("after_setup_theme","university_features");
