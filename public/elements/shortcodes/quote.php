<?php
function vision_webnus_quote( $attributes, $content = null ) {
 	
	extract(shortcode_atts(array(
	"text" =>'',
	"name" =>'',
	"name_sub" =>'',
	
	
		), $attributes));
    $out= '';
    $out .='<div id="pa-wrap" class="pa-wrap">';
    $out .='<blockquote class="pa-max-quote">';
    $out .='<h2>'. $text .'</h2>';
    $out .='<cite title="">'. $name .' <small>'. $name_sub .'</small></cite></blockquote>';
    $out .='</div>';
	return $out;
}

add_shortcode('pa_quote', 'vision_webnus_quote');