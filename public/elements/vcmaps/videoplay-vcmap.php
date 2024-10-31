<?php
vc_map( array(
        "name" =>"Power Video Play Button",
        "base" => "pa_videoplay",
		"description" => "Power Video Play Button",
		"icon" => "webnus_videoplay",
        "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        "params" => array(
		
  			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Video URL', 'power-addons' ),
				'param_name' => 'link',
				'value' => '#',
				'description' => esc_html__( 'YouTube/Vimeo URL', 'power-addons')
			),
					
             array(
				"type"=>'textfield',
				"heading"=>esc_html__('Icon Size', 'power-addons'),
				"param_name"=> "size",
				"value"=>"",
				"description" => esc_html__( "Icon size in px format, Example: 80px", 'power-addons')
				
			),
			array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Icon color', 'power-addons'),
				"param_name"=> "color",
				"value"=>"",
				"description" => esc_html__( "Select icon color", 'power-addons')
				
			),
			 array(
				"type"=>'textfield',
				"heading"=>esc_html__('Extra Class', 'power-addons'),
				"param_name"=> "link_class",
				"value"=>"",
				"description" => esc_html__( "Extra Class ", 'power-addons')
				
			),
           
        ),
		
        
    ) );