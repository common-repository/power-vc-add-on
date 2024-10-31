<?php
vc_map(array(
	'name'		  => esc_html__( 'Power Food Menu', 'power-addons' ),
	'base'		  => 'pa_food_menu',
	'description' => esc_html__( 'Create Your Food Menu', 'power-addons' ),
	'icon'		  => 'food_menu',
	'category'	  => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'params'	  => array(

		array(
			'heading'	  => esc_html__( 'Type', 'power-addons' ),
			'description' => esc_html__( 'You can choose among these pre-designed types.', 'power-addons'),
			'type'		  => 'dropdown',
			'param_name'  => 'type',
			'value'		  => array(
				esc_html__( 'Type 1', 'power-addons' ) => '1',
				esc_html__( 'Type 2', 'power-addons' ) => '2',
				esc_html__( 'Type 3', 'power-addons' ) => '3',
				esc_html__( 'Type 4', 'power-addons' ) => '4',
			),
		),

		array(
			'heading'	 => esc_html__( 'Food Menu Image', 'power-addons' ),
			'type'		 => 'attach_image',
			'param_name' => 'img',
			'dependency' => array( 'element' => 'type', 'value' => array( '1', '3', '4' ) ),
		),

		array(
			'heading'	  => esc_html__( 'Title', 'power-addons' ),
			'description' => esc_html__( 'Food Menu Title', 'power-addons'),
			'type'		  => 'textfield',
			'param_name'  => 'title',
			'dependency'  => array( 'element' => 'type', 'value' => array( '1', '3', '4' ) ),
		),

		array(
			'heading'		=> esc_html__( 'Price', 'power-addons' ),
			'description'	=> esc_html__( 'Food Menu Price', 'power-addons'),
			'type'			=> 'textfield',
			'param_name'	=> 'price',
			'value'			=> '$10',
			'dependency' 	=> array( 'element' => 'type', 'value' => array( '1', '3', '4' ) ),
		),

		array(
			'heading'	  => esc_html__( 'Description', 'power-addons' ),
			'description' => esc_html__( 'Food Menu Description', 'power-addons'),
			'type'		  => 'textfield',
			'param_name'  => 'description',
			'dependency'  => array( 'element' => 'type', 'value' => array( '3', '4' ) ),
		),

		array(
			'heading'		=> esc_html__( 'Ingredients', 'power-addons' ),
			'description'	=> esc_html__( 'Enter Ingredients.', 'power-addons' ),
			'type'			=> 'param_group',
			'param_name'	=> 'ingredients',
			'params' => array(
				array(
					'heading'		=> esc_html__( 'Ingredient', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'ingredient',
					'admin_label'	=> true,
				),
			),
			'dependency' => array( 'element' => 'type', 'value' => '1' ),
		),

		// start type 2
		array(
			'heading'		=> esc_html__( 'Food Items', 'power-addons' ),
			'description'	=> esc_html__( 'Enter Title, Price and Description. ', 'power-addons' ),
			'type'			=> 'param_group',
			'param_name'	=> 'food_menu2',
			'params' => array(
				array(
					'heading'	  => esc_html__( 'Title', 'power-addons' ),
					'description' => esc_html__( 'Food Menu Title', 'power-addons'),
					'type'		  => 'textfield',
					'param_name'  => 'title',
					'admin_label' => true,
				),
				array(
					'heading'	  => esc_html__( 'Price', 'power-addons' ),
					'description' => esc_html__( 'Food Menu Price', 'power-addons'),
					'type'		  => 'textfield',
					'param_name'  => 'price',
					'value'		  => '$10',
					'admin_label' => true,
				),
				array(
					'heading'	  => esc_html__( 'Description', 'power-addons' ),
					'description' => esc_html__( 'Food Menu Description', 'power-addons'),
					'type'		  => 'textfield',
					'param_name'  => 'description',
					'value'		  => 'Soup / Lemon / Garlic',
				),
				array(
					'heading'		=> esc_html__( 'Food Item Style', 'power-addons' ),
					'type'			=> 'dropdown',
					'param_name'	=> 'food_style',
					'value'			=> array(
						esc_html__( 'Default Food Item', 'power-addons' )	=> 'default',
						esc_html__( 'Featured Food Item', 'power-addons' )	=> 'featured-w2',
					),
					'admin_label' => true,
				),
				array(
					'heading'	  => esc_html__( 'Featured Text', 'power-addons' ),
					'type'		  => 'textfield',
					'param_name'  => 'featured_text',
					'value'		  => 'Recommended',
					'dependency'  => array( 'element' => 'food_style', 'value' => 'featured-w2' ),
				),
			),
			'dependency' => array( 'element' => 'type', 'value' => '2' ),
		),
		// end type 2

	)
));