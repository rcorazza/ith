<?php if ( is_single()) {  ?>
	<div class="fixed-foot">
		<div class="contain-all">
			<ul>
				<li><a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
				<li class="previous"><a href="#"><?php previous_post_link('&#8592; %link'); ?> </a></li>
				<li class="next"><a href="#"><?php next_post_link('%link &#8594;'); ?></a></li>
				<li class="twitter"><a class="tweetable" data-user="insidethehall" data-message="<?php echo urlencode(the_title()); ?>" href="#" rel="nofollow" target="_blank"><span style="padding-top: 2px; padding-left: 1px;" class="genericon genericon-twitter"></span></a></li>
				<li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>"><span style="padding-left: -2px; padding-top: 1px;" class="genericon genericon-facebook-alt"></span></a></li>
			</ul>	
		</div>
	</div>
<?php } ?>


	<footer>
		<div class="contain-all">
			<ul>
				<li><a href="/about-us/">About</a></li>
				<li><a href="/contact/">Contact</a></li>
				<li><a href="/advertise-on-inside-the-hall/">Advertise</a></li>
				<li><a href="/inside-the-hall-privacy-policy/">Privacy Policy</a></li>
				<li><a href="http://facebook.com/insidethehall" target="_blank">Facebook</a></li>
				<li><a href="http://twitter.com/insidethehall" target="_blank">Twitter</a></li>
			</ul>	
			<div style="clear: both; float: right; margin-bottom: 20px;" id="footer-ad">
			<!--[if (lte IE 8) | (IE9) ]>  					
<script type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=283639&u=pabozich&width=728&height=90"></script>
<![endif]-->
<img src="/wp-content/themes/stemler/assets/img/banner_ad.png">
			</div>	
		</div>		
	</footer>
<?php wp_footer(); ?>
 <script  type="text/javascript"  src="https://rawgithub.com/WickyNilliams/headroom.js/master/dist/headroom.js"></script>      
   <script  type="text/javascript"  src="https://rawgithub.com/WickyNilliams/headroom.js/master/src/jQuery.headroom.js"></script>
	<script>
	
		var mag = document.querySelector("nav ul li a.search");
			
		mag.onclick = function(event) {
			event.preventDefault();
			var form = document.querySelector(".search-form");
			var respond = document.querySelector(".responsive");
			form.classList.toggle('show');
			if (respond.classList.contains("open")) {
				respond.classList.toggle('open');
			}  
		}
		
		var opener = document.querySelector("nav ul li a.open");
			
		opener.onclick = function(event) {
			event.preventDefault();
			var respond = document.querySelector(".responsive");
			respond.classList.toggle('open');
			var form = document.querySelector(".search-form");
			if (form.classList.contains("show")) {
				form.classList.toggle('show');
			}  
		}
		
		<?php if ( is_page_template('player.php')) {  ?>

	
		var photos = document.getElementById("photo-click");
			
		photos.onclick = function(event) {
			event.preventDefault();
			var holder = document.getElementById("holder");
			var perma = document.querySelector(".click");
			holder.style.display = "block";
			perma.style.display = "none";
		}
		
	

<?php } ?>
		
	</script>


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
			<!-- End comScore Tag -->

<script type="text/javascript"> jQuery(document).ready(checkAds()); function checkAds(){if (document.getElementById('adsense')!=undefined){document.write("<script>_gaq.push(['_trackEvent', 'Adblock', 'Unblocked', 'false',,true]);</sc" + "ript>");}else{document.write("<script>_gaq.push(['_trackEvent', 'Adblock', 'Blocked', 'true',,true]);</sc" + "ript>");}} </script>	
		
</body>
</html>
