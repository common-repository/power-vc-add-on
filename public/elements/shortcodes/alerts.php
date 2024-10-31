<?php
function pa_addon_alerts( $atts, $content = null ) {
 	extract( shortcode_atts( array(
 	'type' => 'info', /* alert-info, alert-success, alert-error */
 	'close' => 'false', /* display close link */
 	), $atts ) );
 	$out = '<div id="pa-wrap" class="pa-wrap">';
 	$out .= '<div class="pa-alert pa-alert-'. $type . '">';
 	if($close == 'true') {
 		$out .= '<span class="pa-close">&times;</span>';
 	}
 	$out .= do_shortcode($content);
 	$out .= '</div>';
 	$out .= '</div>';
 	
 	return $out;
 }

 add_shortcode('pa_alert', 'pa_addon_alerts');