<?php /* fonksiyon içerisinde diğer cssler de aynı mantıkla dahil edilebiliyor */ ?> 
<?php   

function theme_css(){
    wp_enqueue_script("main-js",get_theme_file_uri('/build/index.js'),array('jquery'),'1.0',true);
    wp_enqueue_style('main_styleindex',get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('main_index',get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('font_awesome',"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('google_font',"//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
}

add_action('wp_enqueue_scripts','theme_css');
