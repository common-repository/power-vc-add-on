<?php
vc_map( array(
        'name' =>'Power Post From Blog',
        'base' => 'pa_postblog',
        "icon" => "webnus_postfromblog",
		"description" => "Single Post",
        'category' => esc_html__( 'Power VC Shortcodes', 'vision-church' ),
        'params' => array(
						array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Post ID', 'vision-church' ),
							'param_name' => 'post',
							'value'=>'',
							'description' => esc_html__( 'Pick up the ID & fallow this instruction: admin panel > posts > ID column.', 'vision-church')
						), 
					),    
		) );