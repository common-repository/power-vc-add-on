<?php
vc_map( array(
	"name"			=>"Power Tooltip",
	"base"			=> "pa_tooltip",
	"description"	=> "Power Tooltip",
	"category"		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	"icon"			=> "webnus_tooltip",
	"params"		=> array(
		array(
			"type"			=> "textarea",
			"heading"		=> esc_html__( "Tooltip Text", 'power-addons' ),
			"param_name"	=> "tooltiptext",
			"value"			=> '',
			"description"	=> esc_html__( "Tooltip text goes here", 'power-addons')
		),
		array(
			'type'			=> "textarea",
			"heading"		=> esc_html__( 'Tooltip Content', 'power-addons' ),
			"param_name"	=> 'tooltip_content',
			"value"			=>'',
			"description" 	=> esc_html__( "Contet Goes Here", 'power-addons')
		),
		array(
			'type' 			=> "textfield",
			"heading" 		=> esc_html__( 'Conten URL', 'power-addons' ),
			"param_name" 	=> 'tooltip_link',
			"value"			=>'',
			"description" 	=> esc_html__( "Please enter content url", 'power-addons')
		),
	),
));