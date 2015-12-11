<?php get_header(); ?>
	<section class="single main contain-all">
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
							if (is_mobile() || is_tablet() && !is_page_template('player.php') && !is_page_template('recruit.php') && !is_page_template('roster.php') && !is_page_template('schedule.php') ) {
								dynamic_sidebar('forum teaser');
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


				}
				