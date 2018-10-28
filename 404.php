<?php
  if (function_exists('get_header')) {
    get_header();
  } else {
    die();
  }
?>
<div class="full-wrap">
<section>
<div class="single main contain-all">
   <div class="left-rail">
      <div id="mobile-leaderboard"></div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article class="post">
         <h2><?php the_title(); ?></h2>
         <div style="clear: both;"></div>
         <?php the_content(); ?> 
      </article>
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, there\'s nothing here. Go back <a href="/">home</a>.'); ?></p>
      <?php endif; ?>
      <?php	
         if (is_mobile() || is_tablet()) {
         echo "<div id='mobile-leaderboard-two'></div>";
         dynamic_sidebar('forum teaser');
         dynamic_sidebar('latest');
         }
         ?>
      <div class="post comments">
         <?php comments_template(''); ?>
         <?php dynamic_sidebar('double ad'); ?>
      </div>
   </div>
   <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>


