!function(i){function e(t){if(n[t])return n[t].exports;var l=n[t]={i:t,l:!1,exports:{}};return i[t].call(l.exports,l,l.exports,e),l.l=!0,l.exports}var n={};e.m=i,e.c=n,e.i=function(i){return i},e.d=function(i,n,t){e.o(i,n)||Object.defineProperty(i,n,{configurable:!1,enumerable:!0,get:t})},e.n=function(i){var n=i&&i.__esModule?function(){return i.default}:function(){return i};return e.d(n,"a",n),n},e.o=function(i,e){return Object.prototype.hasOwnProperty.call(i,e)},e.p="",e(e.s=1)}([function(i,e,n){"use strict";function t(){if(!$("html").hasClass("ie8")&&!$("html").hasClass("ie9")){var i=window.innerWidth||document.documentElement.clientWidth,e=document.createElement("iframe"),n=document.getElementById("head-ad");n.appendChild(e);var t=e.contentWindow||e.contentDocument;t.document&&(t=t.document),t.open(),i>768&&t.write(l),t.close();var e=document.createElement("iframe"),n=document.getElementById("side-one");n.appendChild(e);var t=e.contentWindow||e.contentDocument;t.document&&(t=t.document),t.open(),i>768&&t.write(c),t.close();var e=document.createElement("iframe"),n=document.getElementById("side-two");n.appendChild(e);var t=e.contentWindow||e.contentDocument;t.document&&(t=t.document),t.open(),i>768&&t.write(o),t.close();var e=document.createElement("iframe"),n=document.getElementById("stream-one");n.appendChild(e);var t=e.contentWindow||e.contentDocument;t.document&&(t=t.document),t.open(),i>768?t.write(d):t.write(a),t.close();var e=document.createElement("iframe"),n=document.getElementById("stream-two");n.appendChild(e);var t=e.contentWindow||e.contentDocument;if(t.document&&(t=t.document),t.open(),i>768?t.write(s):t.write(w),t.close(),i<=575){var e=document.createElement("iframe"),n=document.getElementById("mobile-leaderboard");n.appendChild(e);var t=e.contentWindow||e.contentDocument;t.document&&(t=t.document),t.open(),t.write(r),t.close();var e=document.createElement("iframe"),n=document.getElementById("mobile-leaderboard-two");n.appendChild(e);var t=e.contentWindow||e.contentDocument;t.document&&(t=t.document),t.open(),t.write(h),t.close()}}}e.a=t;var l='<script type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=488775&width=728&height=90"><\/script>',c='<script type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=489378&width=300&height=250"><\/script>',o='<script type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=489379&width=300&height=250"><\/script>',d='<script type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=330052&u=pabozich&width=300&height=250"><\/script>',a='<script type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=403821&u=pabozich&width=300&height=250"><\/script>',s='<script type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=131889&u=pabozich&width=300&height=250"><\/script>',w='<script type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=131888&u=pabozich&width=300&height=250"><\/script>',r='<script type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=248257&width=320&height=50"><\/script>',h='<script type="text/javascript" src="//ap.lijit.com/www/delivery/fpi.js?z=472314&width=320&height=50"><\/script>'},function(i,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var t=n(0);$(document).ready(function(){function i(){var i=$(this).data("user"),e=($(this).data("message")||$(this).text())+" "+window.location.href+(i?" via @"+$(this).data("user"):""),n=new Date,t="twitter://post?message="+encodeURIComponent(e);return window.location.href=t,setTimeout(function(){if(new Date-n>2500);else{var i="https://twitter.com/intent/tweet?text="+encodeURIComponent(e);window.open(i,"_blank")}},1250),!1}n.i(t.a)(),$(window).width()>763?$(".header-ad").attr("style","display: block !important"):$(".header-ad").attr("style","display: none !important"),$(window).width()>1024&&$('<ul><div id="nativoRR"></div></ul>').insertAfter(".top_content ul:first-child, .latest ul:first-child"),$(".single .fixed-footer a, .single .foot-nav ul li:nth-child(4)").on("click",function(i){i.preventDefault(),$("html, body").animate({scrollTop:$("#disqus_thread").offset().top-45},1e3)}),$("nav ul li").on("click","a.search",function(i){i.preventDefault(),$(".search-form").toggleClass("show"),$(".responsive").hasClass("open")&&$(".responsive").removeClass("open")}),$(".post").on("click","#photo-click",function(i){i.preventDefault(),$("#holder").css("display","block"),$(this).css("display","none")}),$("nav ul li").on("click","a.open",function(i){i.preventDefault(),$(".responsive").toggleClass("open"),$(window).width()<576&&$(".search-form").toggleClass("show"),$(window).width()>575&&$(".search-form").hasClass("show")&&$(".search-form").removeClass("show")}),$(".single .foot-nav ul li:nth-child(5)").on("click","a",function(i){i.preventDefault(),$("#share-block").toggleClass("reveal"),$(".responsive").hasClass("open")&&$(".responsive").removeClass("open"),$(".search-form").hasClass("show")&&$(".search-form").removeClass("show")}),$(".foot-nav ul").on("click","li:last-child",function(i){i.preventDefault(),$("#share-block").hasClass("reveal")&&$("#share-block").removeClass("reveal"),$(".responsive").toggleClass("open"),$(".search-form").toggleClass("show")}),$("html").hasClass("ie8")||$("header").headroom({offset:205,tolerance:5,classes:{initial:"animated",pinned:"slideDown",unpinned:"slideUp"}}),$("html").hasClass("ie8")&&$(".video-container iframe").each(function(){var i=$(this).attr("src");$(this).attr("src",i+"?wmode=transparent")}),$(".tweetable").on("click",i),$("#adsense").is(":visible")?ga("send","event","AdBlocker","false","adblockFalse"):ga("send","event","AdBlocker","true","adblockTrue"),$(".hang").on("click","img",function(){ga("send","event","link","click","main logo")}),$(".logo").on("click","li a",function(){$(window).width()<576?ga("send","event","link","click","secondary logo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","secondary logo tablet"):ga("send","event","link","click","secondary logo")}),$("header nav.main").on("click","ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","forum main mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","forum main tablet"):ga("send","event","link","click","forum main")}),$(".main").on("click","ul li:nth-child(2) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","schedule main tablet"):ga("send","event","link","click","schedule main")}),$(".main").on("click","ul li:nth-child(3) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","roster main tablet"):ga("send","event","link","click","roster main")}),$(".main").on("click","ul li:nth-child(4) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","16 board main tablet"):ga("send","event","link","click","16 board main")}),$(".main").on("click","ul li:nth-child(5) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","17 board main tablet"):ga("send","event","link","click","17 board main")}),$(".main").on("click","ul li:nth-child(6) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","recruiting main tablet"):ga("send","event","link","click","recruiting main")}),$(".main").on("click","ul li:nth-child(7) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","scholarships main tablet"):ga("send","event","link","click","scholarships main")}),$(".main").on("click","ul li:nth-child(8) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","iubb main tablet"):ga("send","event","link","click","iubb main")}),$(".main").on("click","ul li:nth-child(8) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","future schedules main tablet"):ga("send","event","link","click","future schedules main")}),$(".main").on("click","ul li:nth-child(8) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","arhives main tablet"):ga("send","event","link","click","archives main")}),$(".main").on("click","ul li:nth-child(10) a",function(){$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","search main tablet"):ga("send","event","link","click","search main")}),$(".main").on("click","ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","hamburger mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","hamburger tablet"):ga("send","event","link","click","hamburger")}),$(".buffer").on("click",".search-form",function(){$(window).width()<576?ga("send","event","link","click","search box mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","search box tablet"):ga("send","event","link","click","search box")}),$(".responsive").on("click","ul li:first-child a",function(){ga("send","event","link","click","forum secondary mobile")}),$(".responsive").on("click","ul li:nth-child(2) a",function(){ga("send","event","link","click","schedule secondary mobile")}),$(".responsive").on("click","ul li:nth-child(3) a",function(){ga("send","event","link","click","roster secondary mobile")}),$(".responsive").on("click","ul li:nth-child(4) a",function(){ga("send","event","link","click","16 board secondary mobile")}),$(".responsive").on("click","ul li:nth-child(5) a",function(){ga("send","event","link","click","17 board secondary mobile")}),$(".responsive").on("click","ul li:nth-child(6) a",function(){$(window).width()<576?ga("send","event","link","click","recruiting secondary mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","recruiting secondary tablet"):ga("send","event","link","click","recruiting secondary")}),$(".responsive").on("click","ul li:nth-child(7) a",function(){$(window).width()<576?ga("send","event","link","click","scholarships secondary mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","scholarships secondary tablet"):ga("send","event","link","click","scholarships secondary")}),$(".responsive").on("click","ul li:nth-child(8) a",function(){$(window).width()<576?ga("send","event","link","click","iubb secondary mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","iubb secondary tablet"):ga("send","event","link","click","iubb secondary")}),$(".responsive").on("click","ul li:nth-child(9) a",function(){$(window).width()<576?ga("send","event","link","click","future schedules secondary mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","future schedules tablet"):ga("send","event","link","click","future schedules secondary")}),$(".responsive").on("click","ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","archives secondary mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","archives secondary tablet"):ga("send","event","link","click","archives secondary")}),$(".forum-tease").on("click","p a:first-child",function(){$(window).width()<576?ga("send","event","link","click","forum tease first mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","forum tease first tablet"):ga("send","event","link","click","forum tease first")}),$(".forum-tease").on("click","p a:nth-child(2)",function(){$(window).width()<576?ga("send","event","link","click","forum tease second mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","forum tease second tablet"):ga("send","event","link","click","forum tease second")}),$(".forum-tease").on("click","p a:last-child",function(){$(window).width()<576?ga("send","event","link","click","forum tease third mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","forum tease third tablet"):ga("send","event","link","click","forum third tease")}),$(".forum-tease").on("click","p a.arrow",function(){$(window).width()<576?ga("send","event","link","click","forum tease join mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","forum tease join tablet"):ga("send","event","link","click","forum tease join")}),$(".forum-tease").on("click","h2 a",function(){$(window).width()<576?ga("send","event","link","click","forum tease header link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","forum tease header link tablet"):ga("send","event","link","click","forum tease header link")}),$(".post").on("click","a.bubble",function(){$(window).width()<576?ga("send","event","link","click","home page comments link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","home page comments link tablet"):ga("send","event","link","click","home page comments link")}),$(".top_content .snap").on("click","h2 + ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","trending first photo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","trending first photo tablet"):ga("send","event","link","click","trending first photo")}),$(".top_content .snap").on("click","h2 + ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","trending first link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","trending first link tablet"):ga("send","event","link","click","trending first link")}),$(".top_content .snap").on("click","h2 + ul + ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","trending second photo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","trending second photo tablet"):ga("send","event","link","click","trending second photo")}),$(".top_content .snap").on("click","h2 + ul + ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","trending second link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","trending second link tablet"):ga("send","event","link","click","trending second link")}),$(".top_content .snap").on("click","h2 + ul + ul + ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","trending third photo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","trending third photo tablet"):ga("send","event","link","click","trending third photo")}),$(".top_content .snap").on("click","h2 + ul + ul + ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","trending third link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","trending third link tablet"):ga("send","event","link","click","trending third link")}),$(".latest .snap").on("click","h2 + ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","latest first photo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","latest first photo tablet"):ga("send","event","link","click","latest first photo")}),$(".latest .snap").on("click","h2 + ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","latest first link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","latest first link tablet"):ga("send","event","link","click","latest first link")}),$(".latest .snap").on("click","h2 + ul + ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","latest second photo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","latest second photo tablet"):ga("send","event","link","click","latest second photo")}),$(".latest .snap").on("click","h2 + ul + ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","latest second link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","latest second link tablet"):ga("send","event","link","click","latest second link")}),$(".latest .snap").on("click","h2 + ul + ul + ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","latest third photo mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","latest third photo tablet"):ga("send","event","link","click","latest third photo")}),$(".latest .snap").on("click","h2 + ul + ul + ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","latest third link mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","latest third link tablet"):ga("send","event","link","click","latest third link")}),$(".fixed-foot").on("click",".previous a",function(){ga("send","event","link","click","fixed footer previous")}),$(".fixed-foot").on("click",".next a",function(){ga("send","event","link","click","fixed footer next")}),$(".fixed-foot").on("click",".facebook a",function(){$(window).width()<576?ga("send","event","link","click","facebook like share mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","facebook like share tablet"):ga("send","event","link","click","facebook like share")}),$(".fixed-foot").on("click",".twitter a",function(){$(window).width()<576?ga("send","event","link","click","twitter tweet share mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","twitter tweet share tablet"):ga("send","event","link","click","twitter tweet share")}),$(".fixed-foot").on("click","a.bubble",function(){$(window).width()<576?ga("send","event","link","click","fixed footer disqus bubble mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","fixed footer disqus bubble tablet"):ga("send","event","link","click","fixed footer disqus bubble share")}),$("footer").on("click","ul li:first-child a",function(){$(window).width()<576?ga("send","event","link","click","about mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","about tablet"):ga("send","event","link","click","about")}),$("footer").on("click","ul li:nth-child(2) a",function(){$(window).width()<576?ga("send","event","link","click","contact mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","contact tablet"):ga("send","event","link","click","contact")}),$("footer").on("click","ul li:nth-child(3) a",function(){$(window).width()<576?ga("send","event","link","click","advertise mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","advertise tablet"):ga("send","event","link","click","advertise")}),$("footer").on("click","ul li:nth-child(4) a",function(){$(window).width()<576?ga("send","event","link","click","shop mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","shop tablet"):ga("send","event","link","click","shop")}),$("footer").on("click","ul li:nth-child(5) a",function(){$(window).width()<576?ga("send","event","link","click","resources mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","resources tablet"):ga("send","event","link","click","resources")}),$("footer").on("click","ul li:nth-child(6) a",function(){$(window).width()<576?ga("send","event","link","click","privacy policy mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","privacy policy tablet"):ga("send","event","link","click","privacy policy")}),$("footer").on("click","ul li:nth-child(7) a",function(){$(window).width()<576?ga("send","event","link","click","facebook mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","facebook tablet"):ga("send","event","link","click","facebook")}),$("footer").on("click","ul li:nth-child(8) a",function(){$(window).width()<576?ga("send","event","link","click","twitter mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","twitter tablet"):ga("send","event","link","click","twitter")}),$("footer").on("click","ul li:last-child a",function(){$(window).width()<576?ga("send","event","link","click","youtube mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","youtube tablet"):ga("send","event","link","click","youtube")}),$(".underground").on("click","a",function(){$(window).width()<576?ga("send","event","link","click","ugp ad mobile"):$(window).width()>575&&$(window).width()<850?ga("send","event","link","click","ugp ad tablet"):ga("send","event","link","click","ugp ad")})})}]);