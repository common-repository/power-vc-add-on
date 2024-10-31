<?php
function pa_image_carousel ( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'image_item'		=> '',
		'item_carousle'		=> '',
		'image'				=> '',
		'thumbnail'			=> '',
	), $atts ));


		// Fetch Carousle Item Loop Variables
		$image_item = (array) vc_param_group_parse_atts( $image_item );
		$image_item_data = array();

		foreach ( $image_item as $data ) {
			$new_line 					= $data;
			$new_line['image'] 			= isset( $new_line['image'] )	? $new_line['image']: '';
			$new_line['thumbnail'] 		= isset( $new_line['thumbnail'] )	? $new_line['thumbnail']: '';
			$image_item_data[]			= $new_line;
		}
		$item_carousle = $item_carousle ? $item_carousle : '3' ;
		
		// Render
		$out = '
			<div class="clearfix">
				<div class="container">
					<div id="pa-wrap" class="pa-wrap">
						<div class="pa-w-image-carousel owl-carousel owl-theme" data-items="' . $item_carousle . '" >';
							foreach ( $image_item_data as $line ) {
								// if image is numeric, return image url
								if( is_numeric( $line['image'] ) )
									$line['image'] = wp_get_attachment_url( $line['image'] );

								// crop image if thumbnail is set
								if ( $line['thumbnail'] ) {
									// if main class not exist get it
									if ( !class_exists( 'Wn_Img_Maniuplate' ) ) {
										require_once POWER_ADDONS_DIR .'includes/class-webnus-manuplate.php';
									}

									$arr = explode('*', $line['thumbnail']); // get width and height

									$image = new Wn_Img_Maniuplate; // instance from settor class

									$line['image'] = $image->m_image( $line['image'] , $arr['0'] , $arr['1'] ); // set required and get result
								}
								$image_info = is_numeric( $line['image'] ) ? wp_get_attachment_metadata( $line['image'] ) : '';
								$line['image']	= $line['image'] 	? '<img src="' . $line['image'] . '" alt="'.$image_info['file'].'">' : '' ;
								$out .='
								<div class="pa-services-carousel">
									' . $line['image'] . '
								</div>';
							}
			$out .='
						</div>
					</div>
				</div>
			</div>';

	return $out;

}
	add_shortcode( 'pa_imagecarousel','pa_image_carousel' );