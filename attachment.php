<?php get_header(); ?>
	<div class="full-wrap">
		<div class="single image contain-all">
			<div class="left-rail">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="post">
						<div class="top-of-post">
						</div>					
						<h2>
						<a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?>
						</h2>

						<ul class="sharing">
							<li style="width: 89px;">
								<iframe allowtransparency="true" frameborder="0" scrolling="no" src="http://platform.twitter.com/widgets/tweet_button.html?url=<?php the_permalink(); ?>&via=insidethehall&text=<?php the_title(); ?>" style="width:115px; height:21px;"></iframe>
							</li>
							<li style="width: 91px;">  
								<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show_faces=false&amp;
								width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:450px; height:20px;">
								</iframe>          
							</li> 
						</ul>
						<div style="clear: both;"></div>
						<?php the_content(); ?> 
						<p style="text-align: center;">
							<a href="<?php echo wp_get_attachment_url($post->ID); ?>"> <?php echo wp_get_attachment_image( $post->ID,'full' ); ?></a>
						</p>

						<div class="navigation_image">
							<div class="alignleft_image"><?php previous_image_link(true,'<span style="font-size: 17px;">&#8592</span> Previous Photo'); ?></div>
							<div class="alignright_image"><?php next_image_link(true,'Next Photo <span style="font-size: 17px;">&#8594;</span>');?></div>
							<div style="clear: both;"></div>
						</div>
					</div>

					<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
					<?php endif; ?>
					<div class="post comments">
						<?php comments_template(''); ?>
					</div>
			</div>
		<?php get_sidebar('single'); ?>
	</div>
<?php get_footer(); ?>









