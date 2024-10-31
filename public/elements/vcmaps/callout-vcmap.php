<?php
vc_map( array(
        'name' =>'Power Webnus Callout',
        'base' => 'pa_callout',
		"description" => "Call to action + button",
        "icon" => "webnus_callout",
        'params'=>array(

					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Title', 'power-addons' ),
							'param_name' => 'title',
							'value'=>'',
							'description' => esc_html__( 'Enter the Callout title', 'power-addons')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Button Text', 'power-addons' ),
							'param_name' => 'button_text',
							'value'=>'',
							'description' => esc_html__( 'Callout Button text', 'power-addons')
					),
					array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Button Link', 'power-addons' ),
							'param_name' => 'button_link',
							'value'=>'',
							'description' => esc_html__( 'Button Link URL', 'power-addons')
					),
					array(
							'type' => 'textarea',
							'heading' => esc_html__( 'Content Text', 'power-addons' ),
							'param_name' => 'text',
							'value' => '',
							'description' => esc_html__( 'Enter the Callout content text', 'power-addons')
					),
		),
		'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        
    ) );