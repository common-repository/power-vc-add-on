<?php
vc_map( array(
	"name" =>"Power Subtitle",
	"base" => "pa_subtitle",
	"description" => "SubTitle",
	"category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	"icon" => "webnus_subtitle1",
	"params" => array(

		array(
			"heading" => esc_html__( "Type", 'power-addons' ),
			"description" => esc_html__( "Title Type", 'power-addons'),
			"type" => "dropdown",
			"param_name" => "type",
			"value" => array(
				"Subtitle 1"=>"1",
				"Subtitle 2"=>"2",
				"Subtitle 3"=>"3",									
				"Subtitle 4"=>"4",
				"Subtitle 5"=>"5",
				"Subtitle 6"=>"6",

			),
		),

		array(
			"heading" => esc_html__( "Heading", 'power-addons' ),
			"description" => wp_kses( __( "Just for SEO<br>Note: it doesn\'t change the size of the max title in the page.", 'power-addons'), array( 'br' => array() ) ),
			"type" => "dropdown",
			"param_name" => "heading",
			"value" => array(
				"h1"=>"1",
				"h2"=>"2",
				"h3"=>"3",
				"h4"=>"4",
				"h5"=>"5",
				"h6"=>"6",
			),
			'std' => '4',
		),

		array(
			"heading" => esc_html__( "Title", 'power-addons' ),
			"description" => esc_html__( "Enter the title", 'power-addons'),
			"type" => "textarea",
			"param_name" => "subtitle_content",
			"value" => array('Title'),
		),

		array(
			'heading'		=> esc_html__( 'Text Color', 'power-addons' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'subtitle_color',
			'value'			=> '',
		),

		array(
			'heading'		=> esc_html__( 'Border Color', 'power-addons' ),
			'type'			=> 'colorpicker',
			'param_name'	=> 'border_color',
			'value'			=> '',
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

	),
) );