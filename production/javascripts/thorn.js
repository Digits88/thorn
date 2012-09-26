(function($) {
    $(window).load(function() {
/* -----------------------------------------------------------------------------
 *                              Page Attributes
 * ---------------------------------------------------------------------------*/

        var windowWidth = 0;
        var taskForceHoverEnabled = false;
        var graphActive, graphActiveSelector;
        var facebookSocialOn;
        var newsletterInteraction;

/* -----------------------------------------------------------------------------
 *                              Events
 * ---------------------------------------------------------------------------*/

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
        
        $('#graphSelectorContainer li a').on('click mouseover', function(evt) {
            
            evt.preventDefault();
            
            if(typeof graphActive != "undefined") {
                graphActive.removeClass('graphActive');
            }
            
            if(typeof graphActiveSelector != "undefined") {
                graphActiveSelector.removeClass('graphActiveSelector');
            }
            
            $(this).addClass('graphActiveSelector');
            
            var id = $(this).attr('href');
            graphActive = $(id);
            graphActive.addClass('graphActive');
            
        });
        

/* -----------------------------------------------------------------------------
 *                              Helpers
 * ---------------------------------------------------------------------------*/

        var init = function() {
            checkWidthForMobileNavbar();
            
            var facebookButton = new socialButton();
            facebookButton.init('.facebook', '#facebook');

            var twitterButton = new socialButton();
            twitterButton.init('.twitter', '#twitter');
            
            var emailButton = new socialButton();
            emailButton.init('.email', '#email');
            
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
        
/* -----------------------------------------------------------------------------
 *                              Classes
 * ---------------------------------------------------------------------------*/
        
        var socialButton = function() {
            
            var _button, _popup, _socialOn;
            
            this.init = function(button, popup) {
                _button = $(button);
                _popup = $(popup);
                
                _button.on('mouseover touchstart touchend', function(evt) {
                    evt.preventDefault();

                    _socialOn = true;

                    _popup.show();
                });
                
                _button.on('mouseout', function(evt) {
                    evt.preventDefault();

                    socialHide();

                });
                
                _popup.on('mouseover touchstart touchend', function(evt) {
                    evt.preventDefault();

                    _socialOn = true;
                });
                
                _popup.on('mouseout', function(evt) {
                    evt.preventDefault();

                    socialHide();
                });
            };
            
            var socialHide = function() {
                _socialOn = false;

                setTimeout(function() {
                    if(_socialOn) {
                        // do nothing
                    } else {
                        _popup.hide();
                    }
                }, 500);
            };
            
        }; // end socialButton
        
        
        
        
/* -----------------------------------------------------------------------------
 *                              Initialize
 * ---------------------------------------------------------------------------*/

        init();
        
        

    });
})(jQuery);