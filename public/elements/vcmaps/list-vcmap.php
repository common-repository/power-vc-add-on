<?php
vc_map( array(
        'name' =>'Power List',
        'base' => 'pa_ul',
		"description" => "List + custom style",
        'category' => esc_html__( 'Power VC Shortcodes', 'power-addons' ),
        "icon" => "webnus_list",
        'params' => array(
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'List Type', 'power-addons' ),
				'param_name' => 'type',
				'value' => array(
					'Plus'=>'plus',
					'Minus'=>'minus',
					'Star'=>'star',
					'Arrow'=>'arrow',
					'Arrow 2'=>'arrow2',
					'Square'=>'square',
					'Circle'=>'circle',
					'Cross'=>'cross',
					'Check'=>'check',
					'Check 2'=>'check2'
										
				),
				'description' => esc_html__( 'Select the List Items type', 'power-addons')
			),
			
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__( 'Items', 'power-addons' ),
				'param_name' => 'content',
				'value' => '[li]First Item[/li][li]Second Item[/li]',
				'description' => esc_html__( 'Enter list items, you can use [li]SomeText[/li]', 'power-addons')
			),
        ),
		
        
    ) );