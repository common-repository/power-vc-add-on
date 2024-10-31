<?php
function power_addon_video_play ($atts, $content = null) {
	extract(shortcode_atts(array(
	'link'      	=>	'#',
	'link_class'    =>	'',
	'size'			=>	'',
	'color'			=>	''

	), $atts));

	$style = 'style="';
	if(!empty($size))  $style .= ' font-size:' . $size. ';';
	if(!empty($color)) $style .= ' color:' . $color. ';';
	$style .= '"';			
	 $out = '<div id="pa-wrap" class="pa-wrap"><div class="pa-video-play-btn-wrap"><a href="'. esc_url($link) .'" class="pa-video-play-btn '. $link_class .'" data-effect="mfp-zoom-in"><i class="fa-play" '.$style.'></i></a></div></div>';
	return $out;
}
add_shortcode('pa_videoplay','power_addon_video_play');