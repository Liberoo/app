<?php
$template = [
    ['core/image'],
    ['core/heading'],
    ['core/paragraph'],
    ['acf/accordion'],

];
?>

<div class="accordion__box">
    <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" />
</div>