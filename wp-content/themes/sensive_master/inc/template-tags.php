<?php
/**
 * Template functions
 *
 * @since 0.0.1
 */

// Funzione per mostrare la caption sotto la thumbnail
function sensive_master_post_thumbnail($size = ''){
    // Solo su single post
    if(is_single()){
        ?>

        <figure class="bleed">
            <?php the_post_thumbnail($size);

            $caption = get_post_meta(get_the_ID(), 'caption', true);

            if($caption){ ?>
                <figcaption><?php echo $caption ?></figcaption>
                <?php
            }
            ?>
        </figure>

        <?php
    }
    else {
        the_post_thumbnail($size);
    }
}