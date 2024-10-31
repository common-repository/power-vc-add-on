<?php
vc_map( array(
        'name' =>'Power Ministry',
        'base' => 'pa_ministry',
		'description' => 'Introduce Ministries',
		'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ), 
        'icon' => 'ministry',
        'params'=>array(

        	array(
					"type" => "dropdown",
					"heading" => esc_html__( "Type", 'power-addons' ),
					"param_name" => "type",
					"value" => array(
						"Type 1"=>"1",
						"Type 2"=>"2",						
				),
				"description" => esc_html__( "Select style type", 'power-addons')
			),		
		
			array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Ministry Name', 'power-addons' ),
					'param_name' => 'ministry_name',
					'value'=>'',
					'description' => esc_html__( 'Ministry name', 'power-addons')
			),		
			array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Ministry Image', 'power-addons' ),
					'param_name' => 'ministry_img',
					'value'=>'',
					'description' => esc_html__( 'Ministry image', 'power-addons')
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Image Size', 'power-addons' ),
				'param_name' => 'thumbnail',
				'value'=>'',
				'description' => esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
			),
			array(
					"type"=>'colorpicker',
					"heading"=>esc_html__('Main color (leave bank for default color)', 'power-addons'),
					"param_name"=> "color",
					"value"=>"",
					"dependency" => array('element'=>'type','value'=>array('1')),
					"description" => esc_html__( "Select title color", 'power-addons')
			),
			array(
					'type' => 'textarea',
					'heading' => esc_html__( 'Ministry Description Text', 'power-addons' ),
					'param_name' => 'text',
					'value'=>'',
					'description' => esc_html__( 'Ministry description text', 'power-addons')
			),
			array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Ministry Director Name', 'power-addons' ),
					'param_name' => 'director_name',
					'value'=>'',
					"dependency" => array('element'=>'type','value'=>array('1')),
					'description' => esc_html__( 'Ministry director name', 'power-addons')
			),
			array(
					'type' => 'attach_image',
					'heading' => esc_html__( 'Ministry Director Image', 'power-addons' ),
					'param_name' => 'director_img',
					'value'=>'',
					"dependency" => array('element'=>'type','value'=>array('1')),
					'description' => esc_html__( 'Ministry director image', 'power-addons')
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Image Size', 'power-addons' ),
				'param_name' => 'thumbnail2',
				'value'=>'',
				'description' => esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
			),
			array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Ministry Link URL', 'power-addons' ),
					'param_name' => 'link',
					'value'=>'',
					'description' => esc_html__( 'Ministry link url', 'power-addons')
			),
		),
    ) );