<?php
add_filter('manage_sport_posts_columns', 'my_plugin_filter_columns');
function my_plugin_filter_columns($columns) {
    $columns['price'] = 'Price';
    $columns['price_sale'] = 'Price Sale';
    $columns['quantity'] = 'Quantity';

    return $columns;
}

add_action('manage_sport_posts_custom_column', 'my_plugin_sport_render_columns', 10, 2);
function my_plugin_sport_render_columns($column, $post_id) {
    switch ($column) {
        case 'price':
            echo get_post_meta($post_id, 'price', true);
            break;
        case 'price_sale':
            echo get_post_meta($post_id, 'price_sale', true);
            break;
        case 'quantity':
            echo get_post_meta($post_id, 'quantity', true);
            break;
    }
}