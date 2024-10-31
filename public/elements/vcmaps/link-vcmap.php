<?php
vc_map( array(
		'name' =>'Power Link',
		'base' => 'pa_link',
		"description" => "Learn more link",
		'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
		"icon" => "webnus_link",
		'params'=>array(
			array(
					'type'			=> 'textfield',
					'heading'		=> esc_html__( 'Link URL', 'power-addons' ),
					'param_name'	=> 'link',
					'value'			=> '#',
					'description'	=> esc_html__( 'Link URL, Example: http://domain.com', 'power-addons')
			),
			array(
					'type'			=> 'textfield',
					'heading'		=> esc_html__( 'Link Text', 'power-addons' ),
					'param_name'	=> 'title',
					'value'			=> 'Link Text',
					'description'	=> esc_html__( 'Link Text (Content)', 'power-addons')
			),
		)

    ) );