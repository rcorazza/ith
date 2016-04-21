<?php get_header(); ?>
<section class="contain-all main">
    <section class="left-rail">
        <div class="inner">
            <?php define('PAGE_NUMBER', get_query_var('paged')); ?>
            <?php if (is_home() && PAGE_NUMBER < 2) : ?>
            <?php dynamic_sidebar('top story'); ?>
            <?php endif; ?>
            <?php if (have_posts()) : ?>
			<?php $count = 0; ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++; ?>
            <?php if ($count == 2 || $count == 4 || $count == 6 ||  $count == 9 ||  $count == 10) {
     get_template_part('small-post');
 }
 
 else {
 
  get_template_part( 'main-post' ); 
 }
 
 
 ?>
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
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'insidethehall'; // required: replace example with your forum shortname
            
            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function () {
            var s = document.createElement('script'); s.async = true;
            s.type = 'text/javascript';
            s.src = 'http://' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
            }());
        </script>
        </div>	
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>