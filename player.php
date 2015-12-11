<?php /* Template Name: Player Profile */ get_header(); ?>
		<div class="full-wrap">
			<section>
				<div class="main single player contain-all">
					<div class="left-rail">
						<div class="inner">
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="post">
						
						    <div class="top">
								<h2><?php the_title(); ?></h2>
								<div class="identify">
									<?php the_field('player_number'); ?>	
								</div>
							</div> 
														
							<p class="big">
								<?php the_post_thumbnail(); ?>
							</p>
							
								
							
							
					
							<div class="entry player">
				
								<?php 
								$height = get_field('player_height'); 
								$weight =  get_field('player_weight'); 
								$ht =  get_field('home_town');
								$hs =  get_field('high_school');
								$class_year = get_field('player_year');
								?>  
														
								<p class="describe"><?php the_title(); ?> is a <?php echo $class_year; ?> from <?php echo $ht; ?>. He is <?php echo $height; ?> and weighs <?php echo $weight; ?> pounds. He attended <?php echo $hs; ?>.</p>
								
								<?php // the_field('player_stats'); ?>	
						
								<h2>Latest News</h2>
										

								
									<?php					
										$the_tag = get_field('url_tag'); 
										$postslist = get_posts('numberposts=5&orderby=date&tag='.$the_tag.'');
										foreach ($postslist as $post) :
										setup_postdata($post);
									?>
									

										<p class="meta-links"><?php the_time('m/d/Y g:i a') ?></p> 
										<p class="perma"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p> 
									
									<?php endforeach; ?>	
									<?php wp_reset_query(); ?>
									<p class="perma"><a href="http://www.insidethehall.com/tag/<?php the_field('url_tag');?>">more <?php the_title(); ?> news <span style="font-size: 17px;">&#8594;</span></a></p>
								
							
							
							
									<h2>Photos</h2>
									
									<p class="perma click"><a id="photo-click" href="#">see all <?php the_title(); ?> photos &#8594;</a></p>
									
                 					<div id="holder">
									<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
									</div>
									 
							
							<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
						</div>
					</div>
					
					<?php endwhile; ?>
					<?php endif; ?>
					
					<div class="bottom">
					<?php	
						if (is_mobile() || is_tablet() ) {
							dynamic_sidebar('roster'); 
							dynamic_sidebar('latest');
						}
						else {
						
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
		<div style="clear: both;"></div>
	<?php get_footer(); ?>