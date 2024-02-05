<?php
add_action('admin_menu', 'my_plugin_menu');
function my_plugin_menu() {
    add_menu_page(
        'Bills',
        'Bills',
        'manage_options',
        'bills',
        'my_plugin_menu_bill',
        'dashicons-admin-page',
        25,
    );

    add_submenu_page(
        'bills',
        'Add bill',
        'Add bill',
        'manage_options',
        'my-plugin-add-bill',
        'my_plugin_page_add_bills',
        26,
    );
}

function my_plugin_menu_bill() {
    include_once MY_PLUGIN_PATH.'/includes/templates/page_bills_list.php';
}

function my_plugin_page_add_bills() {
    echo "Bills";
}