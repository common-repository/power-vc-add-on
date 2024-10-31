<?php
$cf7 = get_posts( 'post_type="wpcf7_contact_form"&numberposts=-1' );
	$contact_forms = array();
	if ( $cf7 ) {
		foreach ( $cf7 as $cform ) {
			$contact_forms[ $cform->post_title ] = $cform->ID;
		}
	} else {
		$contact_forms[ esc_html__( 'No contact forms found', 'power-addons' ) ] = 0;
	}

vc_map( array(
        "name" =>"Power Donate Button",
        "base" => "pa_donate",
        "description" => "Donate Button",
        "category" => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        "icon" => "webnus_button",
        "params" => array(
			array(
			"type" => "textarea",
			"heading" => esc_html__( "Content", 'power-addons' ),
			"param_name" => "donate_content",
			"value"=>'',
			"description" => esc_html__( "Button Text Content", 'power-addons')
			),
									
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Select contact form', 'power-addons' ),
				'param_name' => 'id',
				'value' => $contact_forms,
				'description' => esc_html__( 'Choose previously created contact form from the drop down list.', 'power-addons' )
			),

			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Color", 'power-addons' ),
			"param_name" => "color",
			"value" => array(
				"Default"=>"default",
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
			"description" => esc_html__( "Button Color", 'power-addons')
			),
									
			array(
			"type" => "dropdown",
			"heading" => esc_html__( "Size", 'power-addons' ),
			"param_name" => "size",
			"value" => array(
				"Small"=>"small",
				"Medium"=>"medium",
				"Large"=>"large",
				
			),
			"description" => esc_html__( "Button Size", 'power-addons')
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
		
        
    ) );