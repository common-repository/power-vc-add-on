<?php
function pa_callout_shortcode($attributes, $content)
{

	extract(shortcode_atts(array(
	"title" => '',
	"text" => '',
	"button_text" =>'',
	"button_link" =>''
		), $attributes));

	$out ='<div id="pa-wrap" class="pa-wrap">';
	$out .= '<article class="pa-callout">';
	$out .='<a class="pa-callurl" href="'. esc_url($button_link) .'">'. $button_text .'</a>';
	$out .='<h3>'. $title .'</h3>';
	$out .='<p>'. $text .'</p>';
	$out .='</article>';
	$out .='</div>';
	
	return $out;
}
add_shortcode("pa_callout", 'pa_callout_shortcode');