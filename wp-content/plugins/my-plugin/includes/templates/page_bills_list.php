<?php
global $wpdb;
$sql = 'SELECT '.$wpdb->prefix.'posts.ID, post_title, post_date, post_status, user_nicename 
    FROM '.$wpdb->prefix.'posts
    INNER JOIN '.$wpdb->prefix.'users
    ON '.$wpdb->prefix.'posts.post_author = '.$wpdb->prefix.'users.ID';
$posts = $wpdb->get_results($sql);

?>

<div class="wrap">
    <h1 class="wp-heading-inline">Post List</h1>
    <hr class="wp-header-end">
</div>
<div class="tts-order-table-container" style="width: 1094px;">
    <table class="wp-list-table widefat fixed striped table-view-list posts">
        <thead>
            <tr>
                <th scope="col" id="id" class="manage-column column-title column-primary sortable desc" abbr="ID"><span>ID</span></th>
                <th scope="col" id="title" class="manage-column column-title column-primary sortable desc" abbr="Title"><span>Title</span></th>
                <th scope="col" id="categories" class="manage-column column-categories">Status</th>
                <th scope="col" id="date" class="manage-column column-date sorted desc" aria-sort="descending" abbr="Date"><span>Date</span></th>
                <th scope="col" id="price" class="manage-column column-price">Author</th>
                <th scope="col" id="price" class="manage-column column-price">Quantity</th>
            </tr>
        </thead>

        <tbody id="the-list">
            <?php foreach ($posts as $key => $post): ?>
                <tr id="post-46" class="iedit author-self level-0 post-46 type-sport status-publish hentry">
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
                        <strong><?= $post->ID; ?></strong>
                    </td>
                    <td class="title column-title has-row-actions column-primary page-title" data-colname="Title">
                        <?= $post->post_title; ?>
                    </td>
                    <td class="categories column-categories" data-colname="Categories"><span aria-hidden="true"><?= $post->post_status; ?></span><span class="screen-reader-text">No categories</span></td>
                    <td class="date column-date" data-colname="Date"><?= $post->post_date; ?></td>
                    <td class="price column-price" data-colname="Price"><?= $post->user_nicename; ?></td>
                    <?php if(get_post_meta($post->ID, "quantity", true)): ?>
                        <td class="price column-price" data-colname="Price"><?= get_post_meta($post->ID, "quantity", true); ?></td>
                    <?php else: ?>
                        <td class="price column-price" data-colname="Price">0</td>
                    <?php endif; ?>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>