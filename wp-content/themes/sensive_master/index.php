<?php get_header(); ?>

  <main class="site-main">
    <!--================Hero Banner start =================-->  
    <section class="mb-30px">
      <div class="container">
        <div class="hero-banner">
          <div class="hero-banner__content">
            <h1><?php bloginfo("description");?></h1>
          </div>
        </div>
      </div>
    </section>
    <!--================Hero Banner end =================-->  

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin mt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
        
          <?php 
            $args = array(
                'posts_per_page' => 5, // how many posts.
            );

            $featured_post = new WP_Query( $args );
            if ( $featured_post->have_posts() ) { 
              while ( $featured_post->have_posts() ) {
                    $featured_post->the_post();
                    // Save Post ID.
                    $featured_id = $post->ID;
                    // Codice HTML per mostrare il Post.
                    ?>

                    <div class="single-recent-blog-post">
                      <div class="thumb">
                        <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'post-thumbnail-home' );
                        } else {
                            ?><img src="http://localhost:8888/ied-media-wp/wp-content/uploads/2022/04/e5caec5b-31ca-3a6d-9956-0aeafdfc6cdc-150x150.jpg "width="150" height="150" alt="Placeholder image" />
                        <?php
                        }
                        ?>
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

                    <?php
                } // Fine Loop
            } // Fine if
            the_posts_pagination(array(
                'prev_text' => sprintf(
                    '<span class="newer-posts">%s</span>',
                    __('Previous', 'sensive_master-theme')
                ),
                'next_text' => sprintf(
                    '<span class="older-posts">%s</span>',
                    __('Next', 'sensive_master-theme')
                )
            ));
          ?>
          </div>

          <!-- Start Blog Post Siddebar -->
          <div class="col-lg-4 sidebar-widgets">
              <div class="widget-wrap">
                <div class="single-sidebar-widget newsletter-widget">
                  <h4 class="single-sidebar-widget__title">Article:</h4>
                  <?php
                  ?>
                <div class="search-form">
	                <form method="get" action="<?php bloginfo('url');?>">
		                <input type="text" value="<?php get_search_query(); ?>" name="s" id0"s" placeholder="Search&hellip;" style="width: 100%">
		                <button class="bbtns d-block mt-20 w-100">Search</button>
	                </form>
                </div>
                </div>
              </div>
          <!-- End Blog Post Siddebar -->
          </div>
    </section>
    <!--================ End Blog Post Area =================-->
  </main>
<?php get_footer(); ?>

