(function($) {
    $(window).load(function() {
/* -----------------------------------------------------------------------------
 *                              Page Attributes
 * ---------------------------------------------------------------------------*/

        var windowWidth = 0;
        var pastWindowWidth;
        var taskForceHoverEnabled = false;
        var graphActive, graphActiveSelector;
        var facebookSocialOn;
        var newsletterInteraction;
        var ashton, demi, ray;
        var browserSupportsCSSTransitions = false;
        

/* -----------------------------------------------------------------------------
 *                              Events
 * ---------------------------------------------------------------------------*/

//        $('#taskForceContainer, #taskForceContainer .panelBlack').on('mouseover touchstart', function() {
//            if(taskForceHoverEnabled) {
//                updateTaskForceHeight(true);
//            }
//        });
//        
//        $('#taskForceContainer, #taskForceContainer .panelBlack').on('mouseout touchend', function() {
//            if(taskForceHoverEnabled) {
//                updateTaskForceHeight();
//            }
//        });
        
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
        
        $('#accordion h4').on('hoverintent touchstart', function(evt) {
            evt.preventDefault();
            var name = $(this).attr('class');
            
            var _p = $('p.' + name);
            
            if(_p.hasClass('expanded')) {
                // remove the class
            } else {
                _p.addClass('expanded');
            }
            
        });
        
/* -----------------------------------------------------------------------------
 *                              Helpers
 * ---------------------------------------------------------------------------*/

        var init = function() {
            
            browserSupportsCSSTransitions = checkBrowserSupportsCSSTransitions();
            
            var facebookButton = new socialButton();
            facebookButton.init('.facebook', '#facebook');

            var twitterButton = new socialButton();
            twitterButton.init('.twitter', '#twitter');
            
            var emailButton = new socialButton();
            emailButton.init('.email', '#email');
            
            ashton = new directorAccordion('#ashton');
            ashton.init();
            demi = new directorAccordion('#demi');
            demi.init();
            ray = new directorAccordion('#ray');
            ray.init();
            
//            retractAllDirectors();
            
            checkWidthForMobileNavbar();
            
            
        };
        
        var checkBrowserSupportsCSSTransitions = function() {
            
            var elm = document.getElementsByTagName('div')[0];
            
            var animation = false,
                animationstring = 'transition',
                keyframeprefix = '',
                domPrefixes = 'Webkit Moz O ms Khtml'.split(' '),
                pfx  = '';

            if( elm.style.animationName ) { animation = true; }    

            if( animation === false ) {
              for( var i = 0; i < domPrefixes.length; i++ ) {
                if( elm.style[ domPrefixes[i] + 'Transition' ] !== undefined ) {
                  pfx = domPrefixes[ i ];
                  animationstring = pfx + 'Transition';
                  keyframeprefix = '-' + pfx.toLowerCase() + '-';
                  animation = true;
                  break;
                }
              }
            }
            
            return animation;
            
        };

        var checkWidthForMobileNavbar = function() {
            updateWindowWidth();
            
            if(pastWindowWidth !== windowWidth) {
                if(parseInt(windowWidth) <= 1024 && parseInt(windowWidth) > 480) {
                    centerLogo();
                    repositionNavTablet();
    //                expandAllDirectors();

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

    //                expandAllDirectors();

                } else {
                    $('#navContainer dd').each(function() {
                        $(this).removeClass('twelve');
                    });

                    $('#navContainer').removeClass('stacked');
                    updateTaskForceHeight();
                    taskForceHoverEnabled = true;

                    leftAlignLogo();
                    repositionNavDesktop();

    //                retractAllDirectors();
                }
            }
            
        };
        
        var updateTaskForceHeight = function(shouldExpand) {
            shouldExpand || false;
            
            if(shouldExpand) {
                $('#taskForceContainer .panelBlack').removeClass('minimized').addClass('expanded');
                expandAllDirectors();
            } else {
                $('#taskForceContainer .panelBlack').removeClass('expanded').addClass('minimized');
                retractAllDirectors();
            }
        };

        var updateWindowWidth = function() {
            pastWindowWidth = windowWidth;
            windowWidth = $(window).width();
        };
        
        var centerLogo = function() {
            $('#logoContainer h2').css({
                'text-align' : 'center'
            });
            
            $('#logoContainer h2 img').attr({
                'src' : '../images/thorn_logo_small.png'
            });
        };
        
        var leftAlignLogo = function() {
            $('#logoContainer h2').css({
                'text-align' : 'left'
            });
            
            $('#logoContainer h2 img').attr({
                'src' : '../images/thorn_logo.png'
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
        
        var expandAllDirectors = function() {
            ashton.expand();
            demi.expand();
            ray.expand();
        }
        
        var retractAllDirectors = function() {
            ashton.retract();
            demi.retract();
            ray.retract();
        }
        
        
        
/* -----------------------------------------------------------------------------
 *                              Classes
 * ---------------------------------------------------------------------------*/
        
        var socialButton = function() {
            
            var _button, _popup, _socialOn;
            
            this.init = function(button, popup) {
                _button = $(button);
                _popup = $(popup);
                
                _button.on('mouseover touchstart touchend click', function(evt) {
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
//                    console.log($(this).attr('id'));
                    var str = _popup.attr('id');
//                    console.log(str);
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
        
        
        // directors
        var directorAccordion = function(container) {
            
            var _p,
                _h4,
                p,
                h4,
                expanded = true,
                height,
                director;
            
            this.init = function() {
                _p = $(container).find('p')[0];
                _h4 = $(container).find('h4')[0];
                p = $(_p);
                h4 = $(_h4);
                
                height = p.height();
                director = p.attr('class');
                
                initEvents();
                
                p.css({
                    display: 'none'
                });
            };
            
            // listen for hover intent on h4
            var initEvents = function() {
                
                h4.on('hoverintent touchstart', function(evt) {
                    
                    evt.preventDefault();
                    if(expanded) {
                        _retract();
                    } else {
                        _expand();
                    }
                });
                
                p.on('transitionend oTransitionEnd webkitTransitionEnd MSTransitionEnd', function(evt) {
                    
//                    console.dir(evt)
                    
                    // retracted
                    if(evt.originalEvent.propertyName === 'height' && expanded === false) {
                        
                        console.log('retracted')
                        
                        // we've hidden so remove the display property
                        p.css({
                            display: 'none'
                        });
                    }
                    
                    // expanded
                    if(evt.originalEvent.propertyName === 'opacity' && expanded === true) {
                        
                        console.log('expanded')
                        
                        
                    }
                    
                });
                
//                p.on('transitionend oTransitionEnd webkitTransitionEnd MSTransitionEnd', function(evt) {
//                    
//                    // fade in
//                    console.log('begin: ' + director + ' ' +expanded)
//                    
//                    if(expanded === true) {
//                        switch (evt.originalEvent.propertyName) {
//                            case 'opacity':
//                                p.css({
//                                    height: 0
//                                });
//                                console.log(director + ' setting height to zero but height is: ' + p.height());
//                                break;
//                            case 'height':
//                                p.css({
//                                    display: 'none'
//                                });
//                                expanded = false;
//                                console.log(director + ' setting display: ' + p.css('display') + '; and expanded is: ' + expanded );
//                                break;
//                            default:
//                                expanded = false;
//                                break;
//                        }
//                    } else {
//                        if(evt.originalEvent.propertyName === 'height') {
//                            p.css({
//                                opacity: 1
//                            });
//                            expanded = true;
//                            console.log(director + ' setting opacity 1')
//                        }
//                    }
//                    
//                    console.log('end: ' + director + ' ' +expanded)
//                });
//                
            };
            
            // expand
            var _expand = function() {
                
                p.removeClass('retracted').addClass('expanded');
                
                p.css({
                    display: 'block',
                });
                
                setTimeout(function() {
                    p.css({
                        height: height,
                        opacity: 1
                    });
                    
                    expanded = true;
                }, 100);
                
                
                
                
//                if(browserSupportsCSSTransitions) {
//                    expandCSS();
//                } else {
//                    expandJS();
//                }

            };
            
            // contract
            var _retract = function() {
                
                
                
                p.removeClass('expanded').addClass('retracted');
                
                p.css({
                    height: 0,
                    opacity: 0
                });
                
                expanded = false;
                
//                if(browserSupportsCSSTransitions) {
//                    retractCSS();
//                } else {
//                    retractJS();
//                }
                
            };
            
//            var expandJS = function() {
//                
//                p.css({
//                    display: 'block'
//                });
//                
//                p.animate({
//                    height: height
//                }, 300, function() {
//                    p.animate({
//                        opacity: 1
//                    }, 300, function() {
//                        // complete
//                        expanded = true;
//                    });
//                });
//                
//                console.log(director + ' expandJS')
//            };
//            
//            var retractJS = function() {
//                
//                p.css({
//                    display: 'none'
//                });
//                
//                p.animate({
//                    opacity: 0
//                }, 300, function() {
//                    p.animate({
//                        height: 0
//                    }, 300, function() {
//                        // complete
//                        expanded = false;
//                    });
//                });
//                
//                console.log(director + ' retractJS') 
//            };
//            
//            var expandCSS = function() {
//                
//                console.log('expanding: ' + height)
//                
//                p.css({
//                    display: 'block',
//                    height: height
//                });
//                
//                console.log(director + ' expandCSS')
//                
//            };
//            
//            var retractCSS = function() {
//                
//                p.css({
//                    opacity: 0
//                });
//                
////                p.css({
////                    opacity: 0,
////                    height: 0
////                });
//                
//                console.log(director + ' retractCSS')
//            };
            
            this.expand = function() {
                _expand();
            }
            
            this.retract = function() {
                _retract();
            }
            
        };
        
        
/* -----------------------------------------------------------------------------
 *                              Initialize
 * ---------------------------------------------------------------------------*/

        init();
        
    });
})(jQuery);