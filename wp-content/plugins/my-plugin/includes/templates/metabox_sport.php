<?php
    global $post;
    $price = get_post_meta($post->ID, "price", true);
    $price_sale = get_post_meta($post->ID, "price_sale", true);
    $quantity = get_post_meta($post->ID, "quantity", true);
?>
<table class="form-table" role="presentation">
    <tbody>
        <tr>
            <th scope="row"><label for="price">Price</label></th>
            <td><input name="price" type="number" id="price" value="<?= $price ?>" class="regular-text"></td>
        </tr>
        <tr>
            <th scope="row"><label for="price_sale">Price Sale</label></th>
            <td>
                <input name="price_sale" type="number" id="price_sale" aria-describedby="tagline-description" value="<?= $price_sale ?>" class="regular-text">
            </td>
        </tr>
        <tr>
            <th scope="row"><label for="quantity">Quantity</label></th>
            <td><input name="quantity" type="number" id="quantity" value="<?= $quantity ?>" class="regular-text code"></td>
        </tr>
    </tbody>
</table>