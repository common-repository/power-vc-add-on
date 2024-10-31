<?php
function pa_distance1 ( $atts, $content = null ) {
	return '
		<div id="pa-wrap" class="pa-wrap">
			<div class="pa-vertical-space1 vc_clearfix"></div>
		</div>';
}
add_shortcode('pa_distance1','pa_distance1');


function pa_distance2 ( $atts, $content = null ) {
	return '
		<div id="pa-wrap" class="pa-wrap">
			<div class="pa-vertical-space2 vc_clearfix"></div>
		</div>';
}
add_shortcode('pa_distance2','pa_distance2');


function pa_distance3 ( $atts, $content = null ) {
	return '
		<div id="pa-wrap" class="pa-wrap">
			<div class="pa-vertical-space3 vc_clearfix"></div>
		</div>';
}
add_shortcode('pa_distance3','pa_distance3');


function pa_distance4 ( $atts, $content = null ) {
	return '
		<div id="pa-wrap" class="pa-wrap">
			<div class="pa-vertical-space4 vc_clearfix"></div>
		</div>';
}
add_shortcode('pa_distance4','pa_distance4');


function pa_distance ( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'type'      => '1'
	), $atts));
	return ($type >0 )? '<div id="pa-wrap" class="pa-wrap"><div class="pa-vertical-space'.$type.' vc_clearfix"></div></div>': '<div id="pa-wrap" class="pa-wrap"><div class="null"></div></div>';
}
add_shortcode('pa_distance','pa_distance');