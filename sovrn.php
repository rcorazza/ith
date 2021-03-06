<?php /* Template Name: Sovrn Page */ get_header(); ?>
<section class="single main contain-all">
    <section class="left-rail">
        <div class="inner">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post">
                <h2><?php the_title(); ?></h2>
                <div style="clear: both;"></div>
                <?php the_content(); ?> 
            </article>
            <?php endwhile; else: ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <div class="bottom">
                <div id="nativobelow"></div>
            </div>
            <div class="post comments">
				<div class="OUTBRAIN" data-src="" data-widget-id="TF_1" data-ob-template="InsideTheHall"></div>
				<script type="text/javascript" async="async" src="http://widgets.outbrain.com/outbrain.js"></script> 
            </div>
            <?php dynamic_sidebar('double ad'); ?>
        </div>
    </section>
    <?php get_sidebar('sovrn'); ?>
</section>
<?php get_footer(); ?>