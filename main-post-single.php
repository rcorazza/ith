<article class="post <?php if ( in_category( 'Sponsored' )) {  ?>sponsored<?php } ?>">
    <h2>
        <a href='<?php the_permalink() ?>'	rel='bookmark'>	<?php the_title(); ?></a>
    </h2>
    <div class="author-share">
        <?php the_author_image(); ?>
		<div>
			<ul>
				<li><?php the_author_posts_link(); ?></li>
			</ul>
			<ul class="time">
				<li>
					<?php the_time('m/d/Y g:i a') ?> in 
		
					<?php $cats = get_the_category();
						foreach( $cats as $cat ) { ?>		
					<?php break;
						} ?>
					<?php if ( in_category( 'Quicklink' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span class="glyphicons link"></span>
					</a>
					<?php } elseif ( in_category( 'Quickvideo' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span style="margin-top: 4px;" class="glyphicons facetime_video"></span>
					</a>
					<?php } elseif ( in_category( 'Video' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span style="margin-top: 4px;" class="glyphicons facetime_video"></span>
					</a>
					<?php } elseif ( in_category( 'Photo Gallery' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span class="glyphicons camera"></span>
					</a>
					<?php } elseif ( in_category( 'Film Session' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span class="glyphicons film"></span>
					</a>
					<?php } elseif ( in_category( 'Recruiting' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span class="glyphicons star"></span>
					</a>
					<?php } elseif ( in_category( 'Podcast on the Brink' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span class="glyphicons microphone"></span>
					</a>
					<?php } elseif ( in_category( 'The Minute After' )) {  ?>
					<a href="<?php echo get_category_link($cat->term_id); ?>">
					<span class="glyphicons stopwatch"></span>	
					</a>
					<?php }  else { ?>
					<?php } ?>
					</a>
				</li>
			</ul>
			<?php the_category('',''); ?>	
		</div>
    </div>
    <?php if ( in_category ( 'Video' )) {  ?>
    <?php } elseif ( in_category ( 'Quickvideo' )) {  ?>
    <?php } elseif ( in_category ( 'Film Session' )) {  ?>
    <?php } else { ?>
    <p class="featured">
	   <?php if(!is_mobile()) {
            the_post_thumbnail();
            }
            else {
            the_post_thumbnail( 'large' );
            }
            ?>
    </p>
    <?php } ?>
    <div style="margin-top: -9px; width: 100%; border-bottom: 1px solid #cccccc; overflow: auto;" id="new-native">
    	<ul>
    		<li style="margin-bottom: 0px; width: 30%; float: left;"><img style="width: 100px !important;" src="http://ith.ryc.me/wp-content/uploads/2016/09/gas.jpg"></li>
    		<li style="margin-bottom: 0px;float: right;text-align: left;width: 65%;font-size: 14px;line-height: 18px;padding-top: 0px;"><a href="/">Drivers with no tickets in two years must read this</a></li>
    		<li style="font-weight: bold; width: 100%;float: left;text-align: center;clear: both;font-size: 12px;margin-top: 0px;margin-bottom: 10px;">Sponsored by <a href="/">Inspired Insurance Savings</a></li>

    	</ul>	
    </div>
    <div style="clear: both;"></div>
    <?php the_content('Read <span style="font-size: 17px;">&#8594;</span>'); ?> 
	<?php wp_link_pages(); ?>
    <?php if (!in_category ( 'Sponsored' )) {  ?>
    <p class="filed">Filed to: <?php the_tags('',',&nbsp;'); ?></p>
    <?php } ?>
</article>