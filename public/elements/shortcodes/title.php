<?php
function pa_subtitle ($atts, $content = null) {
	extract( shortcode_atts( array(
		'type'				=> '1',
		'heading'			=> '4',
		'subtitle_content'	=> '',
		'subtitle_color'	=> '',
		'border_color'		=> '',
		'text_font'			=> 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
	), $atts ) );

	// Build the data array
    $text_font_data = Power_Addons_Public::getFontsData( $text_font );
    // Build the inline style
    $text_font_inline_style = Power_Addons_Public::googleFontsStyles( $text_font_data );   
    // Enqueue the right font   
    Power_Addons_Public::enqueueGoogleFonts( $text_font_data );

    $style = $text_font ? ' style="'.$text_font_inline_style.'"' : '' ;

	$border_color	= $border_color ? ' style="border-bottom-color: ' . $border_color . ';"' : '';
	$subtitle_color	= $subtitle_color ? ' style="color: ' . $subtitle_color . ';"' : '';

	$out = '
	<div id="pa-wrap" class="pa-wrap">
		<div class="pa-subtitle-element pa-subtitle-element' . $type . '"' . $border_color .'>
			<span class="before"></span>
			<h' . $heading . $subtitle_color . $style .' >'. $subtitle_content .'</h' . $heading . '>
			<span class="after"></span>
		</div>
	</div>';

	return $out;
 }
 add_shortcode('pa_subtitle','pa_subtitle');


/**
 * Max Title
 */
function pa_maxtitle_shortcode( $atts, $content = null ) {

	extract( shortcode_atts( array(
		'type'				=> '1',
		'heading'			=> '2',
		'maxtitle_content'	=> '',
		'maxtitle_color'	=> '',
		'text_font'			=> 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
		'white_color'		=> '',
	), $atts ) );

	
    // Build the data array
    $text_font_data = Power_Addons_Public::getFontsData( $text_font );
    // Build the inline style
    $text_font_inline_style = Power_Addons_Public::googleFontsStyles( $text_font_data );   
    // Enqueue the right font   
    Power_Addons_Public::enqueueGoogleFonts( $text_font_data );
    $white_color = ( $white_color == 'yes' ) ? 'dark' : '';
    $style = $text_font ? ' style="'.$text_font_inline_style.'"' : '' ;

	$maxtitle_color = $maxtitle_color ? ' style="color: ' . $maxtitle_color . ';"' : '';

	$out = '
	<div id="pa-wrap" class="pa-wrap ' . $white_color . '" >
		<div class="pa-max-title pa-max-title' . $type . '">
			<span class="before" ></span>
			<h' . $heading. $maxtitle_color . $style.' >'. $maxtitle_content .'</h'.$heading.'>
			<span class="after"></span>
		</div>
	</div>';

	return $out;
}

add_shortcode('pa_maxtitle','pa_maxtitle_shortcode');