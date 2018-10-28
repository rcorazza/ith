<?php /* Template Name: Cat-Tag */ get_header(); ?>
<section class="single main archives contain-all">
   <section class="left-rail">
      <div class="inner">
         <div id="mobile-leaderboard"></div>
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
         <article class="post">
            <h2><?php the_title(); ?></h2>
            <div class="post archive wrap">
               <h2>Posts by Category</h2>
               <?php drop_cats(); ?>
               <h2>Posts by Tag</h2>
               <?php drop_tags(); ?>
               <h2 class="date">Posts By Date</h2>
            </div>
            <div style="clear: both;"></div>
            <?php the_content(); ?> 
         </article>
         <?php endwhile; else: ?>
         <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
         <?php endif; ?>
         <div class="bottom">
            <div id="nativobelow"></div>
            <?php	
               if (is_mobile() || is_tablet() ) {
                  echo "<div id='mobile-leaderboard-two'></div>";
               	dynamic_sidebar('forum teaser'); 
               	dynamic_sidebar('latest');
               }
               else {
               
               }	
               ?>
         </div>
         <div class="post comments">
            <?php comments_template(''); ?>
         </div>
         <?php dynamic_sidebar('double ad'); ?>
      </div>
   </section>
   <?php get_sidebar(); ?>
</section>
<?php get_footer(); ?>
