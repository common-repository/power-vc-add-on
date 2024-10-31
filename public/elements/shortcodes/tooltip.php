<?php
function pa_tooltips ($atts, $content = null) {
	extract(shortcode_atts(array(
		'tooltiptext'		=> 'Tooltip Text',
		'tooltip_content'	=> '',
		'tooltip_link'		=> '',
	), $atts));

	$out = '<div id="pa-wrap" class="pa-wrap"><a href="' . $tooltip_link . '" class="pa-tooltips" data-tooltip="' .$tooltiptext. '">';
	$out .= $tooltip_content;
	$out .= '</a></div>';
	
	return $out;
}
add_shortcode('pa_tooltip','pa_tooltips');