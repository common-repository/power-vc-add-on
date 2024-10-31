<?php
$categories = array();

$categories = get_categories();

$category_slug_array = array();
$category_slug_array[] = 'Entire Categories';
foreach($categories as $category)
{
	$category_slug_array[] = $category->slug;
}
vc_map( array(
        'name' =>'Power Category Box',
        'base' => 'pa_categorybox',
		"description" => "Show Categorybox, By category filter",
        "icon" => "webnus_categorybox",
        'params'=>array(
					
					
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Category', 'power-addons' ),
						'param_name' => 'category',
						'value'=>$category_slug_array,
						'description' => esc_html__( 'Select specific category', 'power-addons')
				),
				array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Title', 'power-addons' ),
						'param_name' => 'title',
						'value'=> '',
						'description' => esc_html__( 'Set title', 'power-addons')
				),
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show title', 'power-addons' ),
						'param_name' => 'show_title',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide title', 'power-addons')
				),
				array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Posts count', 'power-addons' ),
						'param_name' => 'post_count',
						'value'=>'5',
						'description' => esc_html__( 'How many posts to dispaly?', 'power-addons')
				),
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show date', 'power-addons' ),
						'param_name' => 'show_date',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide date', 'power-addons')
				),
					
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show category', 'power-addons' ),
						'param_name' => 'show_category',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide category', 'power-addons')
				),
				array(
						'type' => 'dropdown',
						'heading' => esc_html__( 'Show author', 'power-addons' ),
						'param_name' => 'show_author',
						'value'=>array('Show'=>'true','Hide'=>'false'),
						'description' => esc_html__( 'Show/Hide author', 'power-addons')
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

		),
		'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        
    ) );