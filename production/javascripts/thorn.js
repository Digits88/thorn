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