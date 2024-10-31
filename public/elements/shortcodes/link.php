<?php
function vision_webnus_magicmore( $attributes, $content = null ) {
 	
	extract(shortcode_atts(array(
	
	"title" =>'',
	"link" =>'#',	
	), $attributes));

 return '<ldiv id="pa-wrap" class="pa-wrap" ><a href="'.$link.'" class="pa-magicmore">'.$title. '</a></div>'; 
	

 }
add_shortcode('pa_link', 'vision_webnus_magicmore');