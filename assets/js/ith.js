
$(document).ready(function(){
 
 $(".single .fixed-footer a, .single .foot-nav ul li:nth-child(4)").on('click', function(e) {
	e.preventDefault();
    $('html, body').animate({
        scrollTop: $("#disqus_thread").offset().top - 45
    }, 1000);
});

$('nav ul li').on('click', 'a.search', function(e) {
	e.preventDefault()
	$('.search-form').toggleClass('show');
	if ($('.responsive').hasClass('open')) {
		$('.responsive').removeClass('open');
	}
	});
	
	$('.post').on('click', '#photo-click', function(e) {
	e.preventDefault();
	$('#holder').css('display', 'block');
	$(this).css('display', 'none');
	});

$('nav ul li').on('click', 'a.open', function(e) {
	e.preventDefault()
	$('.responsive').toggleClass('open');
	if ($(window).width() < 576) {
	  $('.search-form').toggleClass('show');
	}
	if ($(window).width() > 575 && $('.search-form').hasClass('show')) {
		$('.search-form').removeClass('show');
	}
	});	
	
	$('.single .foot-nav ul li:nth-child(5)').on('click', 'a', function(e) {
	e.preventDefault();
	$('#share-block').toggleClass('reveal');
	if ($('.responsive').hasClass('open')) {
		$('.responsive').removeClass('open');
	}
	if ($('.search-form').hasClass('show')) {
		$('.search-form').removeClass('show');
	}
	
	});	
	
	$('.foot-nav ul').on('click', 'li:last-child', function(e) {
	e.preventDefault();
	if ($('#share-block').hasClass('reveal')) {
		$('#share-block').removeClass('reveal');
	}
	$('.responsive').toggleClass('open');
    $('.search-form').toggleClass('show');
	
	});	
	
if (!$("html").hasClass("ie8")) {

$("header").headroom({
  "offset": 205,
  "tolerance": 5,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});

}

if ($("html").hasClass("ie8")) {

$('.video-container iframe').each(function(){
        var url = $(this).attr("src");
        $(this).attr("src",url+"?wmode=transparent");
    });

}

 function doCallback() {
    var user = $(this).data('user');
    var text = "" + ($(this).data('message') || $(this).text()) + " " + window.location.href + (user ? " via @" + $(this).data('user') : '');
    var original_start = new Date();
    var lag = 1250;

    var deeplink_url = "twitter://post?message=" + encodeURIComponent(text);
    window.location.href = deeplink_url;
    //fb://post/%s 
    setTimeout(function() {
      var time_spent_waiting = (new Date() - original_start);
      if (time_spent_waiting > (2.0 * lag)) {
        // We can assume they have the app, so do nothing.
      } else {
        // That was too fast so we can assume they don't have the app.
        var intent_url = "https://twitter.com/intent/tweet?text=" + encodeURIComponent(text);
        window.open(intent_url, "_blank");
      }
    }, lag);
    return false;
  }

   
  $(".tweetable").on("click", doCallback);
  
  if (!$("html").hasClass("ie8") && !$("html").hasClass("ie9"))  {
    
	 var iframe = document.createElement('iframe');
	  var ad = document.getElementById('header-ad');
     ad.appendChild(iframe);
	
      var val = '<scr' + 'ipt src=\"https:\/\/www.googletagservices.com\/tag\/js\/gpt.js\">    googletag.pubads().definePassback(\"\/20893548\/yb\/insidethehall\", [728,90]).setClickUrl(\"%%CLICK_URL_UNESC%%\").display();\r\n<\/script>';
	
      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      var width = window.innerWidth || document.documentElement.clientWidth;
	if (width >= 728) {
      doc.write(val);
      }
      else {
      
      }
      doc.close();
	  
	 var iframe = document.createElement('iframe');
	 var ad = document.getElementById('top-ad');
     ad.appendChild(iframe);

          

     var valm = '<script type=\"text\/javascript\" src=\"http:\/\/ap.lijit.com\/www\/delivery\/fpi.js?z=214471&u=pabozich&width=300&height=250\"><\/script>';

     
      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
	  
	  var iframe = document.createElement('iframe');
	 var ad = document.getElementById('bottom-ad');
     ad.appendChild(iframe);

          
     var valm = '<scr' + 'ipt src=\"https:\/\/www.googletagservices.com\/tag\/js\/gpt.js\">    googletag.pubads().definePassback(\"\/20893548\/yb\/insidethehall\", [300,250]).setClickUrl(\"%%CLICK_URL_UNESC%%\").display();\r\n<\/script>';
     

      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
	  
	   
       var iframe = document.createElement('iframe');
	 var ad = document.getElementById('left-sidebar-ad');
     ad.appendChild(iframe);

   
     var valm = '<scr' + 'ipt src=\"https:\/\/www.googletagservices.com\/tag\/js\/gpt.js\">    googletag.pubads().definePassback(\"\/20893548\/yb\/insidethehall\", [160,600]).setClickUrl(\"%%CLICK_URL_UNESC%%\").display();\r\n<\/script>';
     
     
     
   
      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
      
        var iframe = document.createElement('iframe');
	 var ad = document.getElementById('right-sidebar-ad');
     ad.appendChild(iframe);

          
     var valm = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=283638&u=pabozich&width=160&height=600"></sc'+'ript>';
     
	 // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
	  
	  
	    	 var iframe = document.createElement('iframe');
	 var ad = document.getElementById('stream-one');
     ad.appendChild(iframe);

          

     var valm = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=330052&u=pabozich&width=300&height=250"></sc'+'ript>';

     
   
      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
      
      var iframe = document.createElement('iframe');
	 var ad = document.getElementById('stream-two');
     ad.appendChild(iframe);

          
     var valm = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=131889&u=pabozich&width=300&height=250"></sc'+'ript>';
    
      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
     
	   // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();
      
       var iframe = document.createElement('iframe');
	 var ad = document.getElementById('footer-ad');
     ad.appendChild(iframe);

          

     //var valm = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=283639&u=pabozich&width=728&height=90"></sc'+'ript>';
      var valm = '<script type=\"text\/javascript\" src=\"http:\/\/ap.lijit.com\/www\/delivery\/fpi.js?z=331644&u=pabozich&width=970&height=250\"><\/script>';

      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      doc.write(valm);
      doc.close();

}

$('.hang').on('click', 'img', function() {
	 ga('send', 'event', 'link', 'click', 'main logo');
});

$('.logo').on('click', 'li a', function() {
	if ($(window).width() < 576) {
	   ga('send', 'event', 'link', 'click', 'secondary logo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'secondary logo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'secondary logo');
	}	
});

$('header nav.main').on('click', 'ul li:first-child a', function() {
	if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'forum main mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'forum main tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'forum main');
	}	
});

