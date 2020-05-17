<?php
    function add_styles() {
        wp_enqueue_style('icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
        wp_enqueue_style('Montserrat', 'https://fonts.googleapis.com/css?family=Montserrat&display=swap');
        wp_enqueue_style('Source', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
        wp_enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css');
        wp_enqueue_style('slicktheme', get_template_directory_uri() . '/assets/css/slick-theme.css');
        wp_enqueue_style('style', get_stylesheet_uri());
    }