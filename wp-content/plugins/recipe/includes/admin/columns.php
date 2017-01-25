<?php
function manage_recipe_columns($columns, $post_id) {
    unset($columns['tags']);
    return array_merge($columns,
        [
            'rating' => __('Rating', 'udemy'),
            'rating_count' =>__( 'Rating Count', 'udemy')
        ]
    );
}

function manage_recipe_custom_columns($column, $post_id) {
    switch ( $column ) {
        case 'rating' :
            $recipe_data = get_post_meta($post_id, 'recipe_data', true);
            return $recipe_data['rating'];
            break;

        case 'count' :
            $recipe_data = get_post_meta($post_id, 'recipe_data', true);
            return $recipe_data['rating_count'];
            break;

    }
}
