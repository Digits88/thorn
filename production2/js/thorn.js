/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {
    $(window).load(function() {
        // helpers
        var boardExpand = function() {
            console.log('hovered');
            $('#board').animate({
                'height': '734px'
            }, 500, function() {
                // complete
                console.log('complete');
            });
        };
        
        var taskForceExpand = function() {
            console.log('hovered');
            $('#taskForce').animate({
                'height': '578px'
            }, 500, function() {
                // complete
                console.log('complete');
            });
        };
        
        var privacyExpand = function() {
            console.log('hovered');
            $('footer').animate({
                'height': '225px'
            }, 500, function() {
                // complete
                console.log('complete');
            });
        };
        
        var expandOut = function() {
            // nothing
        };
        
        var playIntro = function() {
            setTimeout(function() {
                $('#intro img').animate({
                    opacity: 1
                }, 800, function() {
                    setTimeout(function() {
                        $('#intro img').animate({
                            opacity: 0
                        }, 800, function() {
                            // img faded
                            $('#intro').animate({
                               opacity: 0 
                            }, 1000, function() {
                                $('#intro').remove();
                            });
                        });
                        
                        
                    }, 1300);   
                });
            }, 500);
                
                
        };
        
        
        // classes
        
        var socialButton = function() {
            
            var _button, _popup, _socialOn;
            
            this.init = function(button, popup) {
                _button = $(button);
                _popup = $(popup);
                
                _button.on('mouseover touchstart touchend', function(evt) {
                    evt.preventDefault();

                    _socialOn = true;

                    _popup.show();
                    
                    _popup.find('a').css({
                        opacity: 0
                    });
                    
                    _popup.find('a').animate({
                        opacity: 1
                    }, 200, function() {
                        // complete
                    });
                    
//                    _popup.find('a').animate({
//                        'font-size': '10px'
//                    }, 200, function() {
//                        // complete
//                        console.dir(this);
//                        $(this).animate({
//                            'font-size': '9px'
//                        }, 200, function() {
//                            // complete
//                        });
//                    });
                    
                    socialCheckOthersHidden();
                });
                
                _button.on('mouseout', function(evt) {
                    evt.preventDefault();

                    socialHide();

                });
                
                _button.on('click', function(evt) {
                    evt.preventDefault();
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
        
        // events
        $('#board').hoverIntent({
            over: boardExpand,
            timeout: 500,
            out: expandOut
        });
        
        $('#taskForce').hoverIntent({
            over: taskForceExpand,
            timeout: 500,
            out: expandOut
        });
        
        $('#privacy').hoverIntent({
            over: privacyExpand,
            timeout: 500,
            out: expandOut
        });
        
        // initialization
        var facebookButton = new socialButton();
        facebookButton.init('.facebook', '#facebook');

        var twitterButton = new socialButton();
        twitterButton.init('.twitter', '#twitter');

        var emailButton = new socialButton();
        emailButton.init('.email', '#email');
        
        if($('#intro').length) {
            playIntro();
        }
    });
})(jQuery);