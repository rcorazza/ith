<?php get_header(); ?>

	
		<div class="single main contain-all">
			<div class="left-rail">
				
				<?php dynamic_sidebar('UGP Advert'); ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'main-post-single' ); ?>	         
					 

				<?php endwhile; else: ?>
				
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				
				<?php endif; ?>

				<div class="post comments">
					<?php comments_template(''); ?>
					<?php dynamic_sidebar('double ad'); ?>
				</div>
				
				
			
			</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>
