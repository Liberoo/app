<?php
$template = [
    ['core/image', ['className' => 'heroList__image']],
    ['core/image', ['className' => 'heroList__icon']],
    ['core/heading', ['className' => 'heroList__headline']],
    ['core/paragraph', ['className' => 'heroList__text']],
    ['core/list'],
    ['core/button'],

];
?>
<section class="heroList container">

    <div class="heroList__wrapper">
        <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" />
    </div>


</section>