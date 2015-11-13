<?php get_header(); ?>
			<section class="contain-all main">
				<section class="left-rail">
					<div class="post archive">
						<?php if ( is_category()) {  ?>
							<h2><?php single_cat_title(); ?> Archive</h2>
						<?php } elseif ( is_tag()) {  ?>
							<h2><?php single_tag_title(); ?> Archive</h2>
						<?php } ?> 
					</div>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<article class="post <?php if ( in_category( 'Sponsored' )) {  ?>sponsored<?php } ?>">	
						<h2><a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title(); ?>'> <?php the_title(); ?></a></h2>
						<ul class="author-share">
							<li><?php the_author_posts_link(); ?> // <a href='<?php the_permalink() ?>'><?php the_time('m/d/Y g:i a') ?></a></li>
							<li><a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
						</ul>	
						<?php if ( in_category ( 'Video' )) {  ?>
						<?php } elseif ( in_category ( 'Quickvideo' )) {  ?>		
						<?php } elseif ( in_category ( 'Film Session' )) {  ?>
						<?php } else { ?> 
						<p class="featured"><?php the_post_thumbnail(); ?></p>         	 
						<?php } ?>
						<?php the_content('<span class="offset">Read <span style="font-size: 17px;">&#8594;</span></span>'); ?> 
					</article>
					<?php if( $wp_query->current_post == 0 ) { ?>
					<?php dynamic_sidebar('forum teaser'); ?>
					<?php } ?>
					<?php if( $wp_query->current_post == 2 ) { ?>
					<?php dynamic_sidebar('double ad'); ?> 
					<?php } ?>
					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
					<p class="more-posts"><?php posts_nav_link('','<span style="font-size: 17px;">&#8592;</span> MORE POSTS','MORE POSTS <span style="font-size: 17px;">&#8594;</span>'); ?></p>
				</section>
				<?php get_sidebar(); ?>
			</section>	
<?php get_footer(); ?>