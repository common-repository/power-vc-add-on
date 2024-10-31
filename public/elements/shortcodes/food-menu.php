<?php
function power_addon_food_menu( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'type'		  => '1',
		'img'		  => '',
		'title'		  => '',
		'price'		  => '$10',
		'description' => '',
		'ingredients' => '',
		'food_menu2'  => '',
	), $atts));
	
	if( is_numeric( $img ) )
		$img = wp_get_attachment_url( $img );
	
	$out  = '';
	if (function_exists('vc_param_group_parse_atts')){
		switch ( $type ) :
			// type 1 or 3 or 4
			case '1':
			case '3':
			case '4':
				$ingredients_data = '';
				if ( $type == 1 ) : 
					$ingredients = (array) vc_param_group_parse_atts( $ingredients );
					foreach ( $ingredients as $data ) :
						$ingredients_data .= isset( $data['ingredient'] ) ? $data['ingredient'] . '<br>' : '';
					endforeach;
					$ingredients_data = '<p>' . wp_kses( $ingredients_data, array( 'br' => array() ) ) . '</p>';
					$menu_class = 'menu-dts';
				else :
					$description = $description ? '<div class="w' . $type . '-menu-dts">' . $description . '</div>' : '';
					$menu_class = 'w' . $type . '-menu-top';
				endif;
				$out .= '
                <div class="pa-wrap" id="pa-wrap">
    				<div class="food-menu-w' . $type . '">
    					<img src="' . esc_url( $img ) . '" alt="' . esc_html( $title ) . '">
    					<div class="' . $menu_class . '">
    						<h3>' . esc_html( $title ) . '</h3>
    						<h5 class="colorf">' . esc_html( $price ) . '</h5>
    						' . $ingredients_data . '
    					</div>
    					' . $description . '
    				</div>
                </div>
                ';
			break;
			
			// type 2
			case '2':
				$food_menu2 = (array) vc_param_group_parse_atts( $food_menu2 );
				$food_menu2_data = array();
				foreach ( $food_menu2 as $data ) :
					$new_line = $data;
					$new_line['title'] = isset( $data['title'] ) ? $data['title'] : '';
					$new_line['price'] = isset( $data['price'] ) ? $data['price'] : '';
					$new_line['description'] = isset( $data['description'] ) ? $data['description'] : '';
					$new_line['food_style'] = isset( $data['food_style'] ) && $data['food_style'] == 'featured-w2' ? ' ' . $data['food_style'] : '';
					$new_line['featured_text'] = isset( $data['featured_text'] ) ? $data['featured_text'] : '';
					$food_menu2_data[] = $new_line;
				endforeach;
				$out .= '
                <div class="pa-wrap" id="pa-wrap">
                    <div class="food-menu-w2">';
    				foreach ( $food_menu2_data as $line ) :
    					$featured_text = $line['food_style'] ? '<span class="fm-w2-featured">' . $line['featured_text'] . '</span>' : '';
    					$out .= '
    					<div class="fm-w2-item' . $line['food_style'] . '">
    						<div class="fm-w2-top">
    							<span class="fm-w2-name">' . $line['title'] . '</span>
    							<span class="fm-w2-price">' . $line['price'] . '</span>
    						</div>
    						<div class="fm-w2-des">' . $line['description'] . '</div>
    						' . $featured_text . '
    					</div>';
    				endforeach;
    				$out .= '</div>
                </div>
                ';
			break;
		endswitch;
	}
	
	return $out;
}

add_shortcode('pa_food_menu', 'power_addon_food_menu');