<?php
function r_enqueue() {
    wp_register_style('r_rateit', plugins_url('/assets/styles/rateit.css', RECIPE_PLUGIN_URL));
    wp_enqueue_style('r_rateit');

    wp_register_script('r_rateit', plugins_url('/assets/scripts/jquery.rateit.min.js', RECIPE_PLUGIN_URL), [], '1.0.0', false);
    wp_register_script('r_main', plugins_url('/assets/scripts/main.js', RECIPE_PLUGIN_URL), [], '1.0.0', false);
    wp_enqueue_script('jquery.rateit.min.js');
    wp_enqueue_script('r_main');
}
