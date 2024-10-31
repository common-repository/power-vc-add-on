<?php
vc_map( array(
    "name" =>"Power Divider",
    "base" => "pa_webnus-divider",
	"description" => "separator with title and icon",
	"icon" => "webnus_divider",
    "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
    "params" => array(
		   array(
				"type" => "dropdown",
				"heading" => esc_html__( "Type", 'power-addons' ),
				"param_name" => "type",
				"value" => array(
					"Type 1"=>"1", // Center + Icon
					"Type 2"=>"2", // Center + Icon
					"Type 3"=>"3", // Left
					"Type 4"=>"4", // Left
					"Type 5"=>"5", // Center + Icon
					"Type 6"=>"6", // Left + Icon + Desc
					"Type 7"=>"7", // Left
					"Type 8"=>"8", // Center + Icon + Desc
					"Type 9"=>"9", // Center
			),
			"description" => esc_html__( "Title Type", 'power-addons')
			),			
						
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title Part 1', 'power-addons' ),
				'param_name' => 'lspan',
				'value'=>'',
				'description' => esc_html__( 'Enter the first span text ', 'power-addons')
			),
			
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title Part 2', 'power-addons' ),
				'param_name' => 'rspan',
				'value'=>'',
				'description' => esc_html__( 'Enter the second span text', 'power-addons')
			),	

            array(
				"type"=>'textarea',
				"heading"=>esc_html__('Description', 'power-addons'),
				"param_name"=> "description",
				"value"=>"",
				"description" => esc_html__( "Enter the description text", 'power-addons'),
				"dependency" => array('element'=>'type','value'=>array('6','8')),
			),			
					
            array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Color', 'power-addons'),
				"param_name"=> "color",
				"value"=>"",
				"description" => esc_html__( "Select color for icon and second span", 'power-addons')
				
			),
			
            array(
                "type" => "pa_iconfonts",
                "heading" => esc_html__( "Icon", 'power-addons' ),
                "param_name" => "icon",
                'value'=>'',
                "description" => esc_html__( "Select Icon", 'power-addons'),
				"dependency" => array('element'=>'type','value'=>array('1','2','5','6','8')),
            ),
           
        ),
		
        
    ) );