<?php
if ( ! class_exists( 'WPBakeryVisualComposerAbstract' ) )
	return;

// // row extend
// if ( ! function_exists( 'pa_vc_row_extend' ) ) {

// 	// after VC Init
// 	add_action( 'vc_after_init', 'pa_vc_row_extend' );

// 	function pa_vc_row_extend() {

// 		$pwa_group = esc_html__( 'Power add-on', 'power-addons' );

// 		// add Params
// 		$vc_column_text_new_params = array(

// 			// vc_row custom group
// 			array(
// 				'heading'			=> esc_html__( 'Parallax', 'power-addons' ),
// 				'description'		=> esc_html__( 'Add parallax type background for row.', 'power-addons' ),
// 				'type'				=> 'dropdown',
// 				'param_name'		=> 'pwa_parallax',
// 				'value'				=> array(
// 					esc_html__( 'None', 'power-addons' )		=> '',
// 					esc_html__( 'Parallax', 'power-addons' )	=> 'content-moving',
// 				),
// 				'group'				=> $pwa_group,
// 			),

// 			array(
// 				'type' 			=> 'attach_image',
// 				'heading' 		=> esc_html__( 'Background image', 'power-addons' ),
// 				'param_name' 	=> 'pwa_parallax_image',
// 				'value' 		=> '',
// 				'description' 	=> esc_html__( 'Select image from background.', 'power-addons' ),
// 				'dependency'	=> array(
// 					'element'	=> 'pwa_parallax',
// 					'not_empty'	=> true,
// 				),
// 				'group'				=> $pwa_group,
// 			),

// 			array(
// 				'heading'			=> esc_html__( 'Parallax Speed', 'power-addons' ),
// 				'type'				=> 'dropdown',
// 				'param_name'		=> 'pwa_parallax_speed',
// 				'value'				=> array(
// 					esc_html__( 'Very Slow', 'power-addons' )	=> '108',
// 					esc_html__( 'Slow', 'power-addons' )		=> '123',
// 					esc_html__( 'Normal', 'power-addons' )	=> '190',
// 					esc_html__( 'Fast', 'power-addons' )		=> '225',
// 					esc_html__( 'Very Fast', 'power-addons' )	=> '260',
// 				),
// 				'std'				=> '190',
// 				'dependency'		=> array(
// 					'element'	=> 'pwa_parallax',
// 					'not_empty'	=> true,
// 				),
// 				'group'				=> $pwa_group,
// 			),
// 			array(
// 				'heading'			=> esc_html__( 'Layer Animation', 'vision-church' ),
// 				'type'				=> 'checkbox',
// 				'param_name'		=> 'pwa_layer_animation',
// 				'group'				=> $pwa_group,
// 			),
// 		);

// 		vc_add_params( 'vc_row', $vc_column_text_new_params ); 
// 	}
// }

// if ( ! function_exists( 'vc_theme_before_vc_row' ) ) :
// 	function vc_theme_before_vc_row( $atts, $content = null ) {
// 		extract( shortcode_atts( array(
// 			'pwa_parallax'			=> '',
// 			'pwa_parallax_image'	=> '',
// 			'pwa_parallax_speed'	=> '190',
// 			'pwa_layer_animation'	=> '',
// 		), $atts ) );

// 		if ( $pwa_parallax ) {
// 			if( is_numeric( $pwa_parallax_image ) ) {
// 				$pwa_parallax_image = wp_get_attachment_url( $pwa_parallax_image );
// 			}
// 			return '<div class="pwa-parallax" data-pwa-parallax-bg="' . $pwa_parallax_image . '" data-pwa-parallax-speed="' . $pwa_parallax_speed . '">';
// 		}
// 		if ( $pwa_layer_animation == 'true' ){
// 			return '<div class="wn-layer-anim">';
// 		}
// 	}
// endif;

// if ( ! function_exists( 'vc_theme_after_vc_row' ) ) :
// 	function vc_theme_after_vc_row( $atts, $content = null ) {
// 		extract( shortcode_atts( array(
// 			'pwa_parallax' => '',
// 			'pwa_layer_animation'	=> '',
// 		), $atts ) );

// 		if ( $pwa_parallax ) {
// 			return '</div>';
// 		}
// 		if ( $pwa_layer_animation == 'true' ){
// 			return '</div>';
// 		}
// 	}
// endif;

