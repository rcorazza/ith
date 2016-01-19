<div class="post <?php if ( in_category( 'Sponsored' )) {  ?>sponsored<?php } ?>">
    <h2><a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title(); ?>'> <?php the_title(); ?></a></h2>
    <ul class="author-share">
        <li><?php the_author_posts_link(); ?> // <a href='<?php the_permalink() ?>'><?php the_time('m/d/Y g:i a') ?></a> // <a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
    </ul>
    <?php if ( in_category ( 'Video' )) {  ?>
    <?php } elseif ( in_category ( 'Quickvideo' )) {  ?>
    <?php } elseif ( in_category ( 'Film Session' )) {  ?>
    <?php } else { ?>
    <p class="featured">
	    <a href='<?php the_permalink() ?>'>
        <?php if(!is_mobile()) {
            the_post_thumbnail();
            }
            else {
            the_post_thumbnail( 'large' );
            }
            ?>
		</a>	
    </p>
    <?php } ?>
    <?php the_content('<span class="offset">Read <span style="font-size: 17px;">&#8594;</span></span>'); ?> 
</div>