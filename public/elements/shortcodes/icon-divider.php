<?php
function pa_icon_divider ($atts, $content = null) {
	extract(shortcode_atts(array(
	'name'			=>	'',
	'color'			=>	''

	), $atts));

	$style = 'style="';
	if(!empty($color)) $style .= ' color:' . $color. ';';
	
	
	$style .= '"';						
	 $out = '<div id="pa-wrap" class="pa-wrap"><div class="pa-sec-divider"><div class="pa-cir '. $name .'" '.$style.'></div></div></div>';
	return $out;
}
add_shortcode('pa_icon-divider','pa_icon_divider');