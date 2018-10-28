<?php if ( is_single()) {  ?>
<div class="fixed-foot">
   <div class="contain-all">
      <ul>
         <li><a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
         <li class="previous"><?php previous_post_link('%link'); ?> </li>
         <li class="next"><?php next_post_link('%link'); ?></li>
         <li class="twitter"><a class="tweetable" data-user="insidethehall" data-message="<?php echo urlencode(the_title()); ?>" href="#" rel="nofollow" target="_blank"><?php include('wp-content/themes/priller/assets/img/svg/twitter.php'); ?>Tweet</a></li>
         <li class="facebook"><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><?php include('wp-content/themes/priller/assets/img/svg/facebook.php'); ?>Share</a></li>
      </ul>
   </div>
</div>
<div id="share-block">
  <ul>
    <li><a class="tweetable" data-user="insidethehall" data-message="<?php echo urlencode(the_title()); ?>" href="#" rel="nofollow" target="_blank"><?php include('wp-content/themes/priller/assets/img/svg/twitter.php'); ?><span>Share to Twitter</span></a></li>
    <li><a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><?php include('wp-content/themes/priller/assets/img/svg/facebook.php'); ?><span>Share to Facebook</span></a></li>
  </ul>
</div>    
<?php } ?>
<nav class="foot-nav">
  <ul>
    <li><a href="/"><?php include('wp-content/themes/priller/assets/img/svg/home-foot.php'); ?><span>Home</span></a></li>
    <li><a href="//forum.insidethehall.com/forums/3-Inside-the-Hall-Premium-Basketball-Forum"><?php include('wp-content/themes/priller/assets/img/svg/forum-foot.php'); ?><span>Forum</span></a></li>
    <li><a href="/2017-2018-indiana-basketball-schedule/"><?php include('wp-content/themes/priller/assets/img/svg/schedule-foot.php'); ?><span>Schedule</span></a></li>
    <li><a class="disqus" href="<?php the_permalink(); ?>#disqus_thread"></a></li>
    <li><a href="#"><?php include('wp-content/themes/priller/assets/img/svg/share.php'); ?><span>Share</span></a></li>
    <li><a href="#"><?php include('wp-content/themes/priller/assets/img/svg/menu-foot.php'); ?><span>Menu</span></a></li>
  </ul> 
</nav>
<footer>
   <div class="contain-all">
      <ul>
         <li><a href="/about-us/">About</a></li>
         <li><a href="/contact/">Contact</a></li>
         <li><a href="/advertise-on-inside-the-hall/">Advertise</a></li>
         <li><a href="/indiana-basketball-resources/">Resources</a></li>
         <li><a href="/inside-the-hall-privacy-policy/">Privacy Policy</a></li>
         <li><a href="https://facebook.com/insidethehall" target="_blank">Facebook</a></li>
         <li><a href="https://twitter.com/insidethehall" target="_blank">Twitter</a></li>
         <li><a href="https://www.youtube.com/user/insidethehallvideo" target="_blank">YouTube</a></li>
      </ul>
   </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.min.js"></script>      
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.min.js"></script>

<!-- Sovrn AdBlock Unlock -->
<script src="https://robot.qs8xxdwt.us" async></script>

<!-- Quantcast Tag, part 2 -->
<script type="text/javascript">
   _qevents.push( { qacct:"p-a3g2Mplggde4A"} );
</script>
<noscript>
   <div style="display: none;">
      <img src="https://pixel.quantserve.com/pixel/p-test123.gif" height="1" width="1" alt="Quantcast"/>
   </div>
</noscript>
<script type="text/javascript">
if ( $(window).width() > 1024) {
var script = document.createElement('script');
script.src = '//tags.us.onscroll.com/4db0fd84-3394-4194-a899-93a499becd03/tag.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('body')[0].appendChild(script);
}
</script>
<?php if ( is_single()) {  ?>
<script async="true" src="//a.teads.tv/page/44713/tag"></script>
<?php } ?>
<?php if ( is_home()) {  ?>
<script type="text/javascript" class="teads" async="true" src="//a.teads.tv/page/56743/tag"></script>
<?php } ?>
</body>
</html>