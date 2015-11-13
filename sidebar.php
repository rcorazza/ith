	<div class="right-rail">
	
			<?php 
				
				if (is_home('') ) {
				 dynamic_sidebar('top content');
				}	
				if (is_archive('') ) {
				 dynamic_sidebar('top content');
				}	
				if (is_page_template('player.php') ) {
				 dynamic_sidebar('roster'); 
				 dynamic_sidebar('latest');
				  
				}
				if (is_page_template('recruit.php') ) {
				dynamic_sidebar('recruit');  
				dynamic_sidebar('latest');
				
				}
				if (is_page_template('roster.php') ) {
				 dynamic_sidebar('roster');
				 dynamic_sidebar('latest');
		
				}
				if (is_page_template('schedule.php') ) {
				dynamic_sidebar('schedule');
				dynamic_sidebar('latest');
				} 
				if (is_single('') ) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				
				}
				
				if (is_search('') ) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				
				}
				
				if (is_page('') && !is_page_template('schedule.php') && !is_page_template('player.php') && !is_page_template('recruit.php') && !is_page_template('schedule.php') && !is_page_template('roster.php')) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				
				}
				
				if (is_404()) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				} 
				
			
				else {
				
				
				 }
		  	?>
				
			<div>
				<img src="/wp-content/themes/stemler/assets/img/sidebar-first.jpg">
			</div>	
			
			<div>
				<img src="/wp-content/themes/stemler/assets/img/sidebar-first.jpg">
			</div>	
			
			<div>
				<img src="http://www.insidethehall.com/wp-content/uploads/2015/07/badge_300.png">
			</div>	
			
			<div>
				<img src="/wp-content/themes/stemler/assets/img/sidebar-long.jpg">
			</div>
	</div>
