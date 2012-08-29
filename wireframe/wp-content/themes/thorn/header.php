<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	
	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="initial-scale=1.6; maximum-scale=1.0; width=device-width; "/>
	
	<title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
        
        <style>
            #header h1 a {
                background: url(../../images/logo_229x59.png) scroll no-repeat;
                width: 229px;
                height: 59px;
                text-indent: -9999px;
                display: block;
                margin-top: 57px;
            }
            
            .nav-bar {
                float: right;
            }
                        
        </style>
        
</head>

<body <?php body_class(); ?>>

	<!-- Begin Container -->
	<div class="container">
		
		<!-- Header Row -->
		<div class="row">
			
				<!-- Header Column -->
				<div class="twelve columns" id="access" role="navigation">
					
					<!--<span id="skipnav" class="show-on-phones"><a href="#content">Skip to Content?</a></span>-->
                                        
                                        <?php wp_nav_menu( array( 'theme_location' => 'header-menu','menu_class' => 'nav-bar eight columns', 'container' => 'nav') ); ?>
				
					<!-- Site Description & Title -->
					<hgroup id="header">
						<h1 class="four columns"><a href="<?php echo site_url(); ?>"><?php //bloginfo('title'); ?></a></h1>
						<!--<h4 class="subheader"><?php bloginfo('description'); ?></h4>-->
					</hgroup>

					<!-- Navigation --> 					
 				    
				
				</div>
				<!-- Header Column -->
				
		</div>
		<!-- Header Row -->
		
		<!-- Main Row -->
		<div class="row">
		
		
				