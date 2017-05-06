<aside class="right-rail">
    <div class="inner">	
    	<?php 
            if (!is_mobile() && !is_tablet() && is_single() || !is_mobile() && !is_tablet() && is_archive() || !is_mobile() && !is_tablet() && is_page() || !is_mobile() && !is_tablet() && is_search()) {
          //  echo '<div class="rpwe-block new" style="clear: both;"><ul><div id="nativoRR"></div></ul></div>';
            }	
            ?>
        <?php 
            if (is_home('') && !is_mobile() && !is_tablet() ) {
             dynamic_sidebar('top content');
            }		
            if (is_page_template('recruit.php') && !is_mobile() && !is_tablet() ) {
            dynamic_sidebar('recruit');  
            } 
            else {
             }
             ?>
        <?php 
            if (!is_home('') &&  !is_mobile() && !is_tablet()) {
            dynamic_sidebar('latest');
            }	
            ?>	
        <div id="div-gpt-ad-insidethehall-300600"></div>
        <div id="adsense">
            <a href="http://www.foxsports.com" target="_blank"><img style="max-width: 100%;" src="http://www.insidethehall.com/wp-content/uploads/2015/07/badge_300.png"></a>
        </div>
        <div id="div-gpt-ad-insidethehall-300250"></div>
        <div id="OnScroll - 388843 - 300x600(S)"></div>
    </div>
</aside>