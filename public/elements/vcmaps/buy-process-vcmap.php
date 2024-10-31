<?php
vc_map( array(
	'name'			=> esc_html__( 'Power Buy Process', 'power-addons' ),
	'base'			=> 'pa_buy_process',
	'description'	=> esc_html__( 'Buy Process', 'power-addons' ),
	'icon'			=> 'buy_process',
	'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'params'		=> array(
		array(
			'heading'		=> esc_html__( 'Process Item', 'power-addons' ),
			'description'	=> esc_html__( 'If you want this element cover whole page width, please add it inside of a full row. For this purpose, click on edit button of the row and set Select Row Type on Full Width Row.', 'power-addons' ),
			'type'			=> 'param_group',
			'param_name'	=> 'process_item',
			'params'		=> array(

				array(
					'heading'		=> esc_html__( 'Process Title', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'process_title',
					'value'			=> '',
					'admin_label'	=> true,
				),

				array(
					'heading'		=> esc_html__( 'Process Content', 'power-addons' ),
					'type'			=> 'textarea',
					'param_name'	=> 'process_content',
					'value'			=> '',
				),

				array(
					'type'			=> 'iconpicker',
					'heading'		=> esc_html__( 'Icon', 'power-addons' ),
					'param_name'	=> 'icon_fontawesome',
					'value'			=> 'fa fa-adjust',
					'settings'		=> array(
						'emptyIcon'		=> false,
						'iconsPerPage'	=> 4000,
					),
					'description'	=> esc_html__( 'Select icon from library.', 'power-addons' ),
				),

				array(
					'heading'		=> esc_html__( 'Line number ( or text )', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'line_flag',
					'value'			=> '',
				),

				array(
					'heading'		=> esc_html__( 'Porcess style', 'power-addons' ),
					'type'			=> 'dropdown',
					'param_name'	=> 'process_style',
					'value'			=> array(
						esc_html__( 'Default Porcess', 'power-addons' )	 => 'default',
						esc_html__( 'Featured Porcess', 'power-addons' ) => 'featured',
					),
					'admin_label'	=> true,
				),

			),
		),
		
		array(
			'heading'		=> esc_html__( 'Background Color', 'power-addons' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'bg_color',
			'value'			=> '',
			'description'	=> esc_html__( 'Select custom background color', 'power-addons' ),
		),
) ) );