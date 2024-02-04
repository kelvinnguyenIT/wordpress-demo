<?php
add_action('init', 'my_plugin_custom_type');
function my_plugin_custom_type() {
    register_post_type('sport',
		array(
			'labels'      => array(
				'name'          => __('Sports', 'my-plugin'),
				'singular_name' => __('Sport', 'my-plugin'),
			),
				'public'      => true,
				'has_archive' => true,
                'rewrite'     => array('slug', 'sports'),
                'supports'    => array('title', 'editor', 'thumbnail', 'excerpt'),
		)
	);
}

add_action('init', 'my_plugin_custom_taxonomy');
function my_plugin_custom_taxonomy() {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Category' ),
    );
    $args   = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'category' ],
    );
    register_taxonomy( 'category', [ 'sport' ], $args );
}