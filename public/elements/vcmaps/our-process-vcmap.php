<?php
vc_map( array(
	'name'			=> esc_html__( 'Power Our Process', 'power-addons' ),
	'base'			=> 'pa_our_process',
	'description'	=> esc_html__( 'Power Our Process', 'power-addons' ),
	'icon'			=> 'our_process',
	'category'		=> esc_html__( 'Power VC Shortcodes', 'power-addons' ),
	'params'		=> array(
		array(
			'heading'		=> esc_html__( 'Process Item', 'power-addons' ),
			'description'	=> esc_html__( 'Enter process items for our process - title, content and icon.', 'power-addons' ),
			'type'			=> 'param_group',
			'param_name'	=> 'process_item',
			'params' => array(

				array(
					'heading'		=> esc_html__( 'Process Title', 'power-addons' ),
					'type'			=> 'textfield',
					'param_name'	=> 'process_title',
					'value'			=> '',
					'admin_label'	=> true,
				),

				array(
					'heading'		=> esc_html__( 'Process Content', 'power-addons' ),
					'type'			=> 'textarea',
					'param_name'	=> 'process_content',
					'value'			=> '',
				),

				array(
					'type'			=> 'iconpicker',
					'heading'		=> esc_html__( 'Icon', 'power-addons' ),
					'param_name'	=> 'icon_fontawesome',
					'value'			=> 'fa fa-adjust', // default value to backend editor admin_label
					'settings'		=> array(
						// default true, display an "EMPTY" icon?
						'emptyIcon'		=> false,
						// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
						'iconsPerPage'	=> 4000,
					),
					'description'	=> esc_html__( 'Select icon from library.', 'power-addons' ),
				),
			),
		),
) ) );