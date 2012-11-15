<?php
$url = $_SERVER['REQUEST_URI'];

session_start();
if(!isset($_SESSION['thorn'])) {
    $_SESSION['thorn'] = true;
}
?>
<!-- 
    Author: Mike Newell © 2012
-->
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css" />
        <link rel="stylesheet" type="text/css" href="../css/animation.css" />
        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="../css/ie.css" />
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-36349183-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
        <div id="wrap">
            <div id="contentContainer">
                <header>
                    <h1>Thorn</h1>
                    <nav>
                        <a <?php echo (strpos($url, 'aboutus') !==  false) ? 'class="active"' : ''; ?> href="../aboutus">ABOUT US</a>
                        <a <?php echo (strpos($url, 'whatwedo') !==  false) ? 'class="active"' : ''; ?> href="../whatwedo">WHAT WE DO</a>
                        <a <?php echo (strpos($url, 'theissue') !==  false) ? 'class="active"' : ''; ?> href="../theissue">THE ISSUE</a>
                        <a <?php echo (strpos($url, 'donate') !==  false) ? 'class="active"' : ''; ?> href="../donate">DONATE</a>
                    </nav>
                </header>