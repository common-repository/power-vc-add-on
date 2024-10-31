<?php
 function pa_list( $atts, $content = null ) {
 	extract(shortcode_atts(array(
 	'type'      => 'plus',

 	), $atts));
 	return '<div id="pa-wrap" class="pa-wrap"><ul class="'. $type . '" >' . do_shortcode($content) . '</ul></div>';
 }
 add_shortcode('pa_ul', 'pa_list');

 function pa_list_item( $atts, $content = null ) {
 	extract(shortcode_atts(array(
 	'type'      => '',

 	), $atts));
	return '<li class="'. $type .'">' . do_shortcode($content) . '</li>';
 }
 add_shortcode('pa_li', 'pa_list_item');