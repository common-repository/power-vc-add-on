<?php
vc_map( array(
	'name' =>'Power Teaser Box',
	'base' => 'pa_teaserbox',
	'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'description' => 'Image and icon with text article',
	'icon' => 'webnus_teaserbox',
	'params'=>array(
		array(
			'type'       => 'dropdown',
			'heading'    => esc_html__( 'Type', 'power-addons' ),
			'param_name' => 'type',
			'value'      => array(
				'Type 1'=>'1',
				'Type 2'=>'2',
				'Type 3'=>'3',
				'Type 4'=>'4',
				'Type 5'=>'5',
				'Type 6'=>'6',
				'Type 7'=>'7',
                'Type 8'=>'8',
                'Type 9'=>'9',
			),
			'description' => esc_html__( 'TeaserBox Type', 'power-addons')
		),
		array(
			'type'           => 'attach_image',
			'heading'        => esc_html__( 'Image', 'power-addons' ),
			'param_name'     => 'img',
			'value'          =>'',
			'description'    => esc_html__( 'TeaserBox Image', 'power-addons')
		),
        array(
            'type'          => 'textfield',
            'heading'       => esc_html__( 'Image Size', 'power-addons' ),
            'param_name'    => 'thumbnail',
            'value'         =>'',
            'description'   => esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
        ),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Title', 'power-addons' ),
			'param_name'     => 'title',
			'value'          =>'',
			'description'    => esc_html__( 'Enter the Title', 'power-addons')
		),
        array(
            'type'           => 'checkbox',
            'heading'        => esc_html__( 'Border for Title', 'power-addons' ),
            'param_name'     => 'border',
            'value'          => '',
            'description'    => esc_html__( 'Do you want border for title?', 'power-addons'),
            'dependency'     => array(
                'element' => 'type',
                'value'   => '8',
            ),
        ),
        array(
            'type'           => 'colorpicker',
            'heading'        => esc_html__( 'Border Color', 'power-addons' ),
            'param_name'     => 'border_color',
            'value'          => '',
            'description'    => esc_html__( 'Select color for border', 'power-addons'),
            'dependency'     => array(
                'element' => 'type',
                'value'   => '8',
            ),
        ),
        array(
            'type'           => 'textfield',
            'heading'        => esc_html__( 'Featured Text', 'power-addons' ),
            'param_name'     => 'featured',
            'value'          => '',
            'description'    => esc_html__( 'Enter your text here', 'power-addons'),
            'dependency'     => array(
                'element' => 'type',
                'value'   => '5',
            ),
        ),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Subtitle', 'power-addons' ),
			'param_name'     => 'subtitle',
			'value'          => '',
			'description'    => esc_html__( 'Enter the Subtitle', 'power-addons'),
            'dependency'        => array(
                'element' => 'type',
                'value'   => array(
                    '1',
                    '2',
                    '3',
                    '4',
                    '5',
                    '6',
                    '7',
                    '8',
                ),
            ),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Link URL', 'power-addons' ),
			'param_name'     => 'link_url',
			'value'          =>'#',
			'description'    => esc_html__( 'Enter the link url. Example: http://yourdomain.com', 'power-addons'),
		),
		array(
			'type'           => 'textfield',
			'heading'        => esc_html__( 'Image alt', 'power-addons' ),
			'param_name'     => 'img_alt',
			'value'          =>'',
			'description'    => esc_html__( 'Enter the image alt Text', 'power-addons'),
		),
        array(
            'type'              => 'textarea',
            'heading'           => esc_html__('Content', 'power-addons'),
            'param_name'        => 'text_content',
            'value'             => '',
            'description'       => esc_html__( 'Please write Content', 'power-addons'),
            'dependency'        => array(
                'element' => 'type',
                'value'   => '8',
            ),
        ),
	),
));