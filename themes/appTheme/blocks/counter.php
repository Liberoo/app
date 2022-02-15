<?php $id = 'couter' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}
?>
<div class="counter">
    <div class="counter__number"><span class="counter__an"><?php echo get_field('count_number') ?></span><?php echo get_field('sufix') ?></div>
    <span class="counter__title"><?php echo get_field('title') ?></span>
</div>