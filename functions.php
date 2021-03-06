<?php

function afn_customize_excerpt_more( $more ) {
    return ' ...';
}
add_filter('excerpt_more', 'afn_customize_excerpt_more');

function wpdocs_custom_excerpt_length( $length ) {
   return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


add_theme_support( 'post-thumbnails' ); 


register_sidebar( array(
		'name' => 'top content',
		'id' => 'home_right_3',
		'before_widget' => '<div id="%1$s" class="widget top_content"><div class="snap">',
		'after_widget' => '</div></div></div></div>',
		'before_title' => '<span class="glyphicons retweet"></span><h2>',
		'after_title' => '</h2><div class="for-scroll"><div class="inner-scroll">',
	) );
	
register_sidebar( array(
	'name' => 'top story',
	'id' => 'top_story',
	'before_widget' => '<div id="top-story" class="top-story %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
) );	

register_sidebar( array(
	'name' => 'forum teaser',
	'id' => 'forum_tease',
	'before_widget' => '<div id="forum-tease" class="forum-tease widget %2$s"><div class="snap">',
	'after_widget' => '</div></div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
) );		
	
register_sidebar( array(
		'name' => 'double ad',
		'id' => 'double_ad',
		'before_widget' => '<div id="double-ad" class="widget %2$s"><div class="snap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );	
	
register_sidebar( array(
		'name' => 'latest',
		'id' => 'home_right_5',
		'before_widget' => '<div id="%1$s" class="widget latest %2$s"><div class="snap">',
		'after_widget' => '</div></div></div></div>',
		'before_title' => '<span class="glyphicons refresh"></span><h2>',
		'after_title' => '</h2><div class="for-scroll"><div class="inner-scroll">',
	) );	
	
register_sidebar( array(
		'name' => 'Roster',
		'id' => 'roster',
		'before_widget' => '<div id="roster" class="widget %2$s"><div class="snap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
register_sidebar( array(
		'name' => 'Schedule',
		'id' => 'schedule',
		'before_widget' => '<div id="schedule" class="widget schedule"><div class="snap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );		
	register_sidebar( array(
		'name' => 'Recruit',
		'id' => 'recruit',
		'before_widget' => '<div id="recruit" class="widget %2$s"><div class="snap">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );	
	
	register_sidebar( array(
		'name' => 'underground',
		'id' => 'ugp',
		'before_widget' => '<div id="%1$s" class="underground">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
add_filter('the_time', 'dynamictime');

function dynamictime() {

  global $post;

  $date = $post->post_date;

  $time = get_post_time('G', true, $post);

  $mytime = time() - $time;

  if($mytime > 0 && $mytime < 24*60*60)

    $mytimestamp = sprintf(__('%s ago'), human_time_diff($time));

  else

    $mytimestamp = date(get_option('date_format'), strtotime($date));

  return $mytimestamp;

}

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

add_filter( 'the_content', 'img_p_class_content_filter' ,20);

function img_p_class_content_filter($content) {
    // assuming you have created a page/post entitled 'debug'
    $content = preg_replace("/(<p)(>[^<]*<img[^>]+>[^<]*)(<\/p>)/i", "\$1 class='content-img-wrap'\$2\$3", $content);

    return $content;
}

// Override the calculated image sizes
add_filter( 'wp_calculate_image_sizes', '__return_false',  PHP_INT_MAX );

// Override the calculated image sources
add_filter( 'wp_calculate_image_srcset', '__return_false', PHP_INT_MAX );

// Remove the reponsive stuff from the content
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

function drop_tags()
{
    echo "<select onChange=\"document.location.href=this.options[this.selectedIndex].value;\">";
    echo "<option value='-1'>Select tag</option>\n";
    foreach (get_tags() as $tag)
    {
        echo "<option value=\"";
        echo get_tag_link($tag->term_id);
        echo "\">".$tag->name."</option>\n";
    }
    echo "</select>";
}

function drop_cats()
{
    echo "<select onChange=\"document.location.href=this.options[this.selectedIndex].value;\">";
    echo "<option value='-1'>Select category</option>\n";
    foreach (get_categories() as $cat)
    {
        echo "<option value=\"";
        echo get_category_link($cat->term_id);
        echo "\">".$cat->name."</option>\n";
    }
    echo "</select>";
}

if (!is_admin()) add_action("wp_enqueue_scripts", "my_script_enqueue", 11);

 
function my_script_enqueue() {
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, '1.9.1', true);
		//wp_enqueue_script('js');
		//wp_enqueue_script('my_script_head', get_bloginfo('template_url') . '/assets/js/headroom.js', array('jquery'), '1.0', true);
		wp_enqueue_script('jquery');
		wp_enqueue_script('my_script_jquery', get_bloginfo('template_url') . '/assets/js/bundle.js', array('jquery'), '1.0', true);
	}
}
add_action('parse_query', 'my_script_enqueue');

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}?>