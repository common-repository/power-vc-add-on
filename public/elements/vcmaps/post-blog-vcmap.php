<?php
vc_map( array(
	'name' =>'Power Posts Blog',
	'base' => 'pa_post-blog',
	"description" => "Blog Loop",
	'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	"icon" => "post_blog",
	'params'=>array(
	
		array(
			"type" => "dropdown",
			"heading" => esc_html__( "Type", 'power-addons' ),
			"param_name" => "type",
			"value" => array(
				"Large Posts"=>"1",
				"List Posts"=>"2",							
				"Grid Posts"=>"3",							
				"First Large then List"=>"4",							
				"First Large then Grid"=>"5",							
				"Masonry"=>"6",		
				"Timeline"=>"7",	
			),						
			"description" => esc_html__( "Type", 'power-addons')
		),

		array(
			'type' => 'dropdown',
			'heading' => esc_html__( 'Category', 'power-addons' ),
			'param_name' => 'category',
			'value'=>$category_slug_array,
			'description' => esc_html__( 'Select specific category, leave blank to show all categories.', 'power-addons')
		),

		array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Post Count', 'power-addons' ),
			'param_name' => 'count',
			'value' => '',
			'description' => esc_html__( 'Number of post(s) to show', 'power-addons')
		),

		array(
			'heading'		=> esc_html__( 'Order By', 'power-addons' ),
			'type'			=> 'dropdown',
			'param_name'	=> 'orderby',
			'value'			=> array(
				esc_html__( 'Date (Latest Posts)', 'power-addons' ) => 'date',
				esc_html__( 'Popular posts: Comment Count', 'power-addons' ) => 'comment_count',
				esc_html__( 'Popular posts: View Count', 'power-addons' ) => 'view_count',
				esc_html__( 'Popular Posts: Social Score', 'power-addons' ) => 'social_score',
			),
			'description' => esc_html__( 'If you use "Social Post Score" type, then Social Metrics Tracker plugin must be activated via Apperance > Install Plugins.', 'power-addons')
		),

	)  
) );