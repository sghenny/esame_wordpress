<?php get_header(); ?>
<section class="blog-post-area">
    <div class="container" style="padding-left:0;padding-right:0">
      <div class="row" style="margin-left: -80px">
        <div class="align-items-center">


        <?php if (have_posts()) :?>
        <?php while (have_posts()):
            the_post()
        ?>

        <div class="main_blog_details ">
            <?php sensive_master_post_thumbnail();?>
            <?php
                // Parametrizzo il titolo dell'articolo, non è più statico'
                the_title('<h4>','</h4>');
            ?>
            <p class="tag-list-inline"><strong>Tag:</strong> 
                <a href="#">
                    <?php the_category(' | ')?>
                </a>
            </p>

            <br>
            <?php the_content() ?>
            <br>
            <br>
        </div>
        <?php endwhile; endif; ?>

      </div>
  </section>
<?php get_footer(); ?>