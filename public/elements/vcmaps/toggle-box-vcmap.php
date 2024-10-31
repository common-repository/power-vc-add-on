<?php
vc_map( array(
		'name'			=> esc_html__( 'PowerToggle box', 'power-addons' ),
		'base'			=> 'pa_toggle_box',
		'description'	=> esc_html__( 'Power toggle box', 'power-addons' ),
		'icon'			=> 'webnus-services',
		'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
		'params'		=> array(
			array(
				'type'				=> 'dropdown',
				'heading'			=> esc_html__('Type', 'power-addons'),
				'param_name'		=> 'type',
				'value'				=> array(
					'Type 1' => '1',
					'Type 2' => '2',
					),
				'description'		=> esc_html__( 'Please select type', 'power-addons'),
				'edit_field_class'	=> 'vc_col-sm-6',
			),
			array(
				'type'				=> 'textfield',
				'heading'			=> esc_html__('Service Title', 'power-addons'),
				'param_name'		=> 'service_single_title',
				'value'				=> '',
				'description'		=> esc_html__( 'Please write Service Title', 'power-addons'),
				'edit_field_class'	=> 'vc_col-sm-6',
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('1',),
                ),
			),
			array(
				'type'				=> 'textarea',
				'heading'			=> esc_html__('Content', 'power-addons'),
				'param_name'		=> 'service_single_content',
				'value'				=> '',
				'description'		=> esc_html__( 'Please write Content', 'power-addons'),
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('1',),
                ),
			),

            array(
                'type'              => 'attach_image',
                'heading'           => esc_html__( 'Background Image', 'power-addons' ),
                'param_name'        => 'background_image',
                'value'             =>'',
                'description'       => wp_kses( __( 'Select Image for background<br>Note: If you have another Icon that not is here. You can put PNG image of that instead of these Icons.', 'power-addons'), array( 'br' => array() ) ),
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('2',),
                ),
            ),
            array(
                'type'              => 'colorpicker',
                'heading'           => esc_html__('Background Color', 'power-addons'),
                'param_name'        => 'bgcolor',
                'value'             => '',
                'description'       => esc_html__( 'Select Background color', 'power-addons'),
            ),
            array(
                'type'              => 'textfield',
                'heading'           => esc_html__('Subtitle', 'power-addons'),
                'param_name'        => 'offers_subtitle',
                'value'             => '',
                'description'       => esc_html__( 'Please write Offer Subtitle', 'power-addons'),
                'edit_field_class'  => 'vc_col-sm-6',
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('2',),
                ),
            ),
            array(
                'type'              => 'textfield',
                'heading'           => esc_html__('Title', 'power-addons'),
                'param_name'        => 'offers_title',
                'value'             => '',
                'description'       => esc_html__( 'Please write Offer Title', 'power-addons'),
                'edit_field_class'  => 'vc_col-sm-6',
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('2',),
                ),
            ),
            array(
                'type'              => 'textfield',
                'heading'           => esc_html__('Minimum Height', 'power-addons'),
                'param_name'        => 'min_height',
                'value'             => '',
                'description'       => esc_html__( 'Please Enter Minimum Height (just write number, like: 575)', 'power-addons'),
                'edit_field_class'  => 'vc_col-sm-6',
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('2',),
                ),
            ),
            array(
                'type'              => 'checkbox',
                'heading'           => esc_html__('Do you want the content open as default?', 'power-addons'),
                'description'       => esc_html__('Please check to enable this feature. ', 'power-addons'),
                'std'               => 'true',
                'param_name'        => 'open',
                'edit_field_class'  => 'vc_col-sm-6',
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('2',),
                ),
            ),
            array(
                'type'              => 'textarea',
                'heading'           => esc_html__('Content', 'power-addons'),
                'param_name'        => 'offers_content',
                'value'             => '',
                'description'       => esc_html__( 'Please write Content', 'power-addons'),
                'dependency'		=> array(
                	'element' => 'type',
                	'value' => array('2',),
                ),
            ),
            array(
                'type'              => 'pa_iconfonts',
                'heading'           => esc_html__( 'Icon', 'power-addons' ),
                'param_name'        => 'icon_name',
                'value'             => '',
                'description'       => esc_html__( 'Select Icon', 'power-addons'),
                'group'             => 'Icons',
            ),
		)
	)
);