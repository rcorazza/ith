<?php

// Include the class (unless you are using the script as a plugin)
 require_once( 'wp-less/wp-less.php' );

// enqueue a .less style sheet
if ( !is_admin() )
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.less' );

// you can also use .less files as mce editor style sheets
add_editor_style( 'editor-style.less' );

wp_enqueue_style( 'less-style', get_stylesheet_directory_uri() . '/style.less' );


add_theme_support( 'post-thumbnails' ); 

register_sidebar( array(
		'name' => 'top content',
		'id' => 'home_right_3',
		'before_widget' => '<span style="margin-top: 4px;" class="glyphicons retweet"></span><div id="%1$s" class="top_content">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	
register_sidebar( array(
		'name' => 'forum teaser',
		'id' => 'forum_tease',
		'before_widget' => '<span style="margin-top: 4px;" class="glyphicons conversation"></span> <div id="forum-tease" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );	
	
register_sidebar( array(
		'name' => 'double ad',
		'id' => 'double_ad',
		'before_widget' => '<div id="double-ad" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );	
	
register_sidebar( array(
		'name' => 'latest',
		'id' => 'home_right_5',
		'before_widget' => '<div id="%1$s" class="widget %2$s"><span class="glyphicons refresh"></span>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );	
	
register_sidebar( array(
		'name' => 'Roster',
		'id' => 'roster',
		'before_widget' => '<div id="roster" class="widget %2$s"><span style="margin-top: -2px;" class="glyphicons notes_2"></span>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
register_sidebar( array(
		'name' => 'Schedule',
		'id' => 'schedule',
		'before_widget' => '<div id="schedule" class="widget schedule"><span style="margin-top: -3px;" class="glyphicons calendar"></span>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );		
	register_sidebar( array(
		'name' => 'Recruit',
		'id' => 'recruit',
		'before_widget' => '<div id="recruit" class="widget %2$s"><span class="glyphicons notes"></span>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );		

?>

