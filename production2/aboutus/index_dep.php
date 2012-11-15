<?php
    if (preg_match('~MSIE|Internet Explorer~i', $_SERVER['HTTP_USER_AGENT'])) {
//        echo 'IE detected';
        include_once 'main.php';
    } else {
//        echo 'IE not detected';
        include_once 'index_content.php';
    }
?>