<?php
vc_map( array(
        'name' =>'Power Subscribe',
        'base' => 'pa_subscribe',
        "icon" => "subscribe",
		"description" => "Subscribe box",
        'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        'params' => array(
						array(
							"type" => "dropdown",
							"heading" => esc_html__( "Type", 'power-addons' ),
							"param_name" => "type",
							"value" => array(
								"Boxed"=>"boxed",
								"Bar"=>"bar1",
								"Flat"=>"flat",
							),
							"description" => esc_html__( "Select style type", 'power-addons')
						),
						array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Title', 'power-addons' ),
								'param_name' => 'box_title',
								'value'=>'',
								'description' => esc_html__( 'Subscribe title', 'power-addons'),
						),							
					
					    array(
							"type"=>'textarea',
							"param_name"=> "box_text",
							"heading"=>esc_html__('Subscribe Text', 'power-addons'),
							"value"=>"",
							"description" => esc_html__( "Subscribe content", 'power-addons')	
						),
						
						array(
							"type" => "dropdown",
							'heading' => esc_html__( 'Email Service', 'power-addons' ),
							'param_name' => 'service',
							"value" => array(
								"FeedBurner"=>"FeedBurner",
								"MailChimp"=>"MailChimp",
							),
							'description' => esc_html__( 'FeedBurner or MailChimp', 'power-addons')
						), 
						
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'FeedBurner ID', 'power-addons' ),
							'param_name' => 'feedburner_id',
							'value'=>'',
							'description' => esc_html__( 'Feedburner ID', 'power-addons'),
							"dependency" => array('element'=>'service','value'=>array('FeedBurner')),
						),	
					
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'MailChimp URL', 'power-addons' ),
							'param_name' => 'mailchimp_url',
							'value'=>'',
							'description' => esc_html__( 'Mailchimp form action URL', 'power-addons'),
							"dependency" => array('element'=>'service','value'=>array('MailChimp')),
						),	

						
						
					),    
		) );