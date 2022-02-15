<?php
$template = [
    ['core/image', ['className' => 'cart__icon']],
    ['core/heading', ['className' => 'cart__heading']],
    ['core/paragraph', ['className' => 'cart__paragraph']]

];
?>
<div class="cart">
    <?php echo '<InnerBlocks template="' . esc_attr(wp_json_encode($template)) . '" templateLock="all" />' ?>
</div>