<?php get_header(); ?>
<div class="full-wrap">
<div class="single main image contain-all">
    <div class="left-rail">
        <div class="inner">
            <div id="mobile-leaderboard"></div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="post">
                <h2>
                    <a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> 
                </h2>
                <div style="clear: both;"></div>
                <?php the_content(); ?> 
                <p class="featured">
                    <a href="<?php echo wp_get_attachment_url($post->ID); ?>"> <?php echo wp_get_attachment_image( $post->ID,'full' ); ?></a><br />
                </p>
                <div class="navigation_image">
                    <div class="alignleft_image"><?php previous_image_link(true,'<span style="font-size: 17px;">&#8592</span> Previous Photo'); ?></div>
                    <div class="alignright_image"><?php next_image_link(true,'Next Photo <span style="font-size: 17px;">&#8594;</span>');?></div>
                    <div style="clear: both;"></div>
                </div>
            </div>
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
                <?php dynamic_sidebar('double ad'); ?>
            </div>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>