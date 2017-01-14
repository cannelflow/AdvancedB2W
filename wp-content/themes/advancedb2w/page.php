<?php get_header() ; ?>
    <!-- Page Header -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri() ; ?>/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php the_title() ; ?></h1>
                        <hr class="small">
                        <span class="subheading">This is what I do.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <?php the_content() ; ?>
            </div>
        </div>
    </div>

    <?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
<?php get_footer() ; ?>    