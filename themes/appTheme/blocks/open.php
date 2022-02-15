<?php
$template = [
    ['core/group', ['className' => 'openHero__text'], [['core/heading'], ['core/paragraph'], ['core/button'], ['core/button']]]

];
?>
<section class="openHero">
    <div class="openHero__wave"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/wave.svg" alt=""></div>
    <div class="openHero__correct"></div>

    <div class="container">
        <div class="openHero__wrapper">
            <InnerBlocks template="<?php echo esc_attr(wp_json_encode($template)); ?>" />
        </div>

    </div>
</section>