 <div class="accord__wrapper">
     <?php

        if (have_rows('accordion')) :
            while (have_rows('accordion')) : the_row();
        ?>

             <div class="accord__box  ">
                 <h4 class="accord__headline"><?php echo get_sub_field('headline') ?></h4>
                 <div class="wrapper">
                     <p class="accordion__description"> <?php echo get_sub_field('text') ?></p>
                 </div>

             </div>

     <?php
            endwhile;
        endif;
        ?>
 </div>