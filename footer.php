<?php if ( is_single()) {  ?>
<div class="fixed-foot">
   <div class="contain-all">
      <ul>
         <li><a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
         <li class="previous"><?php previous_post_link('%link'); ?> </li>
         <li class="next"><?php next_post_link('%link'); ?></li>
         <li class="twitter"><a class="tweetable" data-user="insidethehall" data-message="<?php echo urlencode(the_title()); ?>" href="#" rel="nofollow" target="_blank"><?php include('wp-content/themes/priller/assets/img/svg/twitter.php'); ?>Tweet</a></li>
         <li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><?php include('wp-content/themes/priller/assets/img/svg/facebook.php'); ?>Share</a></li>
      </ul>
   </div>
</div>
<div id="share-block">
	<ul>
		<li><a class="tweetable" data-user="insidethehall" data-message="<?php echo urlencode(the_title()); ?>" href="#" rel="nofollow" target="_blank"><?php include('wp-content/themes/priller/assets/img/svg/twitter.php'); ?><span>Share to Twitter</span></a></li>
		<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><?php include('wp-content/themes/priller/assets/img/svg/facebook.php'); ?><span>Share to Facebook</span></a></li>
	</ul>
</div>		
<?php } ?>
<nav class="foot-nav">
	<ul>
		<li><a href="/"><?php include('wp-content/themes/priller/assets/img/svg/home-foot.php'); ?><span>Home</span></a></li>
		<li><a href="http://forum.insidethehall.com/forums/3-Inside-the-Hall-Premium-Basketball-Forum"><?php include('wp-content/themes/priller/assets/img/svg/forum-foot.php'); ?><span>Forum</span></a></li>
		<li><a href="/2015-2016-indiana-basketball-schedule/"><?php include('wp-content/themes/priller/assets/img/svg/schedule-foot.php'); ?><span>Schedule</span></a></li>
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
         <li><a href="http://shop.undergroundshirts.com/collections/indiana/products/inside-the-hall-t-cardinal-red">Shop</a></li>
         <li><a href="/indiana-basketball-resources/">Resources</a></li>
         <li><a href="/inside-the-hall-privacy-policy/">Privacy Policy</a></li>
         <li><a href="http://facebook.com/insidethehall" target="_blank">Facebook</a></li>
         <li><a href="http://twitter.com/insidethehall" target="_blank">Twitter</a></li>
         <li><a href="https://www.youtube.com/user/insidethehallvideo" target="_blank">YouTube</a></li>
      </ul>
   </div>
</footer>
<?php wp_footer(); ?>
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/headroom.min.js"></script>      
<script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/headroom/0.7.0/jQuery.headroom.min.js"></script>
<!-- Quantcast Tag, part 2 -->
<script type="text/javascript">
   _qevents.push( { qacct:"p-a3g2Mplggde4A"} );
</script>
<noscript>
   <div style="display: none;">
      <img src="http://pixel.quantserve.com/pixel/p-test123.gif" height="1" width="1" alt="Quantcast"/>
   </div>
</noscript>
<!-- Begin comScore Tag -->
<script>
   var _comscore = _comscore || [];
   _comscore.push({ c1: "2", c2: "6035208" });
   (function() {
   var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
   s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
   el.parentNode.insertBefore(s, el);
   })();
</script>
<noscript>
   <img src="http://b.scorecardresearch.com/p?c1=2&c2=6035208&cv=2.0&cj=1" />
</noscript>
<script type="text/javascript">
if ( $(window).width() > 1024) {
var script = document.createElement('script');
script.src = '//tags.us.onscroll.com/4db0fd84-3394-4194-a899-93a499becd03/tag.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('body')[0].appendChild(script);
}
</script>
<!-- End comScore Tag -->
<?php if ( is_single()) {  ?>
<script async="true" src="//a.teads.tv/page/44713/tag"></script>
<?php } ?>
<?php if ( is_home()) {  ?>
<script type="text/javascript">
window._ttf = window._ttf || [];
_ttf.push({
      pid          : 61794
      ,lang        : "en"
      ,slot        : ".contain-all.main"
      ,minSlot     : 1
      ,before      : true
      ,format      : "inboard"
      ,css         : "margin: 20px auto; max-width: 728px;"
});
(function (d) {
       var js, s = d.getElementsByTagName('script')[0];
       js = d.createElement('script');
       js.async = true;
       js.src = '//cdn.teads.tv/media/format.js';
       s.parentNode.insertBefore(js, s);
})(window.document);
</script>
<?php } ?>
</body>
</html>