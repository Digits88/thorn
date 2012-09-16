/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {
    $(window).load(function() {

        // page attributes
        var windowWidth = 0;
        var taskForceHoverEnabled = false;

        // set some events
        $('#taskForceContainer .panelBlack').on('mouseover touchstart', function() {
            if(taskForceHoverEnabled) {
                updateTaskForceHeight(true);
            }
        });
        
        $('#taskForceContainer .panelBlack').on('mouseout touchend', function() {
            if(taskForceHoverEnabled) {
                updateTaskForceHeight();
            }
        });

        $(window).on('resize', function() {
            checkWidthForMobileNavbar();
        });
        
        $('#graphContainer').on('mousemove', function(evt) {
            
//            var container = $('#graphContainer');
//            var containerOffset = $('#graphContainer').offset();
//            
//            console.dir(container);
//            
//            var offsetX = evt.pageX - containerOffset.left;
//            var offsetY = evt.pageY - containerOffset.top;
//            
//            var originalStyle = (1024 * offsetX / container[0].offsetWidth) + '%' + (250 * offsetY / container[0].offsetHeight) + '%';
//            
//            container[0].style.webkitPerspectiveOrigin = originalStyle;


//            var container = $('#graphContainer'),
//                containerOffset = container.offset();
//            
//            var offsetX = evt.pageX - containerOffset.left;
//            var offsetY = evt.pageY - containerOffset.top;
//            
//            console.log('x:' + offsetX + ' y: ' + offsetY);
//            
//            container.css({
//                '-webkit-perspective-origin' : '50% 50% 50%',
//                '-webkit-tranform-style' : 'preserve-3d',
//                '-webkit-transform' : 'perspective(0) translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotate3d(0, 1, 0, '+-(offsetX/8)+'deg)'
//            });

            var img1 = $('.graphBG'),
                img2 = $('.graphRed'),
                img3 = $('.graphLightGrey'),
                img4 = $('.graphDarkGrey'),
                container = $('#graphContainer');
                
            var left = evt.clientX - (container[0].offsetWidth/2),
                top = evt.clientY - (container[0].offsetHeight/2);
                
            container.css({
                '-webkit-transform' : 'rotateY(' + Math.floor(Math.abs((evt.clientX - (container[0].offsetWidth / 2))/15)) + 'deg)'
            });
 
            img1.css({
                'left': -1 * ((left)/4) + 'px',
                'top' : -1 * ((top)/4) + 'px'
            });
            
            img2.css({
                'left': -1 * ((left)/3.5) + 'px',
                'top' : -1 * ((top)/3.5) + 'px'
            });
            
            img3.css({
                'left': -1 * ((left)/3) + 'px',
                'top' : -1 * ((top)/3) + 'px'
            });
            
            img4.css({
                'left': -1 * ((left)/2.5) + 'px',
                'top' : -1 * ((top)/2.5) + 'px'
            });
            
        });

        // helpers
        var init = function() {
            checkWidthForMobileNavbar();
        };

        var checkWidthForMobileNavbar = function() {
            updateWindowWidth();
            if(parseInt(windowWidth) <= 450) {
                // for each item in the navbar - make it twelve colums wide
                $('#navContainer dd').each(function() {
                    $(this).addClass('twelve');
                });

                $('#navContainer').addClass('stacked');
                
                updateTaskForceHeight(true);
                taskForceHoverEnabled = false;
            } else {
                $('#navContainer dd').each(function() {
                    $(this).removeClass('twelve');
                });

                $('#navContainer').removeClass('stacked');
                updateTaskForceHeight();
                taskForceHoverEnabled = true;
            }
        };
        
        var updateTaskForceHeight = function(shouldExpand) {
            shouldExpand || false;
            
            if(shouldExpand) {
                $('#taskForceContainer .panelBlack').removeClass('minimized').addClass('expanded');
            } else {
                $('#taskForceContainer .panelBlack').removeClass('expanded').addClass('minimized');
            }
        };

        var updateWindowWidth = function() {
            windowWidth = $(window).width();
        };

        // do some stuff
        init();

    });
})(jQuery);