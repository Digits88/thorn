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
        
        if(typeof $.ui != "undefined") {
            $('#accordion').accordion({
                event: 'click hoverintent',
                header: 'h4',
                active: false
            });
        }
        
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
            
//            var ashton = new directorInteraction('.ashton', 221);
//            var demi = new directorInteraction('.demi', 275);
//            var ray = new directorInteraction('.ray', 217);
            
        };

        var checkWidthForMobileNavbar = function() {
            updateWindowWidth();
            
            if(parseInt(windowWidth) <= 1024 && parseInt(windowWidth) > 480) {
                centerLogo();
                repositionNavTablet();
            } else if(parseInt(windowWidth) <= 480) {
                // for each item in the navbar - make it twelve colums wide
                $('#navContainer dd').each(function() {
                    $(this).addClass('twelve');
                });

                $('#navContainer').addClass('stacked');
                
                updateTaskForceHeight(true);
                taskForceHoverEnabled = false;
                
                centerLogo();
                repositionNavPhone();
                
            } else {
                $('#navContainer dd').each(function() {
                    $(this).removeClass('twelve');
                });

                $('#navContainer').removeClass('stacked');
                updateTaskForceHeight();
                taskForceHoverEnabled = true;
                
                leftAlignLogo();
                repositionNavDesktop();
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
        
        var centerLogo = function() {
            $('#logoContainer h2').css({
                'text-align' : 'center'
            });
        };
        
        var leftAlignLogo = function() {
            $('#logoContainer h2').css({
                'text-align' : 'left'
            });
        };
        
        var repositionNavTablet = function() {
            console.log('nav tablet mode')
            
            var tempNav = $('#navContainer');
            
            $('#navContainer').remove();
            
            $('.container .row .twelve > .four').prepend(tempNav);
        };
        
        var repositionNavPhone = function() {
            
            console.log('nav phone mode')
            
            var tempNav = $('#navContainer');
            
            $('#navContainer').remove();
            
            $('.container .row .twelve > .six').prepend(tempNav);
        };
        
        var repositionNavDesktop = function() {
            console.log('nav desktop mode')
            
            var tempNav = $('#navContainer');
            
            $('#navContainer').remove();
            
            $('.container .row .twelve > .six').prepend(tempNav);
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
                    socialCheckOthersHidden();
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
            
            var socialCheckOthersHidden = function() {
                $('.socialPopUp').each(function(index) {
                    console.log($(this).attr('id'));
                    var str = _popup.attr('id');
                    console.log(str);
                    if($(this).attr('id') != str) {
                        $(this).hide();
                    }
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
        
        var directorInteraction = function(className, sectionHeight) {
            var _section = $(className), 
                _heading = $(className + ' h4'),
                _details = $(className + ' p'),
                _height = sectionHeight;
                
            var on = false;
            
            this.init = function() {
                _section.on('touchstart', function(evt) {
                    console.dir(evt);
                    on = true;
                    showDetails();
                });

                _section.hover(function(evt) {
                    console.dir(evt);
                    on = true;
                    showDetails();
                }, function(evt) {
//                    on = false;
                    hideDetails();
                });
               
            };
            
            var showDetails = function() {
                
                // slightly delay this event so it doesnt get weird
                setTimeout(function() {
                    if(on) {
                        _details.animate({
                            'height' : _height - 14 + 'px',
                            'opacity' : 1
                        }, 500, function() {
                            // end
                            if(!on) {
                                hideDetails();
                            }
                        });

//                        setTimeout(function() {
//                            if(!on) {
//                                hideDetails();
//                            }
//                        }, 800);
                    }

                }, 300);
            };
            
            var hideDetails = function() {
                // fade out
                _details.animate({
                    'opacity' : 0,
                    'height' : 0 + 'px'
                }, 500, function() {
                    // end
                    on = false;
                });
                    
            };
            
            this.init();
        }; // end directorInteraction
        
/* -----------------------------------------------------------------------------
 *                              Initialize
 * ---------------------------------------------------------------------------*/

        init();
        
    });
})(jQuery);