<aside class="right-rail">
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
            }
            if (is_page_template('recruit.php') && !is_mobile() && !is_tablet() ) {
            dynamic_sidebar('recruit');  
            }
            if (is_page_template('roster.php') && !is_mobile() && !is_tablet() ) {
             dynamic_sidebar('roster');
            }
            if (is_page_template('schedule.php') && !is_mobile() && !is_tablet() ) {
            dynamic_sidebar('schedule');
            } 
            if (is_single('') && !is_mobile() && !is_tablet() ) {
            dynamic_sidebar('forum teaser');
            }
            if (is_search('') && !is_mobile() && !is_tablet() ) {
            dynamic_sidebar('forum teaser');
            }
            if (is_page('') && !is_mobile() && !is_tablet() && !is_page_template('schedule.php') && !is_page_template('player.php') && !is_page_template('recruit.php') && !is_page_template('schedule.php') && !is_page_template('roster.php')) {
            dynamic_sidebar('forum teaser');
            }
            if (is_404()&& !is_mobile() && !is_tablet() ) {
            dynamic_sidebar('forum teaser');
            } 
            else {
             }
             ?>
        <?php 
            if (!is_home('') &&  !is_mobile() && !is_tablet()) {
            dynamic_sidebar('latest');
            echo '<div class="rpwe-block new" style="clear: both;"><ul><div id="nativoRR"></div></ul></div>';
            }	
            ?>		
        <div id="top-ad">
        </div>
        <div id="bottom-ad">
        </div>
        <div id="adsense">
            <img style="max-width: 100%;" src="http://www.insidethehall.com/wp-content/uploads/2015/07/badge_300.png">
        </div>
        <div id="left-sidebar-ad">
        </div>
        <div id="right-sidebar-ad">
        </div>
    </div>
</section>