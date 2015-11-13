	<div class="post <?php if ( in_category( 'Sponsored' )) {  ?>sponsored<?php } ?>">
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
			
			<div style="clear: both;"></div>
			
			<?php the_content('<span class="offset">Read <span style="font-size: 17px;">&#8594;</span></span>'); ?> 
	</div>


