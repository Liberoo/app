<?php $logo = get_field('app_logo', 'options') ?>
<nav class="navigation">
    <div class="container">
        <div class="navi">
            <div class="navi__logo"><a href="#"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>"></a></div>
            <div class="navi__menu">
                <div class="navi__menu__burger "></div>
            </div>

        </div>

    </div>
    <div class="navi__options navi__options--close">
        <?php

        if (have_rows('menu', 'options')) :
            while (have_rows('menu', 'options')) : the_row();
        ?>
                <li><a href=""><?php echo get_sub_field('menu_item') ?></a></li>
        <?php endwhile;
        endif; ?>
    </div>
</nav>