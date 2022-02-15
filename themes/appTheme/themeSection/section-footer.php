<?php
$heading = get_field('header', 'options');
$footer_text = get_field('footer_text', 'options');
$footer_button = get_field('footer_button', 'options');
$copyright = get_field('copyright_text', 'options');
$logo = get_field('app_logo', 'options');
$anchor = get_field('anchor', 'options')
?>

<section class="footer" id='<?php echo $anchor ?>'>
    <div class="container footer__contact">
        <h2><?php echo $heading ?></h2>
        <p><?php echo $footer_text ?></p>
        <button> <a href="<?php echo $footer_button['button_url'] ?>"> <?php echo $footer_button['button_text'] ?></a></button>
    </div>
    <div class="footer__belt">
        <div class="container">
            <div class="footer__belt__links">
                <?php

                if (have_rows('websites_links', 'options')) :
                    while (have_rows('websites_links', 'options')) : the_row();
                ?>
                        <a href="<?php echo get_sub_field('website_url') ?>"><?php echo get_sub_field('website_link') ?></a>
                <?php
                    endwhile;
                endif
                ?>
            </div>
            <div class="footer__belt__logo"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?> "></div>
            <span><?php echo $copyright ?></span>
        </div>
    </div>
</section>