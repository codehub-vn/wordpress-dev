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
include('includes/deactivate.php');
include('includes/init.php');

include('includes/admin/init.php');
include('process/save-post.php');
include('process/filter-content.php');

include('includes/front/enqueue.php');

include('process/rate-recipe.php');
include('includes/admin/columns.php');

// Hooks
register_activation_hook(__FILE__, 'r_activate_plugin');
register_deactivation_hook(__FILE__, 'r_deactivate_plugin');

add_action('init', 'recipe_init');

add_action('admin_init', 'recipe_admin_init');

add_action('save_post_recipe', 'r_save_post_admin', 10, 3);

add_filter('the_content', 'r_filter_recipe_content');

add_action('wp_enqueue_scripts', 'r_enqueue', 9999);

add_action('wp_ajax_r_rate_recipe', 'r_rate_recipe');

add_action( 'manage_recipe_posts_columns' , 'manage_recipe_columns', 10, 2 );
add_action( 'manage_recipe_custom_column' , 'manage_recipe_custom_columns', 10, 2 );

// Shortcode
