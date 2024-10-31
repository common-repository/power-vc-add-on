<?php
class WPBakeryShortCode_pa_testimonial_item extends WPBakeryShortCode {

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
	 	
		'img'=>'',
		'name'=>'',
		'subtitle' => '',
		'testimonial_content' => '',
		'first_social'=>'twitter',
		'first_url'=>'',
		'second_social'=>'facebook',
		'second_url'=>'',
		'third_social'=>'google-plus',
		'third_url'=>'',
		'fourth_social'=>'linkedin',
		'fourth_url'=>'',
		'thumbnail'=>'',
		), $atts));
		

		if(is_numeric($img)){ $img = wp_get_attachment_url( $img ); }
		if ( $thumbnail ) {
			// if main class not exist get it
			if ( !class_exists( 'Wn_Img_Maniuplate' ) ) {
				require_once POWER_ADDONS_DIR .'includes/class-webnus-manuplate.php';
			}

			$arr = explode('*', $thumbnail); // get width and height

			$image = new Wn_Img_Maniuplate; // instance from settor class

			$img = $image->m_image( $img , $arr['0'] , $arr['1'] ); // set required and get result
		}
			
		$out = "<li>";
		$out .= "<div class=\"pa-testimonial\">";		  
		$out .= "<div class=\"pa-testimonial-content\">";		 
		$out .= "<h4><q>".$testimonial_content."</q></h4>";			
		$out .= "<div class=\"pa-testimonial-arrow\"></div>";			  
		$out .= "</div>";			  
		$out .= "<div class=\"pa-testimonial-brand\">";
		if(!empty($img)) $out .= "<img src=\"".$img."\" alt=\"".$name."\">";		
		$out .= "<h5><strong>".$name."</strong><br>";			
		$out .= "<em>".$subtitle."</em></h5>";			  
		
		if ( $first_url || $second_url ||  $third_url || $fourth_url ) :
		$out .= "<div class=\"social-testimonial\"><ul>";
			if(!empty($first_url))
				$out .= '<li class="first-social"><a href="'. esc_url($first_url) .'"><i class="fa-'. $first_social .'"></i></a></li>';
			if(!empty($second_url))
				$out .= '<li class="second-social"><a href="'. esc_url($second_url) .'"><i class="fa-'. $second_social .'"></i></a></li>';
			if(!empty($third_url))
				$out .= '<li class="third-social"><a href="'. esc_url($third_url) .'"><i class="fa-'. $third_social .'"></i></a></li>';
			if(!empty($fourth_url))
				$out .= '<li class="fourth-social"><a href="'. esc_url($fourth_url) .'"><i class="fa-'. $fourth_social .'"></i></a></li>';
		$out .= "</ul></div>";
		endif;

		$out .= "</div>";
		$out .= "</div>";
		$out .= "</li>";	
		
	return $out;
}

}
vc_map( array(
        "name" =>"Power Testimonial Item",
        "base" => "pa_testimonial_item",
		"description" => "Power Testimonials slider",
        "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        "icon" => "webnus_testimonialitem",
        "content_element" => true,
   		"as_child" => array('only' => 'pa_testimonial_slider'), // Use only|except 
        'params'=>array(
							
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Name', 'power-addons' ),
							'param_name' => 'name',
							'value'=>'Name',
							'description' => esc_html__( 'Enter the Testimonial Name', 'power-addons')
					),
					array(
							'type' => 'attach_image',
							'heading' => esc_html__( 'Image', 'power-addons' ),
							'param_name' => 'img',
							'value'=>'http://',
							'description' => esc_html__( 'Testimonial Image', 'power-addons')
					),
					array(
						'type'			=> 'textfield',
						'heading'		=> esc_html__( 'Image Size', 'power-addons' ),
						'param_name'	=> 'thumbnail',
						'value'			=>'',
						'description'	=> esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Subtitle', 'power-addons' ),
							'param_name' => 'subtitle',
							'value'=>'',
							'description' => esc_html__( 'Testimonial Subtitle', 'power-addons')
					),
					array(
							'type' => 'textarea',
							'heading' => esc_html__( 'Content', 'power-addons' ),
							'param_name' => 'testimonial_content',
							'value' => '',
							'description' => esc_html__( 'Enter the Testimonial content text', 'power-addons')
					),

					array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'First Social Name', 'power-addons' ),
							'param_name' => 'first_social',
							 'value' => array(
								"Twitter"=>'twitter',
								"Facebook"=>'facebook',
								"Google Plus"=>'google-plus',
								"Vimeo"=>'vimeo',
								"Dribbble"=>'dribbble',
								"Youtube"=>'youtube',
								"Youtube"=>'youtube',
								"Pinterest"=>'pinterest',
								"LinkedIn"=>'linkedin',
								"Instagram"=>'instagram',
									),
								'std' => 'twitter',
							'description' => esc_html__( 'Select Social Name', 'power-addons'),
					),

					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'First Social URL', 'power-addons' ),
							'param_name' => 'first_url',
							'value'=>'',
							'description' => esc_html__( 'First social URL', 'power-addons'),
					),

					array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Second Social Name', 'power-addons' ),
							'param_name' => 'second_social',
							 'value' => array(
								"Twitter"=>'twitter',
								"Facebook"=>'facebook',
								"Google Plus"=>'google-plus',
								"Vimeo"=>'vimeo',
								"Dribbble"=>'dribbble',
								"Youtube"=>'youtube',
								"Youtube"=>'youtube',
								"Pinterest"=>'pinterest',
								"LinkedIn"=>'linkedin',
								"Instagram"=>'instagram',
									),
								'std' => 'facebook',

							'description' => esc_html__( 'Select Social Name', 'power-addons'),
					),

					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Second Social URL', 'power-addons' ),
							'param_name' => 'second_url',
							'value'=>'',
							'description' => esc_html__( 'Second social URL', 'power-addons'),
					),


					array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Third Social Name', 'power-addons' ),
							'param_name' => 'third_social',
							 'value' => array(
								"Twitter"=>'twitter',
								"Facebook"=>'facebook',
								"Google Plus"=>'google-plus',
								"Vimeo"=>'vimeo',
								"Dribbble"=>'dribbble',
								"Youtube"=>'youtube',
								"Youtube"=>'youtube',
								"Pinterest"=>'pinterest',
								"LinkedIn"=>'linkedin',
								"Instagram"=>'instagram',
									),
								'std' => 'google-plus',
							'description' => esc_html__( 'Select Social Name', 'power-addons'),
					),

					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Third Social URL', 'power-addons' ),
							'param_name' => 'third_url',
							'value'=>'',
							'description' => esc_html__( 'Third social URL', 'power-addons'),
					),

					array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Fourth Social Name', 'power-addons' ),
							'param_name' => 'fourth_social',
							 'value' => array(
								"Twitter"=>'twitter',
								"Facebook"=>'facebook',
								"Google Plus"=>'google-plus',
								"Vimeo"=>'vimeo',
								"Dribbble"=>'dribbble',
								"Youtube"=>'youtube',
								"Youtube"=>'youtube',
								"Pinterest"=>'pinterest',
								"LinkedIn"=>'linkedin',
								"Instagram"=>'instagram',
								),
								'std' => 'linkedin',
							'description' => esc_html__( 'Select Social Name', 'power-addons'),
					),

					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Fourth Social URL', 'power-addons' ),
							'param_name' => 'fourth_url',
							'value'=>'',
							'description' => esc_html__( 'Fourth social URL', 'power-addons'),
					),

		),
		
        
    ) );