
<pants-card>
       
        <?php if( have_rows('pants_detail') ): ?>

            <?php while( have_rows('pants_detail') ) : the_row();?>

            <?php 
            $name = get_sub_field('name'); 
            $description = get_sub_field('description');
            $image = get_sub_field('image'); 
            $picture = $image ['sizes']['thumbnail']; 
            $price = get_sub_field('price'); 
            ?>

                <picture class='product-img'> 
                    <img src='<?=$picture?>'>
                </picture>
                <p class='quiet-voice'><?=$name?></p>
                <p class='quiet-voice'><?=$description?></p>
                <p class='quiet-voice'>$<?=$price?></p>
                <a class='link' href='<?php the_permalink()?>'>
                    <span>Details</span>
                </a>
                

                
            <?php endwhile; ?>


        <?php else : ?>

        <?php endif; ?>

</pants-card>


<shirt-card>
       
        <?php if( have_rows('shirt_detail') ): ?>

            <?php while( have_rows('shirt_detail') ) : the_row();?>

            <?php 
            $name = get_sub_field('name'); 
            $description = get_sub_field('description');
            $image = get_sub_field('image'); 
            $picture = $image ['sizes']['thumbnail']; 
            $price = get_sub_field('price'); 
            ?>

                <picture class='product-img'> 
                    <img src='<?=$picture?>'>
                </picture>
                <p class='quiet-voice'><?=$name?></p>
                <p class='quiet-voice'><?=$description?></p>
                <p class='quiet-voice'>$<?=$price?></p>
                <a class='link' href='<?php the_permalink()?>'>
                    <span>Details</span>
                </a>
                

                
            <?php endwhile; ?>


        <?php else : ?>

        <?php endif; ?>

</shirt-card>

<sweater-card>
       
        <?php if( have_rows('sweater_detail') ): ?>

            <?php while( have_rows('sweater_detail') ) : the_row();?>

            <?php 
            $name = get_sub_field('name'); 
            $description = get_sub_field('description');
            $image = get_sub_field('image'); 
            $picture = $image ['sizes']['thumbnail']; 
            $price = get_sub_field('price'); 
            ?>

                <picture class='product-img'> 
                    <img src='<?=$picture?>'>
                </picture>
                <p class='quiet-voice'><?=$name?></p>
                <p class='quiet-voice'><?=$description?></p>
                <p class='quiet-voice'>$<?=$price?></p>
                <a class='link' href='<?php the_permalink()?>'>
                    <span>Details</span>
                </a>
                

                
            <?php endwhile; ?>


        <?php else : ?>

        <?php endif; ?>

</sweater-card>
