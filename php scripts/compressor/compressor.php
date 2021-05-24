<?php

/*
Created by Dario Passariello

INTASTALLATION: 
PUT AS INCLUDE OR REQUIRE AT TOP OF INDEX FILE
*/

function compression( $html ){

$html = preg_replace( '/<!-(.*)->/Uis', '', $html );
$html = preg_replace( '/[\r\n\t\s]+/s', ' ', $html );
$html = preg_replace( '#/\*.*?\*/#', ' ', $html );
$html = preg_replace( '/^\s+/', ' ', $html );
$html = preg_replace( '/ +/', ' ', $html );
$html = preg_replace( '/> +</', '><', $html );
$html = preg_replace( '/[[:blank:]]+/', ' ', $html );
$html = preg_replace( '/<!--[if IE]>/', $html, $html );
$html = preg_replace( '/<![endif]-->/', $html, $html );

$html = str_replace( '{!','<!', $html );
$html = str_replace( '--}','-->', $html );
$html = str_replace( ']}',']>', $html) ;
$html = preg_replace_callback( '/(&#[0-9]+;)/', function( $m ){ 
return mb_convert_encoding( $m[1], $GLOBALS['CHAR_ENCODE'], 'HTML-ENTITIES' );
}, $html);

clearstatcache();
return trim( $html );

}

ob_start( 'compression' );
ob_implicit_flush(1);

?>
