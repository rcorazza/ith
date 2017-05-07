
// yardbarker 728 x 90 variables, banner ad -- this is a longer script that's split into two pieces (that's the only way it would work)

var yTop = $("<script type='text/javascript'>\nvar googletag = googletag || {};\ngoogletag.cmd = googletag.cmd || [];\n(function() {\nvar gads = document.createElement('script');\ngads.async = true;\ngads.type = 'text/javascript';\nvar useSSL = 'https:' == document.location.protocol;\ngads.src = (useSSL ? 'https:' : 'http:') + \n'//www.googletagservices.com/tag/js/gpt.js';\nvar node = document.getElementsByTagName('script')[0];\nnode.parentNode.insertBefore(gads, node);\n})();\n</script>");
var yBottom = $("<script type='text/javascript'>\n    googletag.cmd.push(function() {\n      googletag.defineSlot('/8484/yb/insidethehall', [728, 90],'div-gpt-ad-insidethehall-72890')\n        .addService(googletag.pubads());\n      googletag.enableServices();\n      googletag.display('div-gpt-ad-insidethehall-72890');\n  });\n  </script>\n"); 

// yardbarker 300 x 600 variables, first/top sidebar ad -- (again, this is just how it works for the YB tags, three of them this time)

var ySix = $("<script type='text/javascript'>\nvar googletag = googletag || {};\ngoogletag.cmd = googletag.cmd || [];\n(function() {\nvar gads = document.createElement('script');\ngads.async = true;\ngads.type = 'text/javascript';\nvar useSSL = 'https:' == document.location.protocol;\ngads.src = (useSSL ? 'https:' : 'http:') + \n'//www.googletagservices.com/tag/js/gpt.js';\nvar node = document.getElementsByTagName('script')[0];\nnode.parentNode.insertBefore(gads, node);\n})();\n</script>");
var yThree = $("<script type='text/javascript'>\n    googletag.cmd.push(function() {\n      googletag.defineSlot('/8484/yb/insidethehall', [[300, 250], [300, 600]],'div-gpt-ad-insidethehall-300600')\n        .addService(googletag.pubads());\n      googletag.enableServices();\n      googletag.display('div-gpt-ad-insidethehall-300600');\n  });\n  </script>");
var ySixThree =  $("<script type='text/javascript'>\nvar googletag = googletag || {};\ngoogletag.cmd = googletag.cmd || [];\n(function() {\nvar gads = document.createElement('script');\ngads.async = true;\ngads.type = 'text/javascript';\nvar useSSL = 'https:' == document.location.protocol;\ngads.src = (useSSL ? 'https:' : 'http:') + \n'//www.googletagservices.com/tag/js/gpt.js';\nvar node = document.getElementsByTagName('script')[0];\nnode.parentNode.insertBefore(gads, node);\n})();\n</script>");

// yarbarker 300 x 250 variable, second sidebar ad, only one variable here 

var yLast = $("<script type='text/javascript'>\n    googletag.cmd.push(function() {\n      googletag.defineSlot('/8484/yb/insidethehall', [300, 250],'div-gpt-ad-insidethehall-300250')\n        .addService(googletag.pubads());\n      googletag.enableServices();\n      googletag.display('div-gpt-ad-insidethehall-300250');\n  });\n  </script>");

// nativo ad variables

// in-stream ad on the left (desktop and mobile versions)

var leftD = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=330052&u=pabozich&width=300&height=250"></sc'+'ript>';
var leftM = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=403821&u=pabozich&width=300&height=250"></sc'+'ript>';


// in-stream ad on the right (desktop and mobile versions)

var rightD = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=131889&u=pabozich&width=300&height=250"></sc'+'ript>';
var rightM = '<scr'+'ipt type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=131888&u=pabozich&width=300&height=250"></sc'+'ript>';

export default function fireAds() {

	if ($(window).width() >= 728) {
		    
	    // yarbarker 728 x 90 and 300 x 600, and 300 x 250 only run at viewports 728 pixels and larger 
		
		$(yTop).appendTo('#div-gpt-ad-insidethehall-72890');
		$(yBottom).appendTo('#div-gpt-ad-insidethehall-72890');	
		$(ySix).appendTo('#div-gpt-ad-insidethehall-300600');
		$(yThree).appendTo('#div-gpt-ad-insidethehall-300600');
		$(ySixThree).appendTo('#div-gpt-ad-insidethehall-300600');
		$(yLast).appendTo('#div-gpt-ad-insidethehall-300250');
	}	

	/// ???

	 if (!$("html").hasClass("ie8") && !$("html").hasClass("ie9"))  {

	 var width = window.innerWidth || document.documentElement.clientWidth;

	 // in-stream left iframe creation and script write 

	 var iframe = document.createElement('iframe');
	 var ad = document.getElementById('stream-one');
     ad.appendChild(iframe);
     
        
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      if (width > 768) {
      doc.write(leftD);
      }
      else {
      doc.write(leftM);
      }
      doc.close();


     // in-stream right iframe creation and script write  

     var iframe = document.createElement('iframe');
	 var ad = document.getElementById('stream-two');
     ad.appendChild(iframe);
      
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
     if (width > 768) {
      doc.write(rightD);
      }
      else {
      doc.write(rightM);
      }
      doc.close();    
	}

}
