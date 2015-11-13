<?php /* Template Name: Cat-Tag */ get_header(); ?>

	
			<div class="single main archives contain-all">
				<div class="left-rail">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="post">
							<h2><?php the_title(); ?></h2>
							<div class="post archive">
							<h2>Posts by Category</h2>
							<?php wp_dropdown_categories( $args ); ?> 
							<li style="margin-top: 20px; margin-bottom: 20px;" id="categories">
	<h2><?php _e('Posts by Tags'); ?></h2>
	<form action="<?php bloginfo('url'); ?>/" method="get">
	<div>
<?php
$select = wp_dropdown_categories('taxonomy=post_tag&show_option_none=Select tag&show_count=1&orderby=name&echo=0');
$select = preg_replace("#<select([^>]*)>#", "<select$1 onchange='return this.form.submit()'>", $select);
echo $select;
?>
	<noscript><div><input type="submit" value="View" /></div></noscript>
	</div></form>
</li>
<h2>Posts By Date</h2>
</div>
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