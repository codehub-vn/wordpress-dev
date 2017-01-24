<?php
/*
 * Plugin Name: Recipe
 * Description: A simple Wordpress plugin that allows users to create recipes aand rate those recipes
 * Version: 1.0
 * Author: Jack
 * Author URI:
 * Text Domain: recipe
 */

if (!function_exists('add_action')) {
    echo 'Not allowed';
    exit();
}


// Setup
define('RECIPE_PLUGIN_URL', __FILE__);


// Includes
include('includes/activate.php');
include('includes/init.php');

include('includes/admin/init.php');
include('process/save-post.php');
include('process/filter-content.php');

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin');

add_action('init', 'recipe_init');

add_action('admin_init', 'recipe_admin_init');

add_action('save_post_recipe', 'r_save_post_admin', 10, 3);

add_filter('the_content', 'r_filter_recipe_content');

// Shortcode