// /*// Section extend
// if ( ! function_exists( 'pa_vc_section_extend' ) ) {

// 	// after VC Init
// 	add_action( 'vc_after_init', 'pa_vc_section_extend' );

// 	function pa_vc_section_extend() {

// 		$pwa_group = esc_html__( 'Power add-on', 'power-addons' );

// 		// Add Params
// 		$vc_column_text_new_params = array(

// 			// vc_section custom group
// 			array(
// 				'heading'			=> esc_html__( 'Parallax', 'power-addons' ),
// 				'description'		=> esc_html__( 'Add parallax type background for row.', 'power-addons' ),
// 				'type'				=> 'dropdown',
// 				'param_name'		=> 'pwa_parallax',
// 				'value'				=> array(
// 					esc_html__( 'None', 'power-addons' )		=> '',
// 					esc_html__( 'Parallax', 'power-addons' )	=> 'content-moving',
// 				),
// 				'group'				=> $pwa_group,
// 			),

// 			array(
// 				'type' 				=> 'attach_image',
// 				'heading' 			=> esc_html__( 'Background image', 'power-addons' ),
// 				'param_name' 		=> 'pwa_parallax_image',
// 				'value' 			=> '',
// 				'description' 		=> esc_html__( 'Select image from background.', 'power-addons' ),
// 				'dependency'		=> array(
// 					'element'	=> 'pwa_parallax',
// 					'not_empty'	=> true,
// 				),
// 				'group'				=> $pwa_group,
// 			),

// 			array(
// 				'heading'			=> esc_html__( 'Parallax Speed', 'power-addons' ),
// 				'type'				=> 'dropdown',
// 				'param_name'		=> 'pwa_parallax_speed',
// 				'value'				=> array(
// 					esc_html__( 'Very Slow', 'power-addons' )	=> '108',
// 					esc_html__( 'Slow', 'power-addons' )		=> '123',
// 					esc_html__( 'Normal', 'power-addons' )	=> '190',
// 					esc_html__( 'Fast', 'power-addons' )		=> '225',
// 					esc_html__( 'Very Fast', 'power-addons' )	=> '260',
// 				),
// 				'std'				=> '190',
// 				'dependency'		=> array(
// 					'element'	=> 'pwa_parallax',
// 					'not_empty'	=> true,
// 				),
// 				'group'				=> $pwa_group,
// 			),
// 		);

// 		vc_add_params( 'vc_section', $vc_column_text_new_params ); 
// 	}
// }*/

// if ( ! function_exists( 'vc_theme_before_vc_section' ) ) :
// 	function vc_theme_before_vc_section( $atts, $content = null ) {
// 		extract( shortcode_atts( array(
// 			'pwa_parallax'			=> '',
// 			'pwa_parallax_image'	=> '',
// 			'pwa_parallax_speed'	=> '190',
// 		), $atts ) );

// 		if ( $pwa_parallax ) {
// 			if( is_numeric( $pwa_parallax_image ) ) {
// 				$pwa_parallax_image = wp_get_attachment_url( $pwa_parallax_image );
// 			}
// 			return '<div class="pwa-parallax pwa-section" data-pwa-parallax-bg="' . $pwa_parallax_image . '" data-pwa-parallax-speed="' . $pwa_parallax_speed . '">';
// 		}
// 	}
// endif;

// if ( ! function_exists( 'vc_theme_after_vc_section' ) ) :
// 	function vc_theme_after_vc_section( $atts, $content = null ) {
// 		extract( shortcode_atts( array(
// 			'pwa_parallax' => '',
// 		), $atts ) );

// 		if ( $pwa_parallax ) {
// 			return '</div>';
// 		}
// 	}
// endif;


// // Single Image extend
// if ( ! function_exists( 'pa_vc_single_image' ) ) {

// 	// after VC Init
// 	add_action( 'vc_after_init', 'pa_vc_single_image' );

// 	function pa_vc_single_image() {

// 		$pwa_group = esc_html__( 'Power add-on Animation', 'vision' );

// 		// Add Params
// 		$vc_column_text_new_params = array(

