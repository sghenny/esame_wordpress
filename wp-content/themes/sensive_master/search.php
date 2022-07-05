<<?php get_header(); ?>


<main class="site-main">
    <div class="container" style="padding-left:0;padding-right:0">
      <div class="row">
        <div class="col">
	        <header class="blog-entry__header" style="width:100%;margin: 0 auto">
                <h4><?php _e('Risulati della ricerca per: ',); echo get_search_query(); ?></h4>
            </header>
            <?php if ( have_posts() ) : ?>

            <ul class="post-list">
                <?php
                while ( have_posts() ) :
                    the_post(); 
                ?>
                <li>
                  <div class="single-recent-blog-post">
                      <div class="thumb">
                        <?php sensive_master_post_thumbnail();?>
                        <ul class="thumb-info">
                          <li><a href="#"><i class="ti-notepad"></i><?php echo get_the_date( 'F j, Y'); ?></a></li>
                        </ul>
                      </div>
                      <div class="details mt-20">
                        <a href="blog-single.html">
                        <?php
                            // Parametrizzo il titolo dell'articolo, non è più statico'
                            the_title('<h3>','</h3>');
                        ?>
                        </a>
                        <p class="tag-list-inline">Tag: 
                            <a href="#">
                                <?php the_category(' | ')?>
                            </a>
                        </p>
                        <p><?php the_excerpt()?></p>
                        <a class="button" href="<?php the_permalink(); ?>">Read More <i class="ti-arrow-right"></i></a>
                      </div>
                    </div>
                </li>
                <?php endwhile; ?>

            </ul>
            <?php endif; ?>
        </div>
      </div>
    </div>
</main>
<?php get_footer(); ?>



    



