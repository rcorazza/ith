<?php /* Template Name: Recruit Page */ get_header(); ?>

	
		<div class="single player main contain-all">
		<?php 
		$height = get_field('player_height'); 
		$weight =  get_field('player_weight'); 
		$position =  get_field('position');
		$hs =  get_field('high_school');
		$aau_team = get_field('aau_team');
		$class = get_field('class_year');
		$composite = get_field('composite');
		$offer =  get_field('offer');
		$video =  get_field('video');
		$schools = get_field('school_list');
		?>  
			
			<div class="left-rail">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				
					<div class="post">
						<div class="top">
							<h2><?php the_title(); ?></h2>
							<div class="identify player star">
							<?php $stars = get_field('stars'); ?>
							<?php
							if ($stars == 1) {
								echo "<span class='glyphicons star'></span>";
							} elseif ($stars == 2) {
								echo "<span class='glyphicons star'></span> <span class='glyphicons star'></span>";
							} elseif ($stars == 3) {
								echo "<span class='glyphicons star'></span> <span class='glyphicons star'></span> <span class='glyphicons star'></span>";
							} elseif ($stars == 4) {
							   echo "<span class='glyphicons star'></span> <span class='glyphicons star'></span> <span class='glyphicons star'></span> <span class='glyphicons star'></span>";
							} elseif ($stars == 5) {
								echo "<span class='glyphicons star'></span> <span class='glyphicons star'></span> <span class='glyphicons star'></span> <span class='glyphicons star'></span> <span class='glyphicons star'></span>";
							} 

							?>
						</div>
					</div>
						
					<p class="big">
						<?php the_post_thumbnail(); ?>
					</p>
						
						
					<p style="float: left;"><strong>Class of <?php echo $class; ?></strong></p>
					<p style="float: right;"><strong>247 Composite Ranking:</strong> <?php echo $composite; ?></p>

					<div style="clear: both;"></div>
					
					<div class="entry player">
						<?php
						if ($offer == yes) {
							echo " <p class='perma offer'>IU offer? <span style='margin-top: -30px !important;' class='glyphicons ok_2'></span></p>";
						} elseif ($offer == no) {
							echo "<p class='perma offer'>IU offer? No</p>";
						} 

						?>

					
					<p class="perma"><strong>Schools:</strong> <?php echo $schools; ?></p>
						
					<p class="perma"><?php the_title(); ?> is a <?php echo $position; ?> for <?php echo $hs; ?> and <?php echo $aau_team; ?>. He is <?php echo $height; ?> and weighs <?php echo $weight; ?> pounds.</p>
												
					
					<h2 class="player">News</h2>
								
							
				
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
							
							
	
							<div style="clear: both;"></div> 		
			
				                 <?php
									if ($video == yes) {
										echo "<h2 class='player'>Video</h2>";
									} else {
										
									} 

									?>

							<div style="clear: both;"></div> 
			
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>	
							
							<div style="clear: both;"></div> 
				
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<div class="post comments">
						<?php comments_template(''); ?>
						<?php dynamic_sidebar('double ad'); ?>
				</div>
			</div>
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>