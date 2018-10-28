<?php get_header(); ?>
<section class="single main contain-all">
    <section class="left-rail">
        <div class="inner">
            <div id="mobile-leaderboard"></div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'main-post-single' ); ?>            
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <div class="bottom">
                <div id="nativobelow"></div>
                <?php
                    if (is_mobile() || is_tablet()) {
                       echo "<div id='mobile-leaderboard-two'></div>";
                       dynamic_sidebar('forum teaser');
                       dynamic_sidebar('latest');
                    }
                    ?>
            </div>
            <div class="post comments">
                <?php comments_template(''); ?>
                <div class="OUTBRAIN" data-src="" data-widget-id="TF_1" data-ob-template="InsideTheHall"></div>
                <script type="text/javascript" async="async" src="https://widgets.outbrain.com/outbrain.js"></script> 
            </div>
            <?php dynamic_sidebar('double ad'); ?>
        </div>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>