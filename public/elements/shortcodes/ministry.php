<?php
function pa_ministry ($atts, $content = null) {
	extract(shortcode_atts(array(
	'type'  => '1',
	'ministry_name'  => '',
	'ministry_img'=>'',
	'color'=>'#0099cb',
	'text'=>'',
	'director_name'=>'',
	'director_img'=>'',
	'link'=>'',
	'thumbnail' 	=> '',
	'thumbnail2' 	=> '',
	), $atts));
	
	if(is_numeric($ministry_img)) $ministry_img = wp_get_attachment_url( $ministry_img );
	// crop image if thumbnail is set
	if ( $thumbnail ) {
		// if main class not exist get it
		if ( !class_exists( 'Wn_Img_Maniuplate' ) ) {
			require_once POWER_ADDONS_DIR .'includes/class-webnus-manuplate.php';
		}

		$arr = explode('*', $thumbnail); // get width and height

		$image = new Wn_Img_Maniuplate; // instance from settor class

		$ministry_img = $image->m_image( $ministry_img , $arr['0'] , $arr['1'] ); // set required and get result
	}


	if(is_numeric($director_img)) $director_img = wp_get_attachment_url( $director_img );
	// crop image if thumbnail is set
	if ( $thumbnail2 ) {
		// if main class not exist get it
		if ( !class_exists( 'Wn_Img_Maniuplate' ) ) {
			require_once POWER_ADDONS_DIR .'includes/class-webnus-manuplate.php';
		}

		$arr = explode('*', $thumbnail2); // get width and height

		$image = new Wn_Img_Maniuplate; // instance from settor class

		$director_img = $image->m_image( $director_img , $arr['0'] , $arr['1'] ); // set required and get result
	}
	
	$out = '<div id="pa-wrap" class="pa-wrap">';
	if($type==1){
		$out .= '<article class="pa-ministry-box" style="background-color:'.$color.'">
			<div class="pa-ministry-bar" style="color:'.$color.'"><a href="'.$link.'"><h4>'.$ministry_name.'</h4></a></div>
			<div class="pa-ministry-content" style="background-color:'.$color.'">
				<p>'.$text.'</p>
				<figure class="pa-ministry-director">
					<img class="pa-director-img" src="'. $director_img .'" alt="'.$director_name.'">
					<figcaption><h5>'.$director_name.'</h5><p>'.$ministry_name.' '.esc_html__('director','power-addons').'</p></figcaption>
				</figure>
			</div>	
			<div class="pa-ministry-img"><img src="'. $ministry_img .'" alt="'.$ministry_name.'"></div>			
		</article>';
	}elseif($type==2){
		$out .= '<article class="pa-ministry-box2"><a href="'.esc_url($link).'"><img src="'. $ministry_img .'" alt="'.$ministry_name.'"><h4>'.$ministry_name.'</h4><p>'.$text.'</p></a></article>';	
	}
	$out .= '</div>';
return $out;
}
add_shortcode('pa_ministry','pa_ministry');