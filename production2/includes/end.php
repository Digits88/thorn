        </div><!-- /wrap -->
        <?php
        
            // decide a few things first
        
            
        
            if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT'])) {
                // do nothing
            } else {
                if(strpos($url, 'aboutus') !==  false) {
                    // we're on the about us page
                    if($_SESSION['thorn']) {
                        // session is set to true
                    
                    ?>
        <div id="intro">
            <img src="../images/thorn_logo_main.png" alt="Thorn: Digital Defenders of Children" style="opacity: 0;" />
        </div>
                    <?php
                        
                        $_SESSION['thorn'] = false;
                    }
                    
                }
                
            }
        ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript">window.jQuery || document.write('<script src="../js/jquery.min.js" type="text/javascript">\x3C/script>')</script>
        <script src="../js/jquery.hoverintent.js" type="text/javascript"></script>
        <script src="../js/thorn.js" type="text/javascript"></script>
        <script src="../js/social.js" type="text/javascript"></script>
    </body>
</html>