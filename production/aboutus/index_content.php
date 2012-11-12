<!-- 
    Author: Mike Newell © 2012
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style>
            
            *{margin:0;padding:0}
            html, body {height:100%;width:100%;overflow:hidden; background-color: black;}
            table {height:100%;width:100%;table-layout:static;border-collapse:collapse}
            iframe {height:100%;width:100%}
            
            #anim, #main {
                width: 100%;
                height: 100%;
                border: none;
                overflow: hidden;
                margin: 0;
                padding: 0;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
            }
            
            #pageLoad {
                position: absolute;
                top: 50%;
                margin-top: -15px;
                left: 50%;
                margin-left: -15px;
                width: 31px;
            }
            
        </style>
    </head>
    <body>
        
        <img id="pageLoad" src="../images/orbit/loading.gif" alt="loading..." />
        
        <div id="win2">
            <iframe id="main" src="main.php"></iframe>
        </div>
        <div id="win1">
            <iframe id="anim" src="anim.html"></iframe>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../javascripts/jquery.min.js">\x3C/script>')</script>
        <script src="../javascripts/jquery.cookie.js"></script>
        <script>
            (function($) {
                $(window).load(function() {
                    var mainFrame = document.getElementById('main');
                    var animFrame = document.getElementById('anim');
                    
                    var animDoc, mainDoc;
                    
                    var beginAnimation = function() {
                        
                        $('#anim').animate({
                            'opacity' : 1
                        }, 400, function() {
                            
                            $('#pageLoad').remove();
                            
                            var logo = $(animDoc).find('#splash_logo');

                            logo.animate({
                                'opacity':1
                            }, 800, function() {
                                // complete
                                setTimeout(function() {

                                    logo.fadeOut('slow', function() {
                                        $('#anim').fadeOut(1000, function() {
                                            // complete
                                            $(this).remove();
                                        });

                                        $('#main').animate({
                                            'opacity' : 1
                                        }, 1000, function() {
                                            // complete
                                            $.cookie('thorn_loaded', 'true', { expires: 1 });
                                        });
                                    });

                                }, 1300);

                            });
                        });
                        
                    };
                    
                    $('#main').ready(function() {
                        mainDoc = mainFrame.contentDocument || mainFrame.contentWindow.document;
                        
                        var navLinks = $(mainDoc).find('#navContainer a');
                        
                        console.dir(navLinks)
                        
                        navLinks.each(function(index) {
                            
                            $(this).on('click touchstart', function() {
                                
                                console.log('clicked')
                                
                                var href = $(this).attr('href');
                                
                                window.location = href;
                                
                            });
                            
                        })
                    });
                    
                    $('#anim').ready(function() {
                        animDoc = animFrame.contentDocument || animFrame.contentWindow.document;
                        var loadedBefore = $.cookie('thorn_loaded'); // => "the_value"
                        if(loadedBefore == 'true') {
                            $('#anim').hide();
                            $('#main').css({ 'opacity' : 1 });
                        } else {
                            beginAnimation();
                        }
                        
                        
                    });
                    
                    
                    
                });
            })(jQuery);
        </script>
    </body>
</html>