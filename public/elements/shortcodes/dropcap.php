<?php
function power_addon_dropcap1 ($atts, $content = null) {

	extract( shortcode_atts( array(
		'dropcap1_content' => '', 

	), $atts ) );

 	return '<div id="pa-wrap" class="pa-wrap"><span class="pa-dropcap1">' . $dropcap1_content . '</span></div>';
 }
add_shortcode('pa_dropcap1','power_addon_dropcap1');


function power_addon_dropcap2 ($atts, $content = null) {

	extract( shortcode_atts( array(
		'dropcap2_content' => '', 

	), $atts ) );

	return '<div id="pa-wrap" class="pa-wrap"><span class="pa-dropcap2">' . $dropcap2_content . '</span></div>';
}
add_shortcode('pa_dropcap2','power_addon_dropcap2');


function power_addon_dropcap3 ($atts, $content = null) {

	extract( shortcode_atts( array(
		'dropcap3_content' => '', 

	), $atts ) );

	return '<div id="pa-wrap" class="pa-wrap"><span class="pa-dropcap3">' . $dropcap3_content . '</span></div>';
}
add_shortcode('pa_dropcap3','power_addon_dropcap3');


function power_addon_dropcap ($atts, $content = null) {
	extract( shortcode_atts( array(
	'type' => '1', 
	'dropcap_content' => '', 

), $atts ) );
return '<div id="pa-wrap" class="pa-wrap"><span class="pa-dropcap'.$type.'">' . $dropcap_content . '</span></div>';
}
add_shortcode('pa_dropcap','power_addon_dropcap');