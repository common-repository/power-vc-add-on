<?php
vc_map( array(
        "name" =>"Power Alert",
        "base" => "pa_alert",
		"description" => "Alert box",
        "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        "icon" => "webnus_alert",
        "params" => array(
						array(
							"type" => "dropdown",
							"heading" => esc_html__( "Type", 'power-addons' ),
							"param_name" => "type",
							"value" => array(
								"Info"=>"info",
								"Success"=>"success",
								"Warning"=>"warning",
								"Danger"=>"danger",
								
						),
						"description" => esc_html__( "Alert Type", 'power-addons')
						),
						array(
							"type" => "checkbox",
							"heading" => esc_html__( "Has Close?", 'power-addons' ),
							"param_name" => "close",
							"value" => array('Yes please'=>'true'),
							"description" => esc_html__( "Has Close Button?", 'power-addons')
						),
						array(
							"type" => "textarea",
							"heading" => esc_html__( "Alert Content", 'power-addons' ),
							"param_name" => "content",
							"value"=>"Content goes here",
							"description" => esc_html__( "Contet Goes Here", 'power-addons')
						),
						
           
        ),
		
        
    ) );