$('.main').on('click', 'ul li:nth-child(2) a', function() {

 if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'schedule main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'schedule main');
	}	
});

$('.main').on('click', 'ul li:nth-child(3) a', function() {
	 if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'roster main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'roster main');
	}
});

$('.main').on('click', 'ul li:nth-child(4) a', function() {
	  if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', '16 board main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', '16 board main');
	}
});

$('.main').on('click', 'ul li:nth-child(5) a', function() {
	 if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', '17 board main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', '17 board main');
	}
});

$('.main').on('click', 'ul li:nth-child(6) a', function() {
	 if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'recruiting main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'recruiting main');
	}
});

$('.main').on('click', 'ul li:nth-child(7) a', function() {
	  if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'scholarships main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'scholarships main');
	}
});

$('.main').on('click', 'ul li:nth-child(8) a', function() {
	  if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'iubb main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'iubb main');
	}
});

$('.main').on('click', 'ul li:nth-child(8) a', function() {
	  if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'future schedules main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'future schedules main');
	}
});

$('.main').on('click', 'ul li:nth-child(8) a', function() {
	 if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'arhives main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'archives main');
	}
});

$('.main').on('click', 'ul li:nth-child(10) a', function() {
	if ($(window).width() > 575 && $(window).width() < 850) {
		  ga('send', 'event', 'link', 'click', 'search main tablet');
	}
	
	else {
		 ga('send', 'event', 'link', 'click', 'search main');
	}
});

$('.main').on('click', 'ul li:last-child a', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'hamburger mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'hamburger tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'hamburger');
	}	
});

$('.buffer').on('click', '.search-form', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'search box mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'search box tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'search box');
	}	
});

$('.responsive').on('click', 'ul li:first-child a', function() {
	 ga('send', 'event', 'link', 'click', 'forum secondary mobile');
});

$('.responsive').on('click', 'ul li:nth-child(2) a', function() {
	 ga('send', 'event', 'link', 'click', 'schedule secondary mobile');
});

$('.responsive').on('click', 'ul li:nth-child(3) a', function() {
	 ga('send', 'event', 'link', 'click', 'roster secondary mobile');
});

$('.responsive').on('click', 'ul li:nth-child(4) a', function() {
	 ga('send', 'event', 'link', 'click', '16 board secondary mobile');
});

$('.responsive').on('click', 'ul li:nth-child(5) a', function() {
	 ga('send', 'event', 'link', 'click', '17 board secondary mobile');
});

$('.responsive').on('click', 'ul li:nth-child(6) a', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'recruiting secondary mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'recruiting secondary tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'recruiting secondary');
	}	
});

$('.responsive').on('click', 'ul li:nth-child(7) a', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'scholarships secondary mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'scholarships secondary tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'scholarships secondary');
	}	
});

$('.responsive').on('click', 'ul li:nth-child(8) a', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'iubb secondary mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'iubb secondary tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'iubb secondary');
	}	
});

$('.responsive').on('click', 'ul li:nth-child(9) a', function() {
	 	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'future schedules secondary mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'future schedules tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'future schedules secondary');
	}	
});

$('.responsive').on('click', 'ul li:last-child a', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'archives secondary mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'archives secondary tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'archives secondary');
	}	
});

$('.forum-tease').on('click', 'p a:first-child', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'forum tease first mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'forum tease first tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'forum tease first');
	}	
});

