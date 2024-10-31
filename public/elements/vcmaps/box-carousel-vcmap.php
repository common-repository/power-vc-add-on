<?php
vc_map( array(
		'name'			=> esc_html__( 'Power Box Carousel', 'power-addons' ),
		'base'			=> 'pa_service_carousel',
		'description'	=> esc_html__( 'Box Carousel', 'power-addons' ),
		'icon'			=> 'webnus-services-carousel',
		'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
		'params'		=> array(
			array(
				'type'			=> 'param_group',
				'heading'		=> esc_html__( 'Box Item', 'power-addons' ),
				'description'	=> esc_html__( 'Please Add Your service', 'power-addons' ),
				'param_name'	=> 'carousel_item',
				'value' 		=> '',
				'params'		=> array(
					array(
						'type'			=> 'textfield',
						'heading'		=> esc_html__( 'Box Title', 'power-addons' ),
						'description'	=> esc_html__( 'Please enter your title', 'power-addons' ),
						'param_name'	=> 'service_title',
						'value'			=> '',
						'admin_label'	=> true,
					),
					array(
						'type'			=> 'textarea',
						'heading'		=> esc_html__( 'Box Content', 'power-addons' ),
						'description'	=> esc_html__( 'Please enter your content', 'power-addons' ),
						'param_name'	=> 'service_content',
						'value'			=> '',
					),
					array(
						'type'			=> 'attach_image',
						'heading'		=> esc_html__( 'Select image', 'power-addons' ),
						'description'	=> esc_html__( 'Please enter your content', 'power-addons' ),
						'param_name'	=> 'service_image',
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
			array(
				'heading'		=> esc_html__( 'Carousel Items', 'power-addons' ),
				'description'	=> esc_html__( 'Please enter carousel items to show', 'power-addons' ),
				'type'			=> 'textfield',
				'param_name'	=> 'item_carousle',
				'value'			=> '',
			),
		)
	)
);