<?php
function pa_testimonial ($atts, $content = null) {
 	extract(shortcode_atts(array(
		'type'						=>'1',
		'testimonial_content'		=>'',
		'testimonial_background' 	=>'',
		'testimonial_content_color' =>'',
		'img'						=>'',
		'name'						=>'',
		'social'					=> '',
		'first_social'				=> 'twitter',
		'first_url'					=> '',
		'second_social'				=> 'facebook',
		'second_url'				=> '',
		'third_social'				=> 'google-plus',
		'third_url'					=> '',
		'fourth_social'				=> 'linkedin',
		'fourth_url'				=> '',
		'member_job'				=> '',
		'thumbnail' 				=> '',
	), $atts));

	if(is_numeric($img))
		$img = wp_get_attachment_url( $img );
	// crop image if thumbnail is set
	if ( $thumbnail ) {
		// if main class not exist get it
		if ( !class_exists( 'Wn_Img_Maniuplate' ) ) {
			require_once POWER_ADDONS_DIR .'includes/class-webnus-manuplate.php';
		}

		$arr = explode('*', $thumbnail); // get width and height

		$image = new Wn_Img_Maniuplate; // instance from settor class

		$img = $image->m_image( $img , $arr['0'] , $arr['1'] ); // set required and get result
	}
	$comma_job		= ( $type == '5' && $member_job ) ? ', ' . $member_job  : '' ;
	$color			= ( $testimonial_content_color ) ? 'color:' . $testimonial_content_color . ';' : '';
	$background		= ( $testimonial_background ) ? 'style="background:' . $testimonial_background . '; ' . $color . '" ' : '';
	$border_color	= ( $testimonial_background ) ? 'style="border-top-color:' . $testimonial_background . ';" ' : '';

	// socials
	$socials = '';
	if ( $social == 'enable' ) :
		$social1 = $social2 = $social3 = $social4 = '';
		$social1 = ( $first_url ) ? '<a href="' . esc_url( $first_url ) . '" target="_blank"><i class="fa-' . $first_social . '"></i></a>' : '';
		$social2 = ( $second_url ) ? '<a href="' . esc_url( $second_url ) . '" target="_blank"><i class="fa-' . $second_social . '"></i></a>' : '';
		$social3 = ( $third_url ) ? '<a href="' . esc_url( $third_url ) . '" target="_blank"><i class="fa-' . $third_social . '"></i></a>' : '';
		$social4 = ( $fourth_url ) ? '<a href="' . esc_url( $fourth_url ) . '" target="_blank"><i class="fa-' . $fourth_social . '"></i></a>' : '';
		$socials = '<div class="pa-social-team">' . $social1 . $social2 . $social3 . $social4 . '</div>';
	endif;

	$out = '';
	$img = $img ? '<img src="'. $img .'" alt="'. $name .'">' : '';

	if ( $type == 1 ) :
		$out .= '<div id="pa-wrap" class="pa-wrap ">';
		$out .= '<div class="pa-testimonial">';
		$out .= '<div class="pa-testimonial-content" ' . $background . '>';
		$out .= '<h4><q style="' . $color . '">'. $testimonial_content .'</q></h4>';
		$out .= '<div class="pa-testimonial-arrow"></div>';
		$out .= '<span class="shape" ' . $background . '></span></div>';
		$out .= '<div class="pa-testimonial-brand">'.$img;
		$out .= '<h5><strong>'.$name.'</strong><br><em>'.$member_job.'</em></h5></div>';
		$out .= '</div>';
		$out .= '</div>';
	elseif( $type == 4 ) :
		$out .='
			<div id="pa-wrap" class="pa-wrap">
				<div class="pa-testimonial'. esc_attr( $type ) .'">
					<div class="pa-testimonial-content">
						<div class="pa-testimonial-image">
							' . $img . '
						</div>
						<h5> ' . $name . ' </h5>
						<q> ' . $testimonial_content . ' </q>
					</div>
				</div>
			</div>
		';
	elseif( $type == 5 ) :
		$out .='
			<div id="pa-wrap" class="pa-wrap">
				<div class="pa-testimonial'. esc_attr( $type ) .'">
					<div class="pa-testimonial-content">
						<div class="pa-testimonial-image">
							' . $img . '
						</div>
						<q ' . $background . '> ' . $testimonial_content . ' </q>
						<span ' . $border_color . ' class="triangle" ></span>
						<div class="name"> ' . $name . ' </div>
						<div class="job"> ' . $comma_job . ' </div>
					</div>
				</div>
			</div>
	';
	else :
		$name	 = $name ? '<h5><strong>'. $name .'</strong></h5>' : '';
		$member_job	 = $member_job ? '<h6>'. $member_job .'</h6>' : '';
		$content = $testimonial_content ? '<p ' . $background . '>'. $testimonial_content .'<span class="shape" ' . $background . '></span></p>' : '';

		if ( $type == 3 ) {
			$out = '<div id="pa-wrap" class="pa-wrap"><div class="pa-testimonial'. esc_attr( $type ) .'">
				'. $img .'<div class="pa-testimonial-content">'. $content . $socials .' <div class="t-m-footer">'.$name.' '.$member_job .'</div></div></div></div>';
		} else {
			$out = '
			<div id="pa-wrap" class="pa-wrap">
				<div class="pa-testimonial'. esc_attr( $type ) .'">
					' . $img . '
					<div class="pa-testimonial-content">' . $name . $content . '</div>
				</div>
			</div>';
		 }
	endif;

	return $out;
}

add_shortcode( 'pa_testimonial','pa_testimonial' );