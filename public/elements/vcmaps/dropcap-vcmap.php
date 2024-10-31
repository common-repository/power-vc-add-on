<?php
vc_map( array(
        'name' =>'Power Dropcap',
        'base' => 'pa_dropcap',
		"description" => "Dropcap",
        'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
         "icon" => "webnus_dropcap",
        'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Dropcap Type', 'power-addons' ),
				'param_name' => 'type',
				'value' => array(
					'Dropcap 1'=>'1',
					'Dropcap 2'=>'2',
					'Dropcap 3'=>'3',
				),
				'description' => esc_html__( 'Specify the Dropcap type', 'power-addons')
			),
			
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Dropcap Character', 'power-addons' ),
				'param_name' => 'dropcap_content',
				'value' => '',
				'description' => esc_html__( 'Specify the Dropcap Text', 'power-addons')
			),
        ),
		
        
    ) );