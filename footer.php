<?php if ( is_single()) {  ?>
	<div class="fixed-foot">
		<div class="contain-all">
			<ul>
				<li><a class="bubble" href="<?php the_permalink(); ?>#disqus_thread">&nbsp;</a></li>
				<li class="previous"><a href="#"><?php previous_post_link('&#8592; %link'); ?> </a></li>
				<li class="next"><a href="#"><?php next_post_link('%link &#8594;'); ?></a></li>
				<li class="twitter"><a href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>&via=insidethehall" rel="nofollow" target="_blank"><span style="padding-top: 2px; padding-left: 1px;" class="genericon genericon-twitter"></span></a></li>
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
			</ul>		
	</footer>
<?php wp_footer(); ?>

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
		
	</script>

<?php if ( is_page_template('player.php')) {  ?>

	<script>
	
		var photos = document.getElementById("photo-click");
			
		photos.onclick = function(event) {
			event.preventDefault();
			var holder = document.getElementById("holder");
			var perma = document.querySelector(".click");
			holder.style.display = "block";
			perma.style.display = "none";
		}
		
	</script>

<?php } ?>



</body>
</html>
