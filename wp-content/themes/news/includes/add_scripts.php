<?php
function add_scripts () {
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', [], true);

    wp_enqueue_script('jquery');    
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', [],
    null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [],
    null, true);
}