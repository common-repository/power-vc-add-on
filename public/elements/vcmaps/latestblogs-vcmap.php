<?php
$categories = array();
$categories = get_categories();
$category_slug_array = array('');
foreach($categories as $category)
{
	$category_slug_array[] = $category->slug;
}


vc_map( array(
        'name' =>'Power Latest From Blog',
        'base' => 'pa_latestfromblog',
        "icon" => "webnus_latestfromblog",
		"description" => "Recent posts",
        'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        'params' => array(
						array(
							"type" 				=> "dropdown",
							"heading" 			=> esc_html__( "Type", 'power-addons' ),
							"param_name" 		=> "type",
							"value" 			=> array(
								"One"		=>"one",
								"Two"		=>"two",
								"Three"		=>"three",
								"Four"		=>"four",
								"Five"		=>"five",
								"Six"		=>"six",
								"Seven"		=>"seven",
								"Eight"		=>"eight",
								"Nine"		=>"nine",
								"Ten"		=>"ten",
								"Eleven"	=>"eleven",
								"Twelve"	=>"twelve",
								"Thirteen"	=>"thirteen",
								"Fourteen"	=>"fourteen",
								"Fifteen"	=>"fifteen",
								"Sixteen"	=>"sixteen",
								"Seventeen"	=>"seventeen",
							),
							"description" 		=> esc_html__( "Type", 'power-addons')
						),
						array(
							'type' 				=> 'dropdown',
							'heading' 			=> esc_html__( 'Category', 'power-addons' ),
							'param_name' 		=> 'category',
							'value'				=>$category_slug_array,
							'description' 		=> esc_html__( 'Select specific category, leave blank to show all categories.', 'power-addons')
						),
						array(
							'type'			=> 'checkbox',
							'heading'		=> __( 'Convert To Carousel', 'power-addons' ),
							'description'	=> __( 'Do you want change this type to carousle?', 'power-addons'),
							'param_name'	=> 'carousel',
							'std'			=> 'false',
							'dependency'	=> array(
								'element'	=>'type',
								'value'		=> array( 'twelve', 'thirteen', ),
								),
						),
						array(
							'type'			=> 'textfield',
							'heading'		=> esc_html__( 'Number Of Posts', 'power-addons' ),
							'description'	=> esc_html__( 'please enter your desired number to show posts', 'power-addons'),
							'param_name'	=> 'post_to_show',
							'value'			=> '',
							'dependency'	=> array(
								'element'	=>'carousel',
								'value'		=> 'true'
								),
						),
						array(
							'type'			=> 'textfield',
							'heading'		=> esc_html__( 'Count in row', 'power-addons' ),
							'param_name'	=> 'item_carousel',
							'value'			=> '',
							'dependency'	=> array(
								'element'	=>'carousel',
								'value'		=> 'true'
								),
						),
					),
		) );