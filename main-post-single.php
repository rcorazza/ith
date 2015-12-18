<article class="post <?php if ( in_category( 'Sponsored' )) {  ?>sponsored<?php } ?>">
    <h2>
        <a href='<?php the_permalink() ?>'	rel='bookmark' title='<?php the_title(); ?>'>	<?php the_title(); ?></a>
    </h2>
    <ul class="author-share">
        <li><?php the_author_image(); ?></li>
        <li><?php the_author_posts_link(); ?> 
            <br /><?php the_time('m/d/Y g:i a') ?> in 
            <?php $cats = get_the_category();
                foreach( $cats as $cat ) { ?>
            <a href="<?php echo get_category_link($cat->term_id); ?>">
            <?php break;
                } ?>
            <?php if ( in_category( 'Quicklink' )) {  ?>
            <span class="glyphicons link"></span>
            <?php } elseif ( in_category( 'Quickvideo' )) {  ?>
            <span style="margin-top: 4px;" class="glyphicons facetime_video"></span>
            <?php } elseif ( in_category( 'Video' )) {  ?>
            <span style="margin-top: 4px;" class="glyphicons facetime_video"></span>
            <?php } elseif ( in_category( 'Photo Gallery' )) {  ?>
            <span class="glyphicons camera"></span>
            <?php } elseif ( in_category( 'Film Session' )) {  ?>
            <span class="glyphicons film"></span>
            <?php } elseif ( in_category( 'Recruiting' )) {  ?>
            <span class="glyphicons star"></span>
            <?php } elseif ( in_category( 'Podcast on the Brink' )) {  ?>
            <span class="glyphicons microphone"></span>
            <?php } elseif ( in_category( 'The Minute After' )) {  ?>
            <span class="glyphicons stopwatch"></span>	
            <?php }  else { ?>
            <?php } ?>
            </a>
            <?php the_category('',''); ?>
        </li>
    </ul>
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
    <?php the_content('Read <span style="font-size: 17px;">&#8594;</span>'); ?> 
    <?php if (!in_category ( 'Sponsored' )) {  ?>
    <p class="filed">Filed to: <?php the_tags('',',&nbsp;'); ?></p>
    <?php } ?>
</article>