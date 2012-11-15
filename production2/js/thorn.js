/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


(function($) {
    $(window).load(function() {
        // helpers
        var boardExpand = function() {
            $('#board').animate({
                height: '734px'
            }, 500, function() {
                // complete
            });
        };
        
        var taskForceExpand = function() {
            $('#taskForce').animate({
                height: '578px'
            }, 500, function() {
                // complete
            });
        };
        
        var privacyExpand = function() {
            $('footer').animate({
                height: '225px'
            }, 500, function() {
                // complete
            });
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
            timeout: 500
        });
        
        $('#taskForce').hoverIntent({
            over: taskForceExpand,
            timeout: 500
        });
        
        $('#privacy').hoverIntent({
            over: privacyExpand,
            timeout: 500
        });
        
        // initialization
        var facebookButton = new socialButton();
        facebookButton.init('.facebook', '#facebook');

        var twitterButton = new socialButton();
        twitterButton.init('.twitter', '#twitter');

        var emailButton = new socialButton();
        emailButton.init('.email', '#email');
    });
})(jQuery);