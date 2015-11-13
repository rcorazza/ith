<div class="share-before share-filled share-small">
	 <div style="float: left;" class="facebook sharrre">        
	 	<div class="like box" data-url="<?php the_permalink();?>">
	 	<a class="share" onClick="_gaq.push([\'_trackEvent\', \'Shares\', \'Facebook\', \'Like\']);" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>">Like</a></div>
	 </div>
	
	
	<div style="float: left;" class="twitter sharrre">
			<div class="tweet box" data-url="<?php the_permalink();?>"><a class="share" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8'));?>&via=insidethehall" onClick="_gaq.push([\'_trackEvent\', \'Shares\', \'Facebook\', \'Tweet\']);">Tweet</a></div>
	      </div>
	
	
	</div>