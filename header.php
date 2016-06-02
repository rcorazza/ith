<!DOCTYPE html>
<!--[if IE 9 ]>   
<html class="ie9" lang="en">
   <![endif]-->
   <!--[if lte IE 8 ]>   
   <html class="ie8" lang="en">
      <![endif]-->
      <!--[if !(IE)]><!--> 
      <html <?php language_attributes(); ?>>
         <!--<![endif]-->
         <head>
            <?php include('head-info.php'); ?>
         </head>
         <body <?php body_class(); ?>>
            <header>
               <div class="contain-all">
                  <ul class="logo">
                     <li><a href="/"><img width="13px" src="/wp-content/themes/priller/assets/img/state.jpg">Inside The Hall</a></li>
                  	<li class="svg-mobile"><a href="/"><img src="/wp-content/themes/priller/assets/img/svg/logo-svg-mobile.svg"></a></li -->
                  </ul>
                  <nav class="main">
                     <ul>
                        <li><a href="http://forum.insidethehall.com/forums/3-Inside-the-Hall-Premium-Basketball-Forum">Forum</a></li>
                        <li><a href="/2015-2016-indiana-basketball-schedule/">Schedule</a></li>
                        <li><a href="/2015-2016-indiana-basketball-roster/">Roster</a></li>
                        <li><a href="/2016-indiana-basketball-recruiting-board/">'16 <span class="board">Recruiting Board</span></a></li>
                        <li><a href="/2017-indiana-basketball-recruiting-board/">'17 <span class="board">Recruiting Board</span></a></li>
                        <li><a href="/category/recruiting/">Recruiting</a></li>
                        <li><a href="/indiana-scholarship-numbers/">Scholarships</a></li>
                        <li><a href="/iubb/">#iubb</a></li>
                        <li><a href="/future-indiana-basketball-schedules/">Future Schedules</a></li>
                        <li><a href="/archives">Archives</a></li>
                        <li><a class="search" href="#"><span>Search</span> <span class="glyphicons search"></span></a></li>
                        <li><a class="open" href="#"><span></span><span></span><span></span></a></li>
                     </ul>
                  </nav>
               </div>
            </header>
            <div class="contain-all buffer">
               <div class="hang">
                  <a href="/">
                  <img width="130px" src="/wp-content/themes/priller/assets/img/ith-logo.jpg">
                  </a>
               </div>
               <?php get_search_form(); ?>
               <?php get_template_part('nav'); ?>
               <div id="header-ad">
               </div>
            </div>