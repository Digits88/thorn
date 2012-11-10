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
        <link rel="stylesheet" type="text/css" href="../stylesheets/jquery-ui.custom.css" />

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
	<div class="container" id="aboutus">
            
            <!-- header -->
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
                                    <dd><a class="current" href="../aboutus">ABOUT US</a></dd>
                                    <dd><a href="../whatwedo">WHAT WE DO</a></dd>
                                    <dd><a href="../theissue">THE ISSUE</a></dd>
                                    <dd><a href="../donate">DONATE</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    
                </div>-->
                <?php include_once '../includes/header.php'; ?>
                
            </div><!-- / header -->
            
            <div class="row">
                
                <div class="twelve columns">
                    
                    <!-- divider for left half -->
                    <div id="leftContainer" class="five columns">
                        
                        <!-- defenders container -->
                        <div class="row" id="defendersContainer">
                            <div class="twelve columns">
                                <div class="panelDarkgrey">
                                    <hr class="digitalhr" />
                                    <h2>WE ARE DIGITAL<br /> DEFENDERS<br /> OF CHILDREN.</h2>
                                    <img src="../images/weAreDigitalDefendersOfChildrenGrey.png" alt="We are digital defenders of children" />
                                </div>
                            </div>
                        </div>
                        
                        <!-- board of directors container -->
                        <div class="row" id="directorsContainer">
<!--                             <div class="six columns"></div> -->
                            <div id ="internalDirectorsContainer" class="six columns">
                                <div class="panelLightgrey">
                                    <hr class="lightGreyhr" />
                                    <h6 id="boardHover">BOARD OF DIRECTORS<span>+</span></h6>
                                    
                                    <div id="accordion">
                                        <h7>ASHTON KUTCHER</h7>
                                        <div>
                                            <p>Cofounder of Thorn. Kutcher is an actor, producer, tech and social media investor, and philanthropist focused on using technology to effect positive changes in the world. In 2010 Time Magazine named him among their Top 100 Most Influential People; the following year, Vanity Fair honored him in their 2011 New Establishment List, which identifies the top 50 of an innovative new breed of buccaneering visionaries, engineering prodigies and entrepreneurs.</p>
                                        </div>

                                        <h7>DEMI MOORE</h7>
                                        <div>
                                            <p>Cofounder of Thorn. Moore is an actress and a long-standing advocate for women’s issues. She received a Golden Globe nomination for her role in If These Walls Could Talk and a Director’s Guild nomination for Five, an anthology of short films that explore the impact of breast cancer. She partnered with CNN Freedom Project for the documentary Nepal’s Stolen Children to highlight the work of antitrafficking advocate Anuradha Koirala. In 2011 she became executive producer of “The Conversation,” an interview series hosted by Amanda de Cadenet that features intimate and frank interviews with prominent women.</p>
                                        </div>

                                        <h7>RAY CHAMBERS</h7>
                                        <div>
                                            <p>United Nations Secretary-General’s Millennium Development Goals (MDG) Advocate and Special Envoy for Malaria. Chambers is a philanthropist and humanitarian who directs most of his efforts toward helping children. He is the founding chairman of the Points of Light Foundation and cofounder, with Colin Powell, of America’s Promise—The Alliance for Youth. He also cofounded the National Mentoring Partnership, the Millennium Promise Alliance and Malaria No More.</p>
                                        </div>
                                        <h7>JIM PITKOW</h7>
                                        <div>
                                            <p>Chair of the Thorn Technology Task Force. Pitkow is a Silicon Valley entrepreneur, investor, and advisor.  He received a Doctorate in Computer Science from the Georgia Institute of Technology.  Jim is a member of the National Ski Patrol and an avid student of the contemplative arts.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- / #leftContainer -->
                    
                    <!-- divider for the right half -->
                    <div id="rightContainer" class="five columns">
                        
                        <!-- description container -->
                        <div class="row" id="descriptionContainer">
                            <div class="twelve columns">
                                <div class="panelRed">
                                    <hr class="redhr" />
                                    <p>
                                        Thorn exists to continue the work started by the Demi and Ashton (DNA) Foundation in 2009.<br><br>
                                        We aim to disrupt and deflate the predatory behavior of those who abuse and traffic children, solicit sex with children or create and share child pornography.<br><br>
                                        As these crimes are increasingly facilitated by technology, we invest in and deploy the latest technology as part of our ongoing fight to end child sexual exploitation.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- task force members container -->
                        <div class="row" id="taskForceContainer">
                            <div class="nine columns">
                                <div class="panelBlack">
                                    <hr class="blackhr" />
                                    <h6>TECH TASK FORCE MEMBERS <span>+</span></h6>
                                    <img src="../images/taskForce-220x406.png" alt="Task Force Members: Facebook, Good, Microsoft..." />
<!--                                    <ul>
                                        <li>Member 1</li>
                                        <li>Member 2</li>
                                        <li>Member 3</li>
                                        <li>Member 4</li>
                                    </ul>-->
                                </div>
                            </div>
                        </div>
                        
                    </div><!-- / #rightContainer -->
                    
<!--                    <div id="footerContainer" class="two columns">
                        <div class="twelve colums">
                        	<hr class="goldhr" />
                            <p><span>FOLLOW US</span> <a href=""><a href=""><img src="../images/btn_fb.png" alt="Facebook Logo" id="facebook_logo" /></a><img src="../images/btn_twitter.png" alt="Twitter Logo" id="twitter_logo" /></a> </p>  
                        </div>        
                    </div>-->
                    <?php include_once '../includes/footer.php'; ?>
                    
                </div><!-- / twelve columns container -->
                
            </div> <!-- / row -->
            
            <?php include_once '../includes/policy.php'; ?>

	</div><!-- / container -->
	
	<!-- Included JS Files -->
<!--	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../javascripts/jquery.min.js">\x3C/script>')</script>
        <script src="../javascripts/jquery-ui.custom.min.js"></script>
        <script src="../javascripts/jquery.hoverintent.js"></script>
	<script src="../javascripts/foundation.js"></script>
	<script src="../javascripts/app.js"></script>
        <script src="../javascripts/thorn.js"></script>
        <script src="../javascripts/social.js"></script>-->
        
        <?php include_once '../includes/scripts.php'; ?>
        
</body>
</html>
