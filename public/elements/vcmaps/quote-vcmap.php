<?php
vc_map( array(
        'name' =>'Power Quote',
        'base' => 'pa_quote',
		"description" => "Quote",
        "icon" => "webnus_quote",
        'params'=>array(

					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Name', 'power-addons' ),
							'param_name' => 'name',
							'value'=>'',
							'description' => esc_html__( 'Enter the Name', 'power-addons')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Name Subtitle', 'power-addons' ),
							'param_name' => 'name_sub',
							'value'=>'',
							'description' => esc_html__( 'Enter the Name Subtitle', 'power-addons')
					),
					
					
					
					array(
							'type' => 'textarea',
							'heading' => esc_html__( 'Content', 'power-addons' ),
							'param_name' => 'text',
							'value' => '',
							'description' => esc_html__( 'Enter the Quote of the Week content text', 'power-addons')
					),
		),
		'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        
    ) );