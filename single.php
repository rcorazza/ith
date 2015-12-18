<?php get_header(); ?>
<section class="single main contain-all">
    <section class="left-rail">
        <div class="inner">
            <?php dynamic_sidebar('UGP Advert'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'main-post-single' ); ?>	         
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <div class="bottom">
                <div id="nativobelow"></div>
                <?php
                    if (is_mobile() || is_tablet()) {
                       dynamic_sidebar('forum teaser');
                       dynamic_sidebar('latest');
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