// 			// vc_single_image custom group
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Enable Animation Pro', 'power-addons' ),
// 				'param_name'		=> 'enable_animation_pro',
// 				'type'				=> 'checkbox',
// 				'std'				=> false,
// 				'edit_field_class'	=> 'vc_col-sm-12 wn-margin-bottom20',
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Effect Start Point', 'power-addons' ),
// 				'description'		=> esc_html__( 'Can be a number between 0 and 1 defining the position of the trigger Hook in relation to the viewport.', 'power-addons' ),
// 				'param_name'		=> 'trigger_hook',
// 				'type'				=> 'textfield',
// 				'std'				=> '0.4',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Effect Length', 'power-addons' ),
// 				'description'		=> esc_html__( 'The duration of the scene. If 0 tweens will auto-play when reaching the scene start point, pins will be pinned indefinetly starting at the start position.', 'power-addons' ),
// 				'param_name'		=> 'duration',
// 				'type'				=> 'textfield',
// 				'std'				=> '100%',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Vertical Movement', 'power-addons' ),
// 				'param_name'		=> 'vertical_movement',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Horizontal Movement', 'power-addons' ),
// 				'param_name'		=> 'horizontal_movement',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Rotation at End', 'power-addons' ),
// 				'param_name'		=> 'rotation',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Opacity at End', 'power-addons' ),
// 				'param_name'		=> 'opacity',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 		);

// 		vc_add_params( 'vc_single_image', $vc_column_text_new_params ); 
// 	}
// }

// if ( ! function_exists( 'vc_theme_before_vc_single_image' ) ) :
// 	function vc_theme_before_vc_single_image( $atts, $content = null ) {

// 		extract( shortcode_atts( array(
// 			'enable_animation_pro'	=> '',
// 		), $atts ) );

// 		$GLOBALS[ 'wn-single-image-uniqid' ] = uniqid();

// 		$output	= '';

// 		if ( $enable_animation_pro ) :
// 			$output .= '<div class="wn-single-image-wrap" id="wn-single-image-' . $GLOBALS[ 'wn-single-image-uniqid' ] . '">';
// 		endif;

// 		return $output;
// 	}
// endif;

// if ( ! function_exists( 'vc_theme_after_vc_single_image' ) ) :
// 	function vc_theme_after_vc_single_image( $atts, $content = null ) {

// 		extract( shortcode_atts( array(
// 			'enable_animation_pro'	=> '',
// 			'trigger_hook'			=> '0.4',
// 			'duration'				=> '100%',
// 			'vertical_movement'		=> '',
// 			'horizontal_movement'	=> '',
// 			'rotation'				=> '',
// 			'opacity'				=> '',
// 		), $atts ) );

// 		$output	= '';

// 		if ( $enable_animation_pro ) :

// 			$horizontal_movement	= $horizontal_movement ? 'x: "' . $horizontal_movement . '",' : '';
// 			$vertical_movement		= $vertical_movement ? 'y: "' . $vertical_movement . '",' : '';
// 			$opacity				= is_numeric( $opacity ) ? 'opacity: "' . $opacity . '",' : '';
// 			$rotation				= $rotation ? 'rotation: "' . $rotation . '",' : '';

// 			$output .= '
// 				<script>
// 					( function( $ ) {
// 						$( document ).ready( function() {
// 							var controller = new ScrollMagic.Controller();
// 							new ScrollMagic.Scene({
// 									triggerElement: "#wn-single-image-' . $GLOBALS[ 'wn-single-image-uniqid' ] . '",
// 									duration: "' . $duration . '",
// 									triggerHook: "' . $trigger_hook . '"
// 								})
// 								.setTween( "#wn-single-image-' . $GLOBALS[ 'wn-single-image-uniqid' ] . ' img", { ' . $opacity . $rotation . $horizontal_movement . $vertical_movement . ' } )
// 								.addTo( controller );
// 						}); // end document ready
// 					})( jQuery );
// 				</script>
// 			</div>';

// 		endif;

// 		return $output;
// 	}
// endif;


// // Column Text extend
// if ( ! function_exists( 'pa_vc_column_text' ) ) {

// 	// after VC Init
// 	add_action( 'vc_after_init', 'pa_vc_column_text' );

// 	function pa_vc_column_text() {

// 		$pwa_group = esc_html__( 'Power add-on Animation', 'vision' );

// 		// Add Params
// 		$vc_column_text_new_params = array(

