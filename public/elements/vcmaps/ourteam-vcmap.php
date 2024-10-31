<?php
vc_map( array(
    'name' =>'Power Our Team',
    'base' => 'pa_ourteam',
	"description" => "Team member",
	'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
    "icon" => "webnus_ourteam",
    'params'=>array(
		
    	array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'power-addons' ),
			"param_name" => "type",
			"value" => array(
				"Type 1"=>"1",
				"Type 2"=>"2",
				"Type 3"=>"3",						
				"Type 4"=>"4",						
				"Type 5"=>"5",						
				"Type 6"=>"6",						
			),
			"description" => esc_html__( "You can choose among these pre-designed types.", 'power-addons')
		),

		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Team Image', 'power-addons' ),
			'param_name' => 'img',
			'value'=>'',
			'description' => esc_html__( 'Team member image', 'power-addons')
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Image Size', 'power-addons' ),
			'param_name' => 'thumbnail',
			'value'=>'',
			'description' => esc_html__( 'Please enter your size like: width*height (Please use same size in Type 3)', 'power-addons')
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Team Memeber Name', 'power-addons' ),
			'param_name' => 'name',
			'value'=>'',
			'description' => esc_html__( 'Team member name', 'power-addons')
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Team Memeber Title', 'power-addons' ),
			'param_name' => 'title',
			'value'=>'',
			'description' => esc_html__( 'Team member title', 'power-addons')
		),

		array(
			'type' => 'textarea',
			'heading' => esc_html__( 'Team Memeber Description Text', 'power-addons' ),
			'param_name' => 'text',
			'value'=>'',
			'description' => esc_html__( 'Team member description text', 'power-addons'),
			'dependency'	=> array( 'element' => 'type', 'value' => '6' ),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Link URL', 'power-addons' ),
			'param_name' => 'link',
			'value'=>'',
			'description' => esc_html__( 'Team member link url', 'power-addons')
		),

		array(
			'heading' => esc_html__('Social Icons', 'power-addons') ,
			'description' => wp_kses( __('By enabling this option, Member social networks links will appear.<br/><br/>', 'power-addons'), array( 'br' => array() ) ),
			'param_name' => 'social',
			'value' => array( esc_html__( 'Enable', 'power-addons' ) => 'enable'),
			'type' => 'checkbox',
			'std' => '',
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'First Social Name', 'power-addons' ),
			'param_name' => 'first_social',
			 'value' => array(
				"Twitter"=>'twitter',
				"Facebook"=>'facebook',
				"Google Plus"=>'google-plus',
				"Vimeo"=>'vimeo',
				"Dribbble"=>'dribbble',
				"Youtube"=>'youtube',
				"Youtube"=>'youtube',
				"Pinterest"=>'pinterest',
				"LinkedIn"=>'linkedin',
				"Instagram"=>'instagram',
					),
				'std' => 'twitter',
			'description' => esc_html__( 'Select Social Name', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'First Social URL', 'power-addons' ),
			'param_name' => 'first_url',
			'value'=>'',
			'description' => esc_html__( 'First social URL', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Second Social Name', 'power-addons' ),
			'param_name' => 'second_social',
			 'value' => array(
				"Twitter"=>'twitter',
				"Facebook"=>'facebook',
				"Google Plus"=>'google-plus',
				"Vimeo"=>'vimeo',
				"Dribbble"=>'dribbble',
				"Youtube"=>'youtube',
				"Youtube"=>'youtube',
				"Pinterest"=>'pinterest',
				"LinkedIn"=>'linkedin',
				"Instagram"=>'instagram',
					),
				'std' => 'facebook',

			'description' => esc_html__( 'Select Social Name', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Second Social URL', 'power-addons' ),
			'param_name' => 'second_url',
			'value'=>'',
			'description' => esc_html__( 'Second social URL', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),


		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Third Social Name', 'power-addons' ),
			'param_name' => 'third_social',
			 'value' => array(
				"Twitter"=>'twitter',
				"Facebook"=>'facebook',
				"Google Plus"=>'google-plus',
				"Vimeo"=>'vimeo',
				"Dribbble"=>'dribbble',
				"Youtube"=>'youtube',
				"Youtube"=>'youtube',
				"Pinterest"=>'pinterest',
				"LinkedIn"=>'linkedin',
				"Instagram"=>'instagram',
					),
				'std' => 'google-plus',
			'description' => esc_html__( 'Select Social Name', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Third Social URL', 'power-addons' ),
			'param_name' => 'third_url',
			'value'=>'',
			'description' => esc_html__( 'Third social URL', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Fourth Social Name', 'power-addons' ),
			'param_name' => 'fourth_social',
			 'value' => array(
				"Twitter"=>'twitter',
				"Facebook"=>'facebook',
				"Google Plus"=>'google-plus',
				"Vimeo"=>'vimeo',
				"Dribbble"=>'dribbble',
				"Youtube"=>'youtube',
				"Youtube"=>'youtube',
				"Pinterest"=>'pinterest',
				"LinkedIn"=>'linkedin',
				"Instagram"=>'instagram',
					),
				'std' => 'linkedin',
			'description' => esc_html__( 'Select Social Name', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Fourth Social URL', 'power-addons' ),
			'param_name' => 'fourth_url',
			'value'=>'',
			'description' => esc_html__( 'Fourth social URL', 'power-addons'),
			"dependency" => array('element'=>'social','value'=>array('enable')),
		),
	),        
) );