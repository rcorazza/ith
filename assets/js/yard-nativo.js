
// sovrn 728 x 90 variable for desktop leaderboard

var sTop = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=488775&width=728&height=90"></sc'+'ript>';

// sovrn 300 x 250 variables, first/top sidebar ad and second/bottom sidebar

var firstSide = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=489378&width=300&height=250"></sc'+'ript>';
var secondSide = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=489379&width=300&height=250"></sc'+'ript>';


// sovrn ad variables

// in-stream ad on the left (desktop and mobile versions)

var leftD = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=330052&width=300&height=250"></sc'+'ript>';
var leftM = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=403821&width=300&height=250"></sc'+'ript>';


// in-stream ad on the right (desktop and mobile versions)

var rightD = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=131889&width=300&height=250"></sc'+'ript>';
var rightM = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=131888&width=300&height=250"></sc'+'ript>';

// mobile only sovrn ads, leaderboards

//var topM = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=453201&width=300&height=250"></sc'+'ript>';
var leadM = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=248257&width=320&height=50"></sc'+'ript>';
var leadMS = '<scr'+'ipt type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=472314&width=320&height=50"></sc'+'ript>';


export default function fireAds() {
    

	// ???

	 if (!$("html").hasClass("ie8") && !$("html").hasClass("ie9"))  {

	 var width = window.innerWidth || document.documentElement.clientWidth;


    // desktop leaderboard sovrn

    
     var iframe = document.createElement('iframe');
     var ad = document.getElementById('head-ad');
     ad.appendChild(iframe);
     
     
        
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      if (width > 768) {
      doc.write(sTop);
      }
      else {
      }
      doc.close();


    // sidebar ads   



     var iframe = document.createElement('iframe');
     var ad = document.getElementById('side-one');
     ad.appendChild(iframe);
     
     
        
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      if (width > 768) {
      doc.write(firstSide);
      }
      else {
      }
      doc.close();


     var iframe = document.createElement('iframe');
     var ad = document.getElementById('side-two');
     ad.appendChild(iframe);
     
     
        
      // get a handle on the <iframe>d document (in a cross-browser way)
      var doc = iframe.contentWindow || iframe.contentDocument;
      if (doc.document) {
        doc = doc.document;
      }

      // open, write content to, and close the document
      doc.open();
      if (width > 768) {
      doc.write(secondSide);
      }
      else {
      }
      doc.close();

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


        // sovrn mobile leaderboards, only fires on mobile 

        if (width <= 575) {  

        var iframe = document.createElement('iframe');
        var ad = document.getElementById('mobile-leaderboard');
        ad.appendChild(iframe);
        
        // get a handle on the <iframe>d document (in a cross-browser way)
        var doc = iframe.contentWindow || iframe.contentDocument;
        if (doc.document) {
          doc = doc.document;
        }

        // open, write content to, and close the document
        doc.open();
        doc.write(leadM);
        doc.close(); 

        var iframe = document.createElement('iframe');
        var ad = document.getElementById('mobile-leaderboard-two');

        if (ad) {
            ad.appendChild(iframe);
          
          
          // get a handle on the <iframe>d document (in a cross-browser way)
          var doc = iframe.contentWindow || iframe.contentDocument;
          if (doc.document) {
            doc = doc.document;
           }

          // open, write content to, and close the document
          doc.open();
           doc.write(leadMS);
           doc.close();
        }
      }
	}

}
