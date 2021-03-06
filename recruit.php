<?php /* Template Name: Recruit Page */ get_header(); ?>
<section class="single player main contain-all">
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
    <section class="left-rail">
        <div class="inner">
            <div id="mobile-leaderboard"></div>
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <article class="post">
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
                <p class="featured">
                    <?php if(!is_mobile()) {
                        the_post_thumbnail();
                        }
                        else {
                        the_post_thumbnail( 'large' );
                        }
                        ?>
                </p>
                <p class="class"><strong>Class of <?php echo $class; ?></strong></p>
                <p class="composite"><strong>247 Composite Ranking:</strong> <?php echo $composite; ?></p>
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
                    <p class="perma"><a href="//www.insidethehall.com/tag/<?php the_field('url_tag');?>">more <?php the_title(); ?> news <span style="font-size: 17px;">&#8594;</span></a></p>
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
            </article>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="bottom">
                <div id="nativobelow"></div>
                <?php   
                    if (is_mobile() || is_tablet() ) {
                        echo "<div id='mobile-leaderboard-two'></div>";
                        dynamic_sidebar('recruit'); 
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