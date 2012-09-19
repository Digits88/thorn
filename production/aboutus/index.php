<?php


/* -----------------------------------------------------------------------------
 * 
 *                      Load files from templates
 * 
 -----------------------------------------------------------------------------*/

$anim = file_get_contents('anim.template');
$no_anim = file_get_contents('no-anim.template');

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$p_url = parse_url($url);

if($p_url['query'] == 'sans-animation') {
    
    echo $no_anim;    
    
} else {
    
    echo $anim;
    
}

?>
