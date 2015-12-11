	<section class="right-rail">
		<div class="inner">
			<?php 
				
				if (is_home('') && !is_mobile() && !is_tablet() ) {
				 dynamic_sidebar('top content');
				}	
				if (is_archive('') && !is_mobile() && !is_tablet() ) {
				 dynamic_sidebar('top content');
				}	
				if (is_page_template('player.php')&& !is_mobile() && !is_tablet() ) {
				 dynamic_sidebar('roster'); 
				 dynamic_sidebar('latest');
				  
				}
				if (is_page_template('recruit.php') && !is_mobile() && !is_tablet() ) {
				dynamic_sidebar('recruit');  
				dynamic_sidebar('latest');
				
				}
				if (is_page_template('roster.php') && !is_mobile() && !is_tablet() ) {
				 dynamic_sidebar('roster');
				 dynamic_sidebar('latest');
		
				}
				if (is_page_template('schedule.php') && !is_mobile() && !is_tablet() ) {
				dynamic_sidebar('schedule');
				dynamic_sidebar('latest');
				} 
				if (is_single('') && !is_mobile() && !is_tablet() ) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				
				}
				
				if (is_search('') && !is_mobile() && !is_tablet() ) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				
				}
				
				if (is_page('') && !is_mobile() && !is_tablet() && !is_page_template('schedule.php') && !is_page_template('player.php') && !is_page_template('recruit.php') && !is_page_template('schedule.php') && !is_page_template('roster.php')) {
				dynamic_sidebar('forum teaser');
				dynamic_sidebar('latest');
				
				}
				
				if (is_404()&& !is_mobile() && !is_tablet() ) {
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
				<img src="/wp-content/themes/stemler/assets/img/sidebar-long.jpg">
			</div>
		</div>
	</section>	
