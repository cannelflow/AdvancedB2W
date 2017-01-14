<?php get_header() ; ?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() ; ?>/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php
                  $args = array(
                      'post_type'     => 'post',
                      'post_per_page' => 8,
                   );
                   
                   $wp_query = new WP_Query($args)
                ?>
                <?php if ( $wp_query -> have_posts() ) : while ( $wp_query -> have_posts() ) : $wp_query -> the_post(); ?>
                    <div class="post-preview">
                     <a href="post.html">
                        <h2 class="post-title">
                            <?php the_title() ; ?>
                        </h2>
                        <h3 class="post-subtitle">
                           <?php the_excerpt() ; ?>
                        </h3>
                     </a>
                        <p class="post-meta">Posted by <?php the_author_posts_link() ; ?> on <time><?php the_date() ; ?></time></p>
                    </div>
                    <hr>
                <?php endwhile; else : ?>
	            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
                
                <!--<div class="post-preview">-->
                <!--    <a href="post.html">-->
                <!--        <h2 class="post-title">-->
                <!--            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.-->
                <!--        </h2>-->
                <!--    </a>-->
                <!--    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>-->
                <!--</div>-->
                <!--<hr>-->
                <!--<div class="post-preview">-->
                <!--    <a href="post.html">-->
                <!--        <h2 class="post-title">-->
                <!--            Science has not yet mastered prophecy-->
                <!--        </h2>-->
                <!--        <h3 class="post-subtitle">-->
                <!--            We predict too much for the next year and yet far too little for the next ten.-->
                <!--        </h3>-->
                <!--    </a>-->
                <!--    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>-->
                <!--</div>-->
                <!--<hr>-->
                <!--<div class="post-preview">-->
                <!--    <a href="post.html">-->
                <!--        <h2 class="post-title">-->
                <!--            Failure is not an option-->
                <!--        </h2>-->
                <!--        <h3 class="post-subtitle">-->
                <!--            Many say exploration is part of our destiny, but it’s actually our duty to future generations.-->
                <!--        </h3>-->
                <!--    </a>-->
                <!--    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>-->
                <!--</div>-->
                <!--<hr>-->
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

<?php get_footer() ; ?>