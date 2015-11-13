<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<link href='http://fonts.googleapis.com/css?family=Vollkorn|Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link href='/wp-content/themes/stemler/assets/css/genericons.css' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<header>
			<div class="contain-all">
					<ul class="logo">
						<li><a href="/"><img width="13px" src="/wp-content/themes/stemler/assets/img/state.jpg">Inside The Hall</a></li>
					</ul>
				<nav class="main">
					<ul>
						<li><a href="http://forum.insidethehall.com/forums/3-Inside-the-Hall-Premium-Basketball-Forum">Forum</a></li>
						<li><a href="/2015-2016-indiana-basketball-schedule/">Schedule</a></li>
						<li><a href="/2015-2016-indiana-basketball-roster/">Roster</a></li>
						<li><a href="/2016-indiana-basketball-recruiting-board/">'16</a></li>
						<li><a href="/2017-indiana-basketball-recruiting-board/">'17</a></li>
						<li><a href="/category/recruiting/">Recruiting</a></li>
						<li><a href="/indiana-scholarship-numbers/">Scholarships</a></li>
						<li><a href="/iubb/">#iubb</a></li>
						<li><a href="/future-indiana-basketball-schedules/">Future Schedules</a></li>
						<li><a href="/archives">Archives</a></li>
						<li><a class="search" href="#"><span>Search</span> <span class="glyphicons search"></span></a></li>
						<li><a class="open" href="#"><span></span><span></span><span></span></a></li>
					</ul>
				</nav>
				<?php get_search_form(); ?>
				<?php get_template_part('nav'); ?>
			</div>			
		</header>
		
		<div class="contain-all buffer">
			<div class="hang">
				<a href="/">
					<img width="130px" src="/wp-content/themes/stemler/assets/img/ith-logo.jpg">
				</a>
			</div>
			<div id="header-ad">
				<img src="/wp-content/themes/stemler/assets/img/banner_ad.png">
			</div>
		</div>
