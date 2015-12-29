<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="google-site-verification" content="lO9ajw1mlAMryN-MSW6cZk9CP3KUSUwLZ-mrhZBd7fw" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Vollkorn|Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
<link href='/wp-content/themes/priller/assets/css/main.css' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
<title>
   <?php // WordPress custom title script
      // is the current page a tag archive page?
      	if (function_exists('is_tag') && is_tag()) { 
      
      		// if so, display this custom title
      		echo 'Tag Archive for &quot;'.$tag.'&quot; - '; 
      
      	// or, is the page an archive page?
      	} elseif (is_archive()) { 
      
      		// if so, display this custom title
      		wp_title(''); echo ' Archive - '; 
      
      	// or, is the page a search page?
      	} elseif (is_search()) { 
      
      		// if so, display this custom title
      		echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
      
      	// or, is the page a single post or a literal page?
      	} elseif (!(is_404()) && (is_single()) || (is_page())) { 
      
      		// if so, display this custom title
      		wp_title(''); echo ' - '; 
      
      	// or, is the page an error page?
      	} elseif (is_404()) {
      
      		// yep, you guessed it
      		echo 'Not Found - '; 
      
      	}
      	// finally, display the blog name for all page types
      	bloginfo('name'); 
      
      	?>
</title>
<!-- Google Analytics -->
<script>
   window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
   ga('create', 'UA-2365335-1', 'auto');
   ga('send', 'pageview');
</script>
<script async src='//www.google-analytics.com/analytics.js'></script>
<!-- End Google Analytics -->
</script>
<!-- Quantcast Tag, part 1 --> 
<script type="text/javascript">
   var _qevents = _qevents || [];
   (function() {
    var elem = document.createElement('script');
    elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge")
                + ".quantserve.com/quant.js";
    elem.async = true;
    elem.type = "text/javascript";
    var scpt = document.getElementsByTagName('script')[0];
    scpt.parentNode.insertBefore(elem, scpt);  
   })();
</script>
<!-- Start DFP SETUP -->
<script type="text/javascript"><!--
   //<![CDATA[
   (function() {
   var useSSL = 'https:' == document.location.protocol;
   var src = (useSSL ? 'https:' : 'http:') + '//www.googletagservices.com/tag/js/gpt.js';
   document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
   })();
   //]]>
   //--></script>
<script type='text/javascript' src='http://img.bnqt.com/lib/js/sdpdfphelper.js'></script>
<script type="text/javascript">
   googletag.pubads().enableSyncRendering();
   googletag.pubads().setTargeting("title", sdpTargeting.title)
                     .setTargeting('targetPaths', sdpTargeting.targetPaths)
                     .setTargeting('fullPath', sdpTargeting.fullPath)
                     .setTargeting('queryStr', sdpTargeting.queryStr)
                     .setTargeting('domainName', sdpTargeting.domainName);       
</script>
<!-- DFP SETUP end -->
<script type="text/javascript" src="//s.ntv.io/serve/load.js" async></script>