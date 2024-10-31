<?php
vc_map( array(
	'base'			=> 'pa_pricing-tables',
	'name'			=> 'Power Pricing Tables',
	'description'	=> 'Power Pricing Tables',
	'icon'			=> 'webnus_pricingtable',
	'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),

	'params' => array(

		array(
			'heading'		=> esc_html__( 'Type', 'power-addons' ),
			'description'	=> esc_html__( 'You can choose among these pre-designed types.', 'power-addons'),
			'type'			=> 'dropdown',
			'param_name'	=> 'type',
			'value'			=> array(
				esc_html__( 'Type 1', 'power-addons' ) => '1',
				esc_html__( 'Type 2', 'power-addons' ) => '2',
				esc_html__( 'Type 3', 'power-addons' ) => '3',
				esc_html__( 'Type 4', 'power-addons' ) => '4',
				esc_html__( 'Type 5', 'power-addons' ) => '5',
				esc_html__( 'Type 6', 'power-addons' ) => '6',
				esc_html__( 'Type 7', 'power-addons' ) => '7',
			),
		),

		array(
			'heading'		=> esc_html__( 'Title', 'power-addons' ),
			'description' 	=> esc_html__( 'Pricing Table Title', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'title',
		),

		array(
			'heading'		=> esc_html__( 'Header Description', 'power-addons' ),
			'description' 	=> esc_html__( 'Pricing Table Description', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'description',
			'dependency'	=> array( 'element' => 'type', 'value' => '4' ),
		),

		array(
			'heading'		=> esc_html__( 'Featured text', 'power-addons' ),
			'type'			=> 'textfield',
			'param_name'	=> 'featured_text',
			'value'			=> '',
			'dependency'	=> array( 'element' => 'type', 'value' => '7' ),
		),

		array(
			'heading'		=> esc_html__( 'Price', 'power-addons' ),
			'description'	=> esc_html__( 'Pricing Table Price', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'price',
			'value'			=> '$10',
		),

		array(
			'heading'		=> esc_html__( 'Special Offer', 'power-addons' ),
			'description'	=> esc_html__( 'Pricing Table Special Offer or On Sale Price', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'on_sale_price',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Plan Label', 'power-addons' ),
			'description'	=> esc_html__( 'Pricing Table Label', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'plan_label',
			'value'			=> '',
			'dependency'	=> array( 'element' => 'type', 'value' => array( '3', '5' ) ),
		),

		array(
			'heading'		=> esc_html__( 'Label Color', 'power-addons' ),
			'description' 	=> esc_html__( 'Select Custom Label Color', 'power-addons'),
			'type'			=> 'colorpicker',
			'param_name'	=> 'label_bg_color',
			'dependency'	=> array( 'element' => 'type', 'value' => '5' ),
		),

		array(
			'heading'		=> esc_html__( 'Period', 'power-addons' ),
			'description'	=> esc_html__( 'Pricing Table Period', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'period',
			'value'			=> esc_html__( 'Month', 'power-addons'),
		),

		array(
			'heading'		=> esc_html__( 'Features', 'power-addons' ),
			'description'	=> esc_html__( 'Enter features for pricing table - value, title and color.', 'power-addons' ),
			'type'			=> 'param_group',
			'param_name'	=> 'features',
			'params' => array(
				array(
					'heading'	 => esc_html__( 'Feature Item Icon', 'power-addons' ),
					'type'		 => 'dropdown',
					'param_name' => 'feature_icon',
					'value'		 => array(
						esc_html__( 'Empty', 'power-addons' )			=> 'empty-icon',
						esc_html__( 'Available', 'power-addons' )		=> 'available-icon',
						esc_html__( 'Not Available', 'power-addons' )	=> 'not-available-icon',
					),
					'admin_label'	=> true,
				),
				array(
					'heading'		=> esc_html__( 'Feature Item Text', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'feature_item',
					'admin_label'	=> true,
				),
			),
		),

		array(
			'heading'		=> esc_html__( 'Footer Pricing Table Text', 'power-addons' ),
			'type'			=> 'textfield',
			'param_name'	=> 'footer_text',
			'value'			=> '',
		),		

		array(
			'heading'		=> esc_html__( 'Button Text', 'power-addons' ),
			'type'			=> 'textfield',
			'param_name'	=> 'button_text',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Button URL', 'power-addons' ),
			'description'	=> esc_html__( 'Button URL (http://example.com)', 'power-addons' ),	
			'type'			=> 'textfield',
			'param_name'	=> 'button_url',
			'value'			=> '',
		),

		array(
			'type'			=> 'checkbox',
			'heading'		=> esc_html__( 'Featured Plan ?', 'power-addons' ),
			'param_name'	=> 'featured',
			'value'			=> array( esc_html__( 'Yes', 'power-addons' ) => ' w-featured' ),
			'description'	=> esc_html__( 'Pricing Tables Featured Plan', 'power-addons'),
		),

		array(
			'heading'		=> esc_html__('Plan Icon', 'power-addons'),
			'type'			=> 'pa_iconfonts',
			'param_name'	=> 'icon',
			'value'			=> '',
			'dependency'	=> array(
				'element' => 'type',
				'value'   => '2',
			),
		),

		array(
			'heading'		=> esc_html__( 'Heading Background Color', 'power-addons' ),
			'description' 	=> esc_html__( 'Select Custom Background Color', 'power-addons'),
			'type'			=> 'colorpicker',
			'param_name'	=> 'heading_bg_color',
			'dependency'	=> array( 'element' => 'type', 'value' => '6' ),
		),

		array(
			'heading'		=> esc_html__( 'Heading Text Color', 'power-addons' ),
			'description' 	=> esc_html__( 'Select Custom Text Color', 'power-addons'),
			'type'			=> 'colorpicker',
			'param_name'	=> 'heading_text_color',
			'dependency'	=> array( 'element' => 'type', 'value' => '6' ),
		),
	)

) );