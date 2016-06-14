<?php get_header(); ?>
<section class="contain-all main">
   <section class="left-rail">
      <div class="inner">
         <div class="post archive">
            <?php if ( is_category()) {  ?>
            <h2><?php single_cat_title(); ?> Archive</h2>
            <?php } elseif ( is_tag()) {  ?>
            <h2><?php single_tag_title(); ?> Archive</h2>
            <?php } elseif ( is_month()) {  ?>
            <h2><?php echo get_the_date( 'F Y' ); ?> Archive</h2>
            <?php } elseif ( is_year()) {  ?>
            <h2><?php echo get_the_date( 'Y' ); ?> Archive</h2>
            <?php } elseif ( is_author()) {  ?>
            <?php the_author_image(); ?>
            <p class="author"><?php the_author_meta(user_description); ?> </p>
            <?php } ?> 
         </div>
     <?php if (have_posts()) : ?>
			<?php $count = 0; ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++; ?>
            <?php get_template_part('small-post'); ?>
                <?php if( $wp_query->current_post == 0 ) { 
                if( is_mobile()) { 
                dynamic_sidebar('top content'); 
				echo '<div id="nativoaboveHP"></div>';
                } 
                else if ( !is_mobile() || !is_tablet() ) { 
                dynamic_sidebar('underground');
                dynamic_sidebar('forum teaser'); 
				echo '<div id="nativoaboveHP"></div>';
                }
                else if (is_tablet()) { 
                dynamic_sidebar('underground');
                dynamic_sidebar('top content'); 
				echo '<div id="nativoaboveHP"></div>';
                } 
                } ?>          
            <?php if( $wp_query->current_post == 1) { 
                if( is_mobile() || is_tablet() ) { 
                dynamic_sidebar('forum teaser'); 
                } 
                else { 
                
                } 
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