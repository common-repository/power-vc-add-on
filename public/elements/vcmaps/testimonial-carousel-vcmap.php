<?php 
vc_map( array(
	'name'			=> esc_html__( 'Power Testimonial Carousel', 'power-addons' ),
	'base'			=> 'pa_testimonial-carousel',
	'description'	=> esc_html__( 'Power Testimonial Carousel', 'power-addons' ),
	'icon'			=> 'testimonial-carousel',
	'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'params'		=> array(


		array(
			'type'			=> 'dropdown',
			'heading'		=> esc_html__( 'Testimonial Type', 'power-addons' ),
			'param_name'	=> 'type',
			'value'			=>  array(
					'One'	=> '1',
					'Two'	=> '2',
					'Three'	=> '3',
				),
		),
		array(
			'type'			=> 'textfield',
			'heading'		=> esc_html__( 'Testimonial Items Per View', 'power-addons' ),
			'param_name'	=> 'items',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Testimonial Items', 'power-addons' ),
			'type'			=> 'param_group',
			'param_name'	=> 'testimonial_item',
			'params' => array(

				array(
					'heading'		=> esc_html__( 'Testimonial Image', 'power-addons' ),
					'type'			=> 'attach_image',
					'param_name'	=> 'img',
					'value'			=> '',
				),

				array(
					'type'			=> 'textfield',
					'heading'		=> esc_html__( 'Image Size', 'power-addons' ),
					'param_name'	=> 'thumbnail',
					'value'			=>'',
					'description'	=> esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
				),

				array(
					'heading'		=> esc_html__( 'Testimonial Content', 'power-addons' ),
					'type'			=> 'textarea',
					'param_name'	=> 'tc_content',
					'value'			=> '',
				),

				array(
					'heading'		=> esc_html__( 'Testimonial Name', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'name',
					'value'			=> '',
					'admin_label'	=> true,
				),

				array(
					'heading'		=> esc_html__( 'Testimonial Job', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'job',
					'value'			=> '',
					'admin_label'	=> true,
				),
			),
		),

	)
) );