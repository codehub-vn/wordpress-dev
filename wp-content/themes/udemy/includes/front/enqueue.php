<?php
function ju_enqueue() {
    wp_register_style('ju_bootstrap', get_template_directory_uri().'/assets/styles/bootstrap.css');
    wp_register_style('ju_main', get_template_directory_uri().'/assets/styles/main.css');
    wp_register_style('ju_roboto', 'https://fonts.googleapis.com/css?family=Roboto');
    wp_register_style('ju_roboto_mono', 'https://fonts.googleapis.com/css?family=Roboto+Mono');

    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_main');
    wp_enqueue_style('ju_roboto');
    wp_enqueue_style('ju_roboto_mono');

    wp_register_script('ju_fastclick', get_template_directory_uri().'/assets/vendor/fastclick/fastclick.js');
    wp_register_script('ju_modernizr', get_template_directory_uri().'/assets/vendor/modernizr/modernizr.js');
    wp_register_script('ju_bootstrap', get_template_directory_uri().'/assets/scripts/bootstrap.min.js', [], false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_fastclick');
    wp_enqueue_script('ju_fastclick');
    wp_enqueue_script('ju_modernizr');
    wp_enqueue_script('ju_bootstrap');

}
