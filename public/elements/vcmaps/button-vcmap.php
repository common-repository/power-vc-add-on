<?php
vc_map( array(
	"name" =>"Power Button",
	"base" => "pa_button",
	"description" => "Button shortcode",
	"category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	"icon" => "webnus_button",
	"params" => array(
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Shape", 'power-addons' ),
			"param_name" => "shape",
			"value" => array(
				"Default"=>"",
				"Square"=>"square",
				"Rounded"=>"rounded",
				),
			"description" => esc_html__( "Button Type", 'power-addons')
			),
			
			array(
			"type" => "textarea",
			"heading" => esc_html__( "Content", 'power-addons' ),
			"param_name" => "btn_content",
			"value"=>'',
			"description" => esc_html__( "Button Text Content", 'power-addons')
			),
			
			array(
			"type" => "textfield",
			"heading" => esc_html__( "URL", 'power-addons' ),
			"param_name" => "url",
			"value"=>'#',
			"description" => esc_html__( "Button URL Link", 'power-addons')
			),
									
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Target", 'power-addons' ),
			"param_name" => "target",
			"description" => esc_html__( "Button URL Target", 'power-addons'),
			"value" => array(
				"Self"=>"_self",
				"Blank"=>"_blank",
				"Parent"=>"_parent",
				"Top"=>"_top",
				),
			),
			
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Color", 'power-addons' ),
			"param_name" => "color",
			"description" => esc_html__( "Button Color", 'power-addons'),
			"value" => array(
				"Default"=>"theme-skin",
				"Green"=>"green",
				"Gold"=>"gold",
				"Red"=>"red",
				"Blue"=>"blue",
				"Gray"=>"gray",
				"Dark gray"=>"dark-gray",
				"Cherry"=>"cherry",
				"Orchid"=>"orchid",
				"Pink"=>"pink",
				"Orange"=>"orange",
				"Teal"=>"teal",
				"SkyBlue"=>"skyblue",
				"Jade"=>"jade",
				"White"=>"white",
				"Black"=>"black",
				),
			),
									
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Size", 'power-addons' ),
			"param_name" => "size",
			"description" => esc_html__( "Button Size", 'power-addons'),
			"value" => array(
				"Small"=>"small",
				"Medium"=>"medium",
				"Large"=>"large",	
				),
			),

			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Font Weight", 'power-addons' ),
			"param_name" => "f_weight",
			"description" => esc_html__( "Please select your desired font weight", 'power-addons'),
			"value" => array(
				"Bold"=>"bold",
				"Thin"=>"thin",
				),
			),

			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Bordered?", 'power-addons' ),
			"param_name" => "border",
			"value"=>array('Normal'=>'false','Bordered'=>'true'),
			"description" => esc_html__( "Is button bordered?", 'power-addons')
			),
			
			array(
			"type" => "pa_iconfonts",
			"heading" => esc_html__( "Icon", 'power-addons' ),
			"param_name" => "icon",
			"value"=>'',
			"description" => esc_html__( "Select Button Icon", 'power-addons')
			),	
	),
));