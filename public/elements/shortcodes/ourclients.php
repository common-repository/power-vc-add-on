<?php
function pa_ourclients($attributes, $content){
	extract(shortcode_atts(array(
	'type'  => '1',
	'client_images'=>''
	), $attributes));

	$client_images_url = '';
	if(!empty($client_images))
	{
		$images_id_array = array();
		$images_id_array =explode(',',$client_images);
		foreach($images_id_array as $id)
		{
			@$link = get_post($id)->post_excerpt;
			$alt_text = get_post_meta($id, '_wp_attachment_image_alt', true);
			if(empty($link))
			$client_images_url .= '<li><img alt="'.$alt_text.'" src="' .wp_get_attachment_url( $id ) . '"/></li>';
			else
			$client_images_url .= '<li><a target="_blank" href="'.esc_url($link).'"><img alt="'.$alt_text.'"  src="' .wp_get_attachment_url( $id ) . '"/></a></li>';
		}
	}

	$out = '<div id="pa-wrap" class="pa-wrap">';

	$out .= '';
	$out .= '<div class="aligncenter">';
    $out .= '<div class="pa-vertical-space1"></div><div class="vc_col-md-12 pa-our-clients-wrap ';
	if($type==2)
	{
	$out .='crsl';
	}
	$out .= '"><ul id="pa-our-clients" class="pa-our-clients ';
	if($type==2)
	{
	$out .='crsl';
	}
	$out .='" data-items="4">';
	$out .= $client_images_url;
	$out .= do_shortcode($content);
	$out .='</ul>';
	$out .= '</div><div class="pa-vertical-space2"></div></div>';
	
	$out .='</div>';
	return $out;
}
add_shortcode("pa_ourclients", "pa_ourclients");
function pa_client($attributes, $content){
	extract(shortcode_atts(array(
		"img" => '',
		"img_alt" => '',
	), $attributes));

return !empty($img)?'<li><img src="'.$img.'" alt="'.$img_alt.'"></li>':'';
}
add_shortcode("pa_client", "pa_client");