<?php
vc_map( array(
	'name'			=> esc_html__( ' Power Pricing Plan ', 'power-addons' ),
	'base'			=> 'pa_pricing-plan',
	'description'	=> esc_html__( 'Power Pricing Plan', 'power-addons' ),
	'icon'			=> 'pricing-plan',
	'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'params'		=> array(

		array(
			'heading'		=> esc_html__( 'Type', 'power-addons' ),
			'description'	=> esc_html__( 'You can choose among these pre-designed types.', 'power-addons'),
			'type'			=> 'dropdown',
			'param_name'	=> 'type',
			'value'			=> array(
				esc_html__( 'Type 1', 'power-addons' ) => '1',
				esc_html__( 'Type 2', 'power-addons' ) => '2',
			),
		),

		array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'power-addons' ),
				'param_name' => 'title',
				'value'=>'',
				'description' => esc_html__( 'Enter title pricing table', 'power-addons'),
		),

		array(
			'heading'		=> esc_html__( 'Features', 'power-addons' ),
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
			'dependency'	=> array( 'element' => 'type', 'value' => '2' ),
		),

		array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Content', 'power-addons' ),
				'param_name' => 'text_content',
				'value'=>'',
				'description' => esc_html__( 'Enter the content Name', 'power-addons'),
				'dependency'	=> array( 'element' => 'type', 'value' => '1' ),	
		),

		array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Flag', 'power-addons' ),
				'param_name' => 'flag',
				'value'		 => array(
					esc_html__( 'None', 'power-addons' )	=> 'none',
					esc_html__( 'Featured', 'power-addons' )	=> 'Featured',
					esc_html__( 'Popular', 'power-addons' )	=> 'Popular',
				),
				'description' => esc_html__( 'Enter the content Name', 'power-addons'),
				'dependency'	=> array( 'element' => 'type', 'value' => '2' ),	
		),

		array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Price', 'power-addons' ),
				'param_name' => 'price',
				'value'=>'$',
				'description' => esc_html__( 'Enter the price Name', 'power-addons'),
			),

		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Link Text', 'power-addons'),
			"param_name"=> "link_text",
			"value"=>"",
			"description" => esc_html__( "Link Text", 'power-addons'),	
		),

		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Link URL', 'power-addons'),
			"param_name"=> "link_url",
			"value"=>"",
			"description" => esc_html__( "Link URL (http://example.com)", 'power-addons'),	
		),

) ) );