// 			// vc_column_text custom group
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Enable Animation Pro', 'power-addons' ),
// 				'param_name'		=> 'enable_animation_pro',
// 				'type'				=> 'checkbox',
// 				'std'				=> false,
// 				'edit_field_class'	=> 'vc_col-sm-12 wn-margin-bottom20',
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Effect Start Point', 'power-addons' ),
// 				'description'		=> esc_html__( 'Can be a number between 0 and 1 defining the position of the trigger Hook in relation to the viewport.', 'power-addons' ),
// 				'param_name'		=> 'trigger_hook',
// 				'type'				=> 'textfield',
// 				'std'				=> '0.4',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Effect Length', 'power-addons' ),
// 				'description'		=> esc_html__( 'The duration of the scene. If 0 tweens will auto-play when reaching the scene start point, pins will be pinned indefinetly starting at the start position.', 'power-addons' ),
// 				'param_name'		=> 'duration',
// 				'type'				=> 'textfield',
// 				'std'				=> '100%',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Vertical Movement', 'power-addons' ),
// 				'param_name'		=> 'vertical_movement',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Horizontal Movement', 'power-addons' ),
// 				'param_name'		=> 'horizontal_movement',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Rotation at End', 'power-addons' ),
// 				'param_name'		=> 'rotation',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 			array(
// 				'group'				=> $pwa_group,
// 				'heading'			=> esc_html__( 'Opacity at End', 'power-addons' ),
// 				'param_name'		=> 'opacity',
// 				'type'				=> 'textfield',
// 				'edit_field_class'	=> 'vc_col-sm-6 wn-margin-bottom20',
// 				'dependency'		=> array(
// 					'element'	=> 'enable_animation_pro',
// 					'value'		=> 'true',
// 				),
// 			),
// 		);

// 		vc_add_params( 'vc_column_text', $vc_column_text_new_params ); 
// 	}
// }

// if ( ! function_exists( 'vc_theme_before_vc_column_text' ) ) :
// 	function vc_theme_before_vc_column_text( $atts, $content = null ) {

// 		extract( shortcode_atts( array(
// 			'enable_animation_pro'	=> '',
// 		), $atts ) );

// 		$GLOBALS[ 'wn-column-text-uniqid' ] = uniqid();

// 		$output	= '';

// 		if ( $enable_animation_pro ) :
// 			$output .= '<div class="wn-column-text-wrap" id="wn-column-text-' . $GLOBALS[ 'wn-column-text-uniqid' ] . '">';
// 		endif;

// 		return $output;
// 	}
// endif;

// if ( ! function_exists( 'vc_theme_after_vc_column_text' ) ) :
// 	function vc_theme_after_vc_column_text( $atts, $content = null ) {

// 		extract( shortcode_atts( array(
// 			'enable_animation_pro'	=> '',
// 			'trigger_hook'			=> '0.4',
// 			'duration'				=> '100%',
// 			'vertical_movement'		=> '',
// 			'horizontal_movement'	=> '',
// 			'rotation'				=> '',
// 			'opacity'				=> '',
// 		), $atts ) );

// 		$output	= '';

// 		if ( $enable_animation_pro ) :

// 			$horizontal_movement	= $horizontal_movement ? 'x: "' . $horizontal_movement . '",' : '';
// 			$vertical_movement		= $vertical_movement ? 'y: "' . $vertical_movement . '",' : '';
// 			$opacity				= is_numeric( $opacity ) ? 'opacity: "' . $opacity . '",' : '';
// 			$rotation				= $rotation ? 'rotation: "' . $rotation . '",' : '';

// 			$output .= '
// 				<script>
// 					( function( $ ) {
// 						$( document ).ready( function() {
// 							var controller = new ScrollMagic.Controller();
// 							new ScrollMagic.Scene({
// 									triggerElement: "#wn-column-text-' . $GLOBALS[ 'wn-column-text-uniqid' ] . '",
// 									duration: "' . $duration . '",
// 									triggerHook: "' . $trigger_hook . '"
// 								})
// 								.setTween( "#wn-column-text-' . $GLOBALS[ 'wn-column-text-uniqid' ] . ' .wpb_wrapper", { ' . $opacity . $rotation . $horizontal_movement . $vertical_movement . ' } )
// 								.addTo( controller );
// 						}); // end document ready
// 					})( jQuery );
// 				</script>
// 			</div>';

// 		endif;

// 		return $output;
// 	}
// endif;