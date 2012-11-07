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

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="stylesheets/ie.css">
	<![endif]-->
	
	<script src="../javascripts/modernizr.foundation.js"></script>
        
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>
<body>

	<!-- container -->
	<div class="container" id="theIssue">
            
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
                                    <dd><a class="current" href="../theissue">THE ISSUE</a></dd>
                                    <dd><a href="../getinvolved">GET INVOLVED</a></dd>
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
                                    <dd><a class="current" href="../theissue">THE ISSUE</a></dd>
                                    <dd><a href="../donate">DONATE</a></dd>
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
                    
                    <!-- left -->
                    <div id="leftContainer" class="ten columns">
                        
                        <div class="row" id="techAndExploitation">
                            
                            <div class="twelve columns">    
                                <hr class="goldhr" />
                                <h2>TECHNOLOGY AND EXPLOITATION</h2>
                            </div><!-- / twelve column container-->
                            
                            <div class="twelve columns">    
                                
                                <div class="panelBlack">
                                    <hr class="blackhr" />
                                    <h3 class="numberofchildren">NUMBER OF CHILD PORNOGRAPHY FILES REPORTED ANNUALLY</h3>
                                    
                                    <p>The number of images/videos submitted to NCMEC by law enforcement and reviewed by the Child Victim Identification Program has increased from 450,000 in 2004 to more than 17 million in 2011.  Technology has made it easier for predatorsto create and share child pornography and connect with like-minded individuals. The increased availability of exploitative content has the effect of “normalizing” behaviors that are both dangerous and illegal.</p>
                                    <p class="citation">Source: National Center for Missing & Exploited Children (NCMEC)</p>
                                </div>
                                
                            </div><!-- / twelve column container-->
                            
                            <div class="twelve columns">
                                <img class="chart" src="../images/theissue/chart.png" />
                            </div>
                            
                            <div class="twelve columns">
                                <div class="panelBlack">
                                    <hr class="blackhr" />
                                    <h3 class="threeoutoffour">3 OUT OF 4 VICTIMS ARE TRAFFICKED ONLINE</h3>
                                    
                                    <p>Over three-quarters of underage sex trafficking victims we spoke with said they had been advertised or sold online. The Internet simplifies illegal transactions for johns, and helps create new opportunities for pimps who profit from the sexual victimization of children.</p>
                                    <p class="citation">Source: Thorn Survivor Survey</p>
                                </div>                                    
                            </div>
                            
                            <div class="twelve columns">
                                <img class="children" src="../images/theissue/children.png" />
                            </div>
                            
                        </div><!-- / row -->
                        
                    </div><!-- / left -->
                    
                    
                    <!-- footer -->
<!--                    <div id="footerContainer" class="two columns">

                        <div class="twelve colums">
	                        <hr class="goldhr" />
                        <p><span></span>
                        <img src="../images/social_icons/facebook.png" id="facebook_share" />

                        <img src="../images/social_icons/twitter.png" id="twitter_share" /> 

                        <a href="https://plus.google.com/share?url={http://www.wearethorn.org}" onclick="javascript:window.open(this.href,
'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><img src="../images/social_icons/google_plus.png" alt="Share on Google+" id="google_share" /></a> 

                            <a href="mailto:
        ?subject=THORN – We are digital defenders of children 
        &body=Thorn exists to continue the work started by the Demi and Ashton (DNA) Foundation in 2009.  We invest in and deploy the latest technology in order to make the web a hostile environment for child predators.  Our efforts aim to disrupt and deflate the predatory behaviors of those who use technology to abuse or traffic children, to solicit sex with children, or to create and share child pornography." target="_blank" alt="email"><img src="../images/social_icons/social_email.png" id="email_share" /></a> 


                                        </p>
                        </div>        
                    </div> / footer -->
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
        <script src="../javascripts/thorn.js"></script>
        <script src="../javascripts/social.js"></script>-->
        <?php include_once '../includes/scripts.php'; ?>
</body>
</html>