<?php
vc_map( array(
		'name'			=> esc_html__( 'Power Image Carousel', 'power-addons' ),
		'base'			=> 'pa_imagecarousel',
		'description'	=> esc_html__( 'Power Image Carousel', 'power-addons' ),
		'icon'			=> 'webnus-imagecarousel',
		'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
		'params'		=> array(
			array(
				'heading'		=> esc_html__( 'Carousel Items', 'power-addons' ),
				'description'	=> esc_html__( 'Please enter carousel items to show', 'power-addons' ),
				'type'			=> 'textfield',
				'param_name'	=> 'item_carousle',
				'value'			=> '',
				),
				array(
					'type'			=> 'param_group',
					'heading'		=> esc_html__( 'Image Item', 'power-addons' ),
					'description'	=> esc_html__( 'Please Add Your image', 'power-addons' ),
					'param_name'	=> 'image_item',
					'value' 		=> '',
					'params'		=> array(
						array(
							'type'			=> 'attach_image',
							'heading'		=> esc_html__( 'Select image', 'power-addons' ),
							'description'	=> esc_html__( 'Please Select Your Desired image', 'power-addons' ),
							'param_name'	=> 'image',
							'value'			=> '',
						),
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Image Size', 'power-addons' ),
							'param_name' => 'thumbnail',
							'value'=>'',
							'description' => esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
						),
				),

			),
		)
	)
);