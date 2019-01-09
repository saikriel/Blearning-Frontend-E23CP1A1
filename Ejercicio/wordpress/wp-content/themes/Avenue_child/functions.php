<?php 
function dl_enqueue_style_child() {
    wp_register_style('parent-style', get_parent_theme_file_uri('/style.css') , null, null, null);
    wp_register_script('parent-script', get_parent_theme_file_uri('/js/superfish.js') , null, null, null);

    wp_enqueue_style('parent-style');
    wp_enqueue_script('parent-script');
}
add_action('wp_enqueue_scripts' , 'dl_enqueue_style_child');


function dl_enqueue_script_child() {

    wp_deregister_script('bxslider');
    wp_deregister_script('superfish');
    wp_deregister_script('effects');

    wp_enqueue_script('bxslider', get_parent_theme_file_uri() .'/js/jquery.bxSlider.min.js');
    wp_enqueue_script('superfish', get_parent_theme_file_uri() .'/js/superfish.js');
    wp_enqueue_script('effects', get_parent_theme_file_uri() .'/js/effects.js');


}

add_action('wp_enqueue_scripts' , 'dl_enqueue_script_child');
