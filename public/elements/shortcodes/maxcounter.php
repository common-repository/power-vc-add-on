<?php
function pa_maxcounter( $attributes, $content = null ) {
	extract(shortcode_atts(array(
	"type"			=> '1',
	"icon"			=> '',
	"color"			=>'',
	"count"			=>'',
	"prefix"		=> '',
	"suffix"		=> '',
	"title"			=>'',
	"white_color"	=>'',
		), $attributes));

	$white_color = ( $white_color == 'yes' ) ? 'dark' : '';

	$out = '<div id="pa-wrap" class="pa-wrap"><div class="' . $white_color . ' ';
	switch($type){
		case 1:
		 	$out .= 'pa-m-counter';
		break;
		case 2:
			$out .= 'pa-s-counter';			
		break;
		case 3:
		 	$out .= 'pa-t-counter';
		break;
		case 4:
		 	$out .= 'pa-f-counter';
		break;			
	}
	$out  .= ' pa-max-counter" data-effecttype="counter" data-counter="' . $count . '">';
	if ( $icon ) {
		$out  .= '<i class="icon-counter '. $icon .'" ';
		if(!empty($color))
		$out .= 'style="color:'. $color. '"';
		$out .= '></i>';
	}
	if(!empty($prefix))
		$out  .= '<span class="pa-pre-counter">'. $prefix .'</span>';
	if(!empty($count))
		$out .= '<span class="pa-max-count">'. $count .'</span>';
	if(!empty($suffix))
		$out .= '<span class="pa-suf-counter">'. $suffix .'</span>';
	if(!empty($title))
		$out .= '<h5>'. $title .'</h5>';
	$out .= '</div></div>';
	return $out;
}
add_shortcode('pa_maxcounter', 'pa_maxcounter');