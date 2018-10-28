<?php /* Template Name: Player Profile */ get_header(); ?>
<section class="single main player contain-all">
    <section class="left-rail">
        <div class="inner">
            <div id="mobile-leaderboard"></div>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <article class="post">
                <div class="top">
                    <h2><?php the_title(); ?></h2>
                    <div class="identify">
                        <?php the_field('player_number'); ?>    
                    </div>
                </div>
                <p class="featured">
                    <?php if(!is_mobile()) {
                        the_post_thumbnail();
                        }
                        else {
                        the_post_thumbnail( 'large' );
                        }
                        ?>
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
                    <p class="perma"><a href="//www.insidethehall.com/tag/<?php the_field('url_tag');?>">more <?php the_title(); ?> news <span style="font-size: 17px;">&#8594;</span></a></p>
                    <h2>Photos</h2>
                    <p class="perma click"><a id="photo-click" href="#">see all <?php the_title(); ?> photos <span style="font-size: 17px;">&#8594;</span></a></p>
                    <div id="holder">
                        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
                    </div>
                    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
                </div>
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="bottom">
                <div id="nativobelow"></div>
                <?php   
                    if (is_mobile() || is_tablet() ) {
                        echo "<div id='mobile-leaderboard-two'></div>";
                        dynamic_sidebar('latest');
                    }
                    else {
                    
                    }   
                    ?>
            </div>
            <div class="post comments">
                <?php comments_template(''); ?>
                <div class="OUTBRAIN" data-src="" data-widget-id="TF_1" data-ob-template="InsideTheHall"></div>
                <script type="text/javascript" async="async" src="https://widgets.outbrain.com/outbrain.js"></script>    
            </div>
            <?php dynamic_sidebar('double ad'); ?>
        </div>
    </section>
    <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>