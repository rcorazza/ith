<?php /* Template Name: Schedule  */ get_header(); ?>
<section class="single main schedule contain-all">
    <section class="left-rail">
        <div class="inner">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <h2><?php the_title(); ?></h2>
                <div style="clear: both;"></div>
                <?php the_content(); ?> 
            </article>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <div class="bottom">
                <?php	
                    if (is_mobile() || is_tablet() ) {
                    	dynamic_sidebar('schedule'); 
                    	dynamic_sidebar('latest');
                    }
                    else {
                    
                    }	
                    ?>
            </div>
            <div class="post comments">
                <?php comments_template(''); ?>
            </div>
            <?php dynamic_sidebar('double ad'); ?>
        </div>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>