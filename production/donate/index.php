<!-- 

    TODO:   Build in some sort of animation sequence between pages - using css3 animations.
            I could use jquery to get other pages with animation sequences ready, run them
            then remove the animation classes...could be cool.

-->

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width" />
	
	<title>THORN</title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="../stylesheets/foundation.css" />
	<link rel="stylesheet" type="text/css" href="../stylesheets/app.css" />
        <link rel="stylesheet" type="text/css" href="../stylesheets/aboutus2.css" />
        <link rel="stylesheet" type="text/css" href="../stylesheets/animations.css" />

	<!--[if IE]>
		<link rel="stylesheet" href="../stylesheets/ie.css">
	<![endif]-->
	
	<script src="../javascripts/modernizr.foundation.js"></script>
        
	<!-- IE Fix for HTML5 Tags -->
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<!-- container -->
	<div class="container" id="donate">
            
            <!-- header -->
<!--            <div class="row">
                
                <div class="twelve columns">
                
                    <div class="four columns">
                         logo container 
                        <div class="row" id="logoContainer">
                            <div class="twelve columns">
                                <h2 id="header_logo"><a href="../aboutus/"><img src="../images/thorn_logo.png" /></a></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="six columns">
                         nav menu container 
                        <div class="row" id="navContainer">
                            <div class="twelve columns">
                                <dl class="tabs">
                                    <dd><a href="../aboutus/?sans-animation">ABOUT US</a></dd>
                                    <dd><a href="../whatwedo">WHAT WE DO</a></dd>
                                    <dd><a href="../theissue">THE ISSUE</a></dd>
                                    <dd><a class="current" href="../getinvolved">GET INVOLVED</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>-->

            <div class="row">
                
