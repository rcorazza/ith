<?php get_header(); ?>
<section class="contain-all main">
    <section class="left-rail">
        <div class="inner">
            <div class="post archive">
                <h2><?php printf( __( 'Search Results for: %s' ), get_search_query() ); ?></h2>
            </div>
            <?php echo '<p style="text-align: right; margin-bottom: 20px;">Order results <a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">by date</a>.</p>'; ?>
            <?php if (have_posts()) : ?>
			<?php $count = 0; ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++; ?>
            <?php get_template_part('small-post'); ?>
                <?php if( $wp_query->current_post == 0 ) { 
				echo '<div id="nativoaboveHP"></div>';
                } ?>
            <?php if( $wp_query->current_post == 2 ) { ?>
            <?php dynamic_sidebar('double ad'); ?> 
            <?php } ?>      
            <?php endwhile; else: ?> 
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <p class="more-posts"><?php posts_nav_link('','<span style="font-size: 17px;">&#8592;</span> MORE POSTS','MORE POSTS <span style="font-size: 17px;">&#8594;</span>'); ?></p>
        </div>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>