<pants-item>
       
        <?php if( have_rows('pants_detail') ): ?>

            <?php while( have_rows('pants_detail') ) : the_row();?>

            <?php 
            $name = get_sub_field('name'); 
            $description = get_sub_field('description');
            $image = get_sub_field('image'); 
            $picture = $image ['sizes']['thumbnail']; 
            $price = get_sub_field ('price');
            ?>

                <picture class='pants-img'> 
                    <img src='<?=$picture?>'>
                </picture>

                <text-content> 
	                <p class='quiet-voice'><?=$name?></p>
	                <p class='quiet-voice'><?=$description?></p>
	                <p class='quiet-voice'>$<?=$price?></p>
            	</text-content>
                

                
            <?php endwhile; ?>


        <?php else : ?>

        <?php endif; ?>

</pants-item>
