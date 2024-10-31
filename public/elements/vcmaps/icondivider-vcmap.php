<?php
vc_map( array(
        "name" =>"Power Icon Divider",
        "base" => "pa_icon-divider",
		"description" => "Vector font icon",
        
		"icon" => "icon-wpb-wicon",
        "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        "params" => array(
           
             array(
				"type"=>'colorpicker',
				"heading"=>esc_html__('Icon color', 'power-addons'),
				"param_name"=> "color",
				"value"=>"",
				"description" => esc_html__( "Select icon color", 'power-addons')
				
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