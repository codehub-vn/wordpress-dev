<?php
function r_rate_recipe() {
    global $wpdb;
    $response = ['status' => 1];

    // Collect data
    $data = $_POST;
    $post_id = absint($data['rid']);
    $rating = round($data['rating'], 1);
    $user_ip =$_SERVER['REMOTE_ADDR'];

    // Check if recipe has been rated by this user (based on IP addr)
    $rating_count = $wpdb->get_var("SELECT count(*) FROM `".$wpdb->prefix."recipe_ratings`
        WHERE recipe_id = '{$post_id}' AND user_ip = '{$user_ip}'");

    if ($rating_count > 0) {
        wp_send_json($response);
    }
    // Insert data into $prefix_recipe_ratings table
    $wpdb->insert($wpdb->prefix.'recipe_ratings', [
        'recipe_id' => $post_id,
        'rating' => $rating,
        'user_ip' => $user_ip
    ], [
        '%d', '%f', '%s'
    ]);

    // Update Metadata
    $recipe_data = get_post_meta($post_id, 'recipe_data', true);
    $recipe_data['rating_count']++;
    $recipe_data['rating'] = round($wpdb->get_var("SELECT AVG(`rating`) FROM `{$wpdb->prefix}recipe_ratings` WHERE `recipe_id` = '{$post_id}'"), 1);

    update_post_meta($post_id, 'recipe_data', $recipe_data);

    // Update response status
    $response['status'] = 2;
    wp_send_json($response);
}