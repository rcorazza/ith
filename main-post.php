<div class="post <?php if ( in_category( 'Sponsored' )) {  ?>sponsored<?php } ?>">
    <h2><a href='<?php the_permalink() ?>' rel='bookmark' title='<?php the_title(); ?>'> <?php the_title(); ?></a></h2>
    <ul class="author-share">
        <li><?php the_author_posts_link(); ?> // <a href='<?php the_permalink() ?>'><?php the_time('m/d/Y g:i a') ?></a> // <a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
    </ul>
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
    <p>
    <a class="excerpt" href='<?php the_permalink() ?>'>
   	 	<?php $excerpt = get_the_excerpt(); echo $excerpt;?> 
    </a>
    </p>
</div>