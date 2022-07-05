<?php get_header(); ?>
    <div class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php if (have_posts()) : ?>
                            <?php while (have_posts()) :
                                the_post();
                                ?>
                                <?php the_title('<h1 class="blog-entry__header__title">', '</h1>') ?>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php get_footer();