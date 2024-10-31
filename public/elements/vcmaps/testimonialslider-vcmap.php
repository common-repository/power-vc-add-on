<?php
class WPBakeryShortCode_pa_testimonial_slider extends WPBakeryShortCodesContainer {

    /*
     * Thi methods returns HTML code for frontend representation of your shortcode.
     * You can use your own html markup.
     *
     * @param $atts - shortcode attributes
     * @param @content - shortcode content
     *
     * @access protected
     *
     * @return string
     */

    protected function content($atts, $content = null) {

	  	extract(shortcode_atts(array(
		"type" => 'mono',		
		), $atts));


		$out = '<div id="pa-wrap" class="pa-wrap"><div class="pa-testimonials-slider-w flexslider ts-'.$type.'">';
		$out .= '<ul class="slides">';
		$out .= do_shortcode( $content );
		$out .= '</ul></div></div>';
	
	return $out;
}

}




vc_map( array(
    "name" => "Power Testimonial Slider",
    "base" => "pa_testimonial_slider",
    "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
    "icon" => "webnus_testimonialslider",
    "as_parent" => array('only' => 'pa_testimonial_item'), // Use only|except attributes to limit child shortcodes (separate multiple values with comma)
    "content_element" => true,
    
    "params" => array(
        // add params same as with any other content element
		 array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'power-addons' ),
			"param_name" => "type",
			"value" => array(
				"One"=>"mono",
				"Two"=>"di",
				"Three"=>"tri",
                "Four"=>"tetra",       
				"Five"=>"penta",		
			),
			"description" => esc_html__( "Select Image", 'power-addons')
		), 
    ),
    "js_view" => 'VcColumnView'
) );