<!--                <div class="twelve columns">
                
                    <div class="four columns">
                         logo container 
                        <div class="row" id="logoContainer">
                            <div class="twelve columns">
                                <h2 id="header_logo"><a href="../aboutus/"><img src="../images/thorn_logo.png" /></a></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="six columns">
                         nav menu container 
                        <div class="row" id="navContainer">
                            <div class="twelve columns">
                                <dl class="tabs">
                                    <dd><a href="../aboutus">ABOUT US</a></dd>
                                    <dd><a href="../whatwedo">WHAT WE DO</a></dd>
                                    <dd><a href="../theissue">THE ISSUE</a></dd>
                                    <dd><a class="current" href="../donate">DONATE</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    
                </div>-->

                <?php include_once '../includes/header.php'; ?>
                
            </div><!-- / header -->
     
            
            <!-- main content -->
            <div class="row">
                
                <div class="twelve columns">
                    
                    <!-- divider for left half -->
                    <div id="leftContainer" class="five columns">
                        
                        <!-- defenders container -->
                        <div class="row" id="comingSoonContainer">
                            <div class="twelve columns">
                                <div class="panelGold">
                                    <hr class="goldhr" />
                                    <h2>DONATE</h2>
                                    <img src="../images/donate.png" alt="Coming Soon..." />
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- / #leftContainer -->
                    
                    <!-- divider for the right half -->
                    <div id="rightContainer" class="five columns">
                        
                        <!-- description container -->
                        <div class="row" id="ctaContainer">
                            <div class="twelve columns">
                                <div class="panelBlack">
                                    <hr class="blackhr" />
                                    <p class="light">
                                        100% of your donation goes toward programs to help fight child sexual exploitation. All overhead for the organization is covered by our founders.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- task force members container -->
                        <div class="row" id="newsletterContainer">
                            <div class="nine columns">
                                <div class="panelDarkgrey">
                                    <hr class="darkGreyhr" />
                                    <h6 class="light">THANKS TO OUR PRO BONO PARTNERS</h6>
                                    <ul>
                                        <li>Goodby Silverstein & Partners</li>
                                        <li>Wilson Sonsini</li>
                                        <li>Altman, Greenfield & Selvaggi</li>
                                        <li>Conversion Voodoo</li>
                                        <li>Google</li>
                                        <li>Microsoft</li>
                                        <li>Facebook</li>
                                        <li>Blekko</li>
                                        <li>Dr. Michael Seto</li>
                                    </ul>
                                        <!--<iframe id="newsletterForm" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="../wufoo/index.html"><a href="https://goodbysilverstein.wufoo.com/forms/m7x3q1/">Fill out my Wufoo form!</a></iframe>-->

                                </div>
                            </div>
                            <div class="three columns">
                                <div class="panelRed">
                                    <!--<h6 id="donateButton" class="light">DONATE</h6>-->
                                    <style>
                                        .wepay-custom-button {
                                            background: transparent !important;
                                            border: none !important;
                                            
                                            -moz-box-shadow:        none !important;
                                            -webkit-box-shadow:     none !important;
                                            box-shadow:             none !important;
                                            
                                            width: 102px !important;
                                            height: 32px !important;
                                            margin-left: -20px !important;
                                            
                                            font-size: 10px !important;
                                            font-weight: bold !important;
                                            line-height: 1.25 !important;
                                            font-family: 'Varela', "Helvetica Neue", "HelveticaNeue", Helvetica, Arial, "Lucida Grande", sans-serif !important;
                                            letter-spacing: 1px !important;
                                        }
                                    </style>
                                    <a class="wepay-widget-button wepay-green wepay-custom-button" id="wepay_widget_anchor_509c0ade99c45" href="https://www.wepay.com/donations/1810764396">DONATE</a><script type="text/javascript">var WePay = WePay || {};WePay.load_widgets = WePay.load_widgets || function() { };WePay.widgets = WePay.widgets || [];WePay.widgets.push( {object_id: 1810764396,widget_type: "donation_campaign",anchor_id: "wepay_widget_anchor_509c0ade99c45",widget_options: {list_suggested_donations: true,allow_cover_fee: true,enable_recurring: true,allow_anonymous: true,button_text: "Donate"}});if (!WePay.script) {WePay.script = document.createElement('script');WePay.script.type = 'text/javascript';WePay.script.async = true;WePay.script.src = 'https://static.wepay.com/min/js/widgets.v2.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(WePay.script, s);} else if (WePay.load_widgets) {WePay.load_widgets();}</script>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- / #rightContainer -->
                    
<!--                    <div id="footerContainer" class="two columns">
                        <div class="twelve colums">
                            <hr class="goldhr" />
                            <p>
                                <span></span>
                                <a href="#facebook" class="social facebook"><img src="../images/social_icons/facebook.png" id="facebook_share" /></a>

                                <a href="#twitter" class="social twitter"><img src="../images/social_icons/twitter.png" id="twitter_share" /> </a>

                                <a href="https://plus.google.com/share?url={http://www.wearethorn.org}" onclick="javascript:window.open(this.href,
    '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                    <img src="../images/social_icons/google_plus.png" alt="Share on Google+" id="google_share" />
                                </a> 

                                <a class="social email" href="mailto:
                ?subject=THORN – We are digital defenders of children 
                &body=Thorn exists to continue the work started by the Demi and Ashton (DNA) Foundation in 2009.  We invest in and deploy the latest technology in order to make the web a hostile environment for child predators.  Our efforts aim to disrupt and deflate the predatory behaviors of those who use technology to abuse or traffic children, to solicit sex with children, or to create and share child pornography." target="_blank" alt="email">
                                    <img src="../images/social_icons/social_email.png" id="email_share" />
                                </a> 
                            </p>
                            <div id="socialPopUpContainer">
                                <div id="facebook" class="socialPopUp">
                                    <a id="share" href="#">Share</a> | <a href="https://www.facebook.com/dnafoundation">Follow</a>
                                </div>
                                <div id="twitter"  class="socialPopUp">
                                   <a class="twitter popup" href="http://twitter.com/share?text=This%20be%20good%20site!">Share</a> | <a href="https://twitter.com/dnafoundation">Follow</a>
                                </div>
                                <div id="email" class="socialPopUp">
                                    <iframe height="260" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%;border:none"  src="https://goodbysilverstein.wufoo.com/embed/m7x3q1/"><a href="https://goodbysilverstein.wufoo.com/forms/m7x3q1/">Fill out my Wufoo form!</a></iframe>
                                    <iframe id="sidebarNewsletterForm" allowTransparency="true" frameborder="0" scrolling="no" style="width:100%; border:none"  src="../wufoo/sidebar.html"><a href="https://goodbysilverstein.wufoo.com/forms/m7x3q1/">Fill out my Wufoo form!</a></iframe>
                                </div>
                            </div>
                        </div> / twelve column        
                    </div>-->

                    <?php include_once '../includes/footer.php'; ?>
                    
                </div><!-- / twelve columns container -->
                
            </div> <!-- / row -->
            <!-- / main content -->
            
            <?php include_once '../includes/policy.php'; ?>
            
	</div><!-- / container -->
	




	<!-- Included JS Files -->
<!--	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../javascripts/jquery.min.js">\x3C/script>')</script>
	<script src="../javascripts/foundation.js"></script>
	<script src="../javascripts/app.js"></script>
        <script src="../javascripts/jquery.hoverintent.min.js"></script>
        <script src="../javascripts/thorn.js"></script>
        <script src="../javascripts/social.js"></script>-->
        <?php include_once '../includes/scripts.php'; ?>
</body>
</html>
