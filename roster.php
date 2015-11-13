<?php /* Template Name: Roster  */ get_header(); ?>

	
			<div class="single main roster contain-all">
				<div class="left-rail">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="post">
							<div class="top-of-post">
							</div>
							<h2><?php the_title(); ?></h2>
							<div style="clear: both;"></div>
							<?php the_content(); ?> 
						</div>
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