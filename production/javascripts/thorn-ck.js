/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */(function(e){e(window).load(function(){var t=0,n=!1;e("#taskForceContainer .panelBlack").on("mouseover touchstart",function(){n&&s(!0)});e("#taskForceContainer .panelBlack").on("mouseout touchend",function(){n&&s()});e(window).on("resize",function(){i()});e("#graphContainer").on("mousemove",function(t){var n=e(".graphBG"),r=e(".graphRed"),i=e(".graphLightGrey"),s=e(".graphDarkGrey"),o=e("#graphContainer"),u=t.clientX-o[0].offsetWidth/2,a=t.clientY-o[0].offsetHeight/2;o.css({"-webkit-transform":"rotateY("+Math.floor(Math.abs((t.clientX-o[0].offsetWidth/2)/15))+"deg)"});n.css({left:-1*(u/4)+"px",top:-1*(a/4)+"px"});r.css({left:-1*(u/3.5)+"px",top:-1*(a/3.5)+"px"});i.css({left:-1*(u/3)+"px",top:-1*(a/3)+"px"});s.css({left:-1*(u/2.5)+"px",top:-1*(a/2.5)+"px"})});var r=function(){i()},i=function(){o();if(parseInt(t)<=450){e("#navContainer dd").each(function(){e(this).addClass("twelve")});e("#navContainer").addClass("stacked");s(!0);n=!1}else{e("#navContainer dd").each(function(){e(this).removeClass("twelve")});e("#navContainer").removeClass("stacked");s();n=!0}},s=function(t){t||!1;t?e("#taskForceContainer .panelBlack").removeClass("minimized").addClass("expanded"):e("#taskForceContainer .panelBlack").removeClass("expanded").addClass("minimized")},o=function(){t=e(window).width()};r()})})(jQuery);