$('.forum-tease').on('click', 'p a:nth-child(2)', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'forum tease second mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'forum tease second tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'forum tease second');
	}
});

$('.forum-tease').on('click', 'p a:last-child', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'forum tease third mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'forum tease third tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'forum third tease');
	}
});

$('.forum-tease').on('click', 'p a.arrow', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'forum tease join mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'forum tease join tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'forum tease join');
	}
});

$('.forum-tease').on('click', 'h2 a', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'forum tease header link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'forum tease header link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'forum tease header link');
	}
});

$('.post').on('click', 'a.bubble', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'home page comments link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'home page comments link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'home page comments link');
	}
});

$('.top_content .snap').on('click', 'h2 + ul li:first-child a', function() {
	 if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'trending first photo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'trending first photo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'trending first photo');
	}
});

$('.top_content .snap').on('click', 'h2 + ul li:last-child a', function() {
	   if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'trending first link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'trending first link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'trending first link');
	}
});

$('.top_content .snap').on('click', 'h2 + ul + ul li:first-child a', function() {
	if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'trending second photo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'trending second photo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'trending second photo');
	}
});

$('.top_content .snap').on('click', 'h2 + ul + ul li:last-child a', function() {
	    if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'trending second link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'trending second link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'trending second link');
	}
});

$('.top_content .snap').on('click', 'h2 + ul + ul + ul li:first-child a', function() {
	if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'trending third photo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'trending third photo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'trending third photo');
	}
});

$('.top_content .snap').on('click', 'h2 + ul + ul + ul li:last-child a', function() {
	     if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'trending third link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'trending third link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'trending third link');
	}
});

$('.latest .snap').on('click', 'h2 + ul li:first-child a', function() {
	    if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'latest first photo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'latest first photo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'latest first photo');
	}
});

$('.latest .snap').on('click', 'h2 + ul li:last-child a', function() {
	      if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'latest first link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'latest first link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'latest first link');
	}
});

$('.latest .snap').on('click', 'h2 + ul + ul li:first-child a', function() {
	     if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'latest second photo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'latest second photo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'latest second photo');
	}
});

$('.latest .snap').on('click', 'h2 + ul + ul li:last-child a', function() {
	        if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'latest second link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'latest second link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'latest second link');
	}
});

$('.latest .snap').on('click', 'h2 + ul + ul + ul li:first-child a', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'latest third photo mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'latest third photo tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'latest third photo');
	}
});

$('.latest .snap').on('click', 'h2 + ul + ul + ul li:last-child a', function() {
	 	        if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'latest third link mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		 ga('send', 'event', 'link', 'click', 'latest third link tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'latest third link');
	}
});

$('.fixed-foot').on('click', '.previous a', function() {
	 ga('send', 'event', 'link', 'click', 'fixed footer previous');
});

$('.fixed-foot').on('click', '.next a', function() {
	 ga('send', 'event', 'link', 'click', 'fixed footer next');
});

$('.fixed-foot').on('click', '.facebook a', function() {
	    if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'facebook like share mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'facebook like share tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'facebook like share');
	}
});

$('.fixed-foot').on('click', '.twitter a', function() {
	     if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'twitter tweet share mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'twitter tweet share tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'twitter tweet share');
	}
});

$('.fixed-foot').on('click', 'a.bubble', function() {
	     if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'fixed footer disqus bubble mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'fixed footer disqus bubble tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'fixed footer disqus bubble share');
	}
});


$('footer').on('click', 'ul li:first-child a', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'about mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'about tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'about');
	}
});

$('footer').on('click', 'ul li:nth-child(2) a', function() {
	   if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'contact mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'contact tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'contact');
	}
});

$('footer').on('click', 'ul li:nth-child(3) a', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'advertise mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'advertise tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'advertise');
	}
	
	});

$('footer').on('click', 'ul li:nth-child(4) a', function() {
	    if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'shop mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'shop tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'shop');
	}
});

$('footer').on('click', 'ul li:nth-child(5) a', function() {
	   if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'resources mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'resources tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'resources');
	}
});

$('footer').on('click', 'ul li:nth-child(6) a', function() {
	    if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'privacy policy mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'privacy policy tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'privacy policy');
	}
});

$('footer').on('click', 'ul li:nth-child(7) a', function() {
	   if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'facebook mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'facebook tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'facebook');
	}
});

$('footer').on('click', 'ul li:nth-child(8) a', function() {
	   if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'twitter mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'twitter tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'twitter');
	}
});

$('footer').on('click', 'ul li:last-child a', function() {
	  if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'youtube mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'youtube tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'youtube');
	}
});

$('.underground').on('click', 'a', function() {
	 	        if ($(window).width() < 576) {
	    ga('send', 'event', 'link', 'click', 'ugp ad mobile');
	}
	else if ($(window).width() > 575 && $(window).width() < 850) {
		ga('send', 'event', 'link', 'click', 'ugp ad tablet');
	}
	
	else {
		ga('send', 'event', 'link', 'click', 'ugp ad');
	}
	 
});


});
