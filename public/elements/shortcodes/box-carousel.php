<?php
function pa_service_carousel ( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'carousel_item'				=> '',
		'item_carousle'				=> '3',
	), $atts ));

		// Fetch Carousle Item Loop Variables
		$carousel_item = (array) vc_param_group_parse_atts( $carousel_item );
		$carousel_item_data = array();

		foreach ( $carousel_item as $data ) {
			$new_line 						= $data;
			// $new_line['service_icon'] 		= isset( $new_line['service_icon'] )	? $new_line['service_icon']: '';
			$new_line['service_title'] 		= isset( $new_line['service_title'] )	? $new_line['service_title']: '';
			$new_line['service_content'] 	= isset( $new_line['service_content'] )	? $new_line['service_content']: '';
			$new_line['service_image'] 		= isset( $new_line['service_image'] )	? $new_line['service_image']: '';
			$new_line['thumbnail'] 			= isset( $new_line['thumbnail'] )	? $new_line['thumbnail']: '';
			$carousel_item_data[]			= $new_line;
		}
		// Render
		$out = '
			<div class="clearfix">
				<div class="container">
					<div id="pa-wrap" class="pa-wrap">
						<div class="pa-our-service-carousel-wrap owl-carousel owl-theme" data-items="' . $item_carousle . '" >';
						foreach ( $carousel_item_data as $line ) :
						// if image is numeric, return image url
						if( is_numeric( $line['service_image'] ) )
							$line['service_image'] = wp_get_attachment_url( $line['service_image'] );

						// crop image if thumbnail is set
						if ( $line['thumbnail'] ) {
							// if main class not exist get it
							if ( !class_exists( 'Wn_Img_Maniuplate' ) ) {
								require_once POWER_ADDONS_DIR .'includes/class-webnus-manuplate.php';
							}

							$arr = explode('*', $line['thumbnail']); // get width and height

							$image = new Wn_Img_Maniuplate; // instance from settor class

							$line['service_image'] = $image->m_image( $line['service_image'] , $arr['0'] , $arr['1'] ); // set required and get result
						}

						$line['service_image'] 			= is_numeric( $line['service_image'] ) ? wp_get_attachment_url( $line['service_image'] ) : $line['service_image'];
						$line['service_image'] 			= $line['service_image'] 	? '<img src="' . $line['service_image'] . '" alt="' . $line['service_title'] . '">' : '' ;
						// $line['service_icon'] 			= $line['service_icon'] 	? '<i class="' . $line['service_icon'] . '"></i>' : '' ;
						$line['service_title'] 			= $line['service_title'] 	? '<h2>' . $line['service_title'] . '</h2>' : '' ;
						$line['service_content'] 		= $line['service_content'] 	? '<p>' . $line['service_content'] . '</p>' : '' ;

						$out .='
						<div class="services-carousel">
							' . $line['service_image'] . '
							<div class="tdetail">
								' . $line['service_title'] . $line['service_content'] . '
							</div>
						</div>';
						endforeach;
		$out .='
						</div>
					</div>
				</div>
			</div>';

	return $out;

}
	add_shortcode( 'pa_service_carousel','pa_service_carousel' );
