<?php
vc_map( array(
        'name' =>'Power Countdown',
        'base' => 'pa_countdown',
        "icon" => "icon-wpb-countdown",
		"description" => "Countdown",
        'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        'params' => array(
						array(
							'type' => 'dropdown',
							'heading' => esc_html__( 'Style', 'power-addons' ),
							'param_name' => 'type',
							'value' => array(
								"Modern"=>"modern",
								"Simple"=>"simple",
								"Minimal"=>"minimal",
								"Flip"=>"flip",
							),
							'description' => esc_html__( 'Select Countdown Type', 'power-addons')
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Date and Time', 'power-addons' ),
							'param_name' => 'datetime',
							'value' => '',
							'description' => esc_html__( 'Enter date and time (11October 2016 9:00)', 'power-addons'),
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Finished text', 'power-addons' ),
							'param_name' => 'done',
							'value' => '',
							'description' => esc_html__( 'Finished text', 'power-addons')
						),
						array(
							"type"=>'colorpicker',
							"heading"=>esc_html__('Content color (leave bank for default color)', 'power-addons'),
							"param_name"=> "content_color",
							"value"=>"",
							"description" => esc_html__( "Select content color", 'power-addons'),
							"dependency" => array('element'=>'type','value'=>array('minimal')),
						),
						
        ),
        
    ) );