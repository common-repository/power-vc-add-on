<?php
vc_map( array(
    "name" =>"Power Icon",
    "base" => "pa_icon",
	"description" => "Vector font icon",
    
	"icon" => "webnus_icon",
    "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
    "params" => array(
       
         array(
			"type"=>'textfield',
			"heading"=>esc_html__('Icon Size', 'power-addons'),
			"param_name"=> "size",
			"value"=>"",
			"description" => esc_html__( "Icon size in px format, Example: 16px", 'power-addons')
			
		),
		array(
			"type"=>'colorpicker',
			"heading"=>esc_html__('Icon color', 'power-addons'),
			"param_name"=> "color",
			"value"=>"",
			"description" => esc_html__( "Select icon color", 'power-addons')
			
		),
		 array(
			"type"=>'textfield',
			"heading"=>esc_html__('Icon Link URL', 'power-addons'),
			"param_name"=> "link",
			"value"=>"",
			"description" => esc_html__( "Icon link URL http:// ", 'power-addons')
			
		),
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Icon Link Class', 'power-addons'),
			"param_name"=> "link_class",
			"value"=>"",
			"description" => esc_html__( "Icon link Class ", 'power-addons')
			
		),
		array(
			"type" => "colorpicker",
			"heading" => __( 'Custom background color', 'power-addons' ),
			"param_name" => "bg_color",
			"value"=>"",
			"description" => esc_html__( "Select background color", 'power-addons')
		),
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Padding', 'power-addons'),
			"param_name"=> "padding",
			"value"=>"",
			"description" => esc_html__( "Example: 20px", 'power-addons')
		),
		array(
			"type"=>'textfield',
			"heading"=>esc_html__('Border Radius', 'power-addons'),
			"param_name"=> "border_radius",
			"value"=>"",
			"description" => esc_html__( "Border Radius, Example: 8px or 50%", 'power-addons')
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'power-addons' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'power-addons' ),
		),
       array(
            "type" => "pa_iconfonts",
            "heading" => esc_html__( "Icon", 'power-addons' ),
            "param_name" => "name",
            'value'=>'',
            "description" => esc_html__( "Select Icon", 'power-addons')
        ),
       
    ),
	
    
) );