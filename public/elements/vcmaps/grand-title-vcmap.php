<?php
vc_map( array(
	'name'			=> esc_html__( 'Power Grand Title', 'power-addons' ),
	'base'			=> 'pa_title_p_text',
	'description'	=> esc_html__( 'Grand Title', 'power-addons' ),
	'icon'			=> 'title_p_text',
	'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'params'		=> array(
		array(
			'type'				=> 'dropdown',
			'heading'			=> esc_html__( 'Type', 'power-addons' ),
			'param_name'		=> 'type',
			'value'				=> array(
				'Type 1'	=> '1',
				'Type 2'	=> '2',
				'Type 3'	=> '3',
			),
			'description'		=> esc_html__( 'Choose your type', 'power-addons'),
		),
		array(
			'type'				=> 'dropdown',
			'heading'			=> esc_html__( 'Text Align', 'power-addons' ),
			'param_name'		=> 'align',
			'value'				=> array(
				'none'			=> '',
				'Left'		=> 'alignleft',
				'Right'		=> 'alignright',
				'Center'	=> 'aligncenter',
				),
			'description'		=> esc_html__( 'Choose your type', 'power-addons'),
		),
		array(
			'type'				=> 'textfield',
			'heading'			=> esc_html__('Top Title', 'power-addons'),
			'param_name'		=> 'top_title',
			'value'				=> '',
			'description'		=> esc_html__( 'Please write top title', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),
		array(
			'type'				=> 'colorpicker',
			'heading'			=> esc_html__('Color for Top Title', 'power-addons'),
			'param_name'		=> 'top_title_color',
			'value'				=> '',
			'description'		=> esc_html__( 'Select Top Title color', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),
		array(
			'type'				=> 'textfield',
			'heading'			=> esc_html__('Main Title - part 1', 'power-addons'),
			'param_name'		=> 'top_title_part_1',
			'value'				=> '',
			'description'		=> esc_html__( 'Please write Main Title - part 1', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),
		array(
			'type'				=> 'textfield',
			'heading'			=> esc_html__('Main Title - part 2', 'power-addons'),
			'param_name'		=> 'top_title_part_2',
			'value'				=> '',
			'description'		=> esc_html__( 'Please write Main Title - part 2', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),
		array(
			'type'				=> 'colorpicker',
			'heading'			=> esc_html__('Color for Main Title - part 1', 'power-addons'),
			'param_name'		=> 'top_title_part_1_color',
			'value'				=> '',
			'description'		=> esc_html__( 'Select Main Title - part 1 color', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),
		array(
			'type'				=> 'colorpicker',
			'heading'			=> esc_html__('Color for Main Title - part 2', 'power-addons'),
			'param_name'		=> 'top_title_part_2_color',
			'value'				=> '',
			'description'		=> esc_html__( 'Select Main Title - part 2 color', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),
		array(
			'type'				=> 'textfield',
			'heading'			=> esc_html__('Top Title 2', 'power-addons'),
			'param_name'		=> 'top_title_2',
			'value'				=> '',
			'description'		=> esc_html__( 'Please write top title', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => '2',
			),
		),
		array(
			'type'				=> 'textfield',
			'heading'			=> esc_html__('Main Title', 'power-addons'),
			'param_name'		=> 'main_title',
			'value'				=> '',
			'description'		=> esc_html__( 'Please write Main Title', 'power-addons'),
			'edit_field_class'	=> 'vc_col-sm-6',
			'dependency'		=> array(
				'element' => 'type',
				'value'   => '2',
			),
		),
		array(
			'type'				=> 'textarea',
			'heading'			=> esc_html__('Content', 'power-addons'),
			'param_name'		=> 'text_content',
			'value'				=> '',
			'description'		=> esc_html__( 'Please write Content', 'power-addons'),
			'dependency'		=> array(
				'element' => 'type',
				'value'   => array( '1', '3', ),
			),
		),

		array(
			'type'			=> 'checkbox',
			'heading'		=> esc_html__( 'Use theme default font family?', 'power-addons' ),
			'param_name'	=> 'use_theme_fonts',
			'value'			=> array( 
				esc_html__( 'Yes', 'power-addons' ) => 'yes' 
			),
			'description'	=> esc_html__( 'Use font family from the theme.', 'power-addons' ),
		),
		array(
			'type'			=> 'google_fonts',
			'param_name'	=> 'text_font',
			'value'			=> 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
			'settings'		=> array(
				'fields'	=> array(
					'font_family_description' => esc_html__( 'Select font family.', 'power-addons' ),
					'font_style_description'  => esc_html__( 'Select font styling.', 'power-addons' ),
				),
			),
			'dependency'	=> array(
				'element'				=> 'use_theme_fonts',
				'value_not_equal_to'	=> 'yes',
			),
		),
)
) );