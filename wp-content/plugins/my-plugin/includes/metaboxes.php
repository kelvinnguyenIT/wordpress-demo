<?php
error_reporting(E_ERROR | E_PARSE);

add_action('add_meta_boxes', 'my_plugin_meta_box_sport');

add_action('save_post', 'my_plugin_save_sport');
function my_plugin_save_sport($post_id) {
    if($_REQUEST['post_type'] == 'sport') {
        update_post_meta($post_id, 'price', $_REQUEST['price']);
        update_post_meta($post_id, 'price_sale', $_REQUEST['price_sale']);
        update_post_meta($post_id, 'quantity', $_REQUEST['quantity']);
    }
}

function my_plugin_meta_box_sport() {
    add_meta_box(
        'my_plugin_sport_info',
        'Information addition',
        'my_plugin_meta_box_sport_html',
        'sport'
    );
}

function my_plugin_meta_box_sport_html() {
    include_once MY_PLUGIN_PATH.'/includes/templates/metabox_sport.php';
}