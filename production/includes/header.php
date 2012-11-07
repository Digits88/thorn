<?php
/*
 * show the header
 */

//$abs = dirname(__FILE__);
//
//$document_root = $_SERVER['DOCUMENT_ROOT'];
//
//$url = 'http://' . $_SERVER['HTTP_HOST'] . str_replace($document_root, '', $abs);

$url = $_SERVER['REQUEST_URI'];

//echo $url;

?>
                <div class="twelve columns">
                
                    <div class="four columns">
                        <!-- logo container -->
                        <div class="row" id="logoContainer">
                            <div class="twelve columns">
                                <h2 id="header_logo"><a href="../aboutus/"><img src="../images/thorn_logo.png" /></a></h2>
                            </div>
                        </div>
                    </div>
                    
                    <div class="six columns">
                        <!-- nav menu container -->
                        <div class="row" id="navContainer">
                            <div class="twelve columns">
                                <dl class="tabs">
                                    <dd><a <?php echo (strpos($url, 'aboutus') !==  false) ? 'class="current"' : ''; ?> href="../aboutus">ABOUT US</a></dd>
                                    <dd><a <?php echo (strpos($url, 'whatwedo') !==  false) ? 'class="current"' : ''; ?> href="../whatwedo">WHAT WE DO</a></dd>
                                    <dd><a <?php echo (strpos($url, 'theissue') !==  false) ? 'class="current"' : ''; ?> href="../theissue">THE ISSUE</a></dd>
                                    <dd><a <?php echo (strpos($url, 'donate') !==  false) ? 'class="current"' : ''; ?> href="../donate">DONATE</a></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    
                </div>