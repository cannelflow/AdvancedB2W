<?php get_header() ; ?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                
            </div>
        </div>
    </div>

<?php get_footer() ;?>