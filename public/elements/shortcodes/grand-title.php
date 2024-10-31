<?php
function pa_tpt( $attributes, $content = null ) {

	extract(shortcode_atts(array(
		'type'						=> '1',
		'top_title'					=> '',
		'top_title_color'			=> '',
		'top_title_part_1'			=> '',
		'top_title_part_2'			=> '',
		'top_title_part_1_color'	=> '',
		'top_title_part_2_color'	=> '',
		'top_title_2'				=> '',
		'main_title'				=> '',
		'text_content'				=> '',
		'align'						=> '',
		'text_font'					=> 'font_family:Abril%20Fatface%3Aregular|font_style:400%20regular%3A400%3Anormal',
	), $attributes));
	ob_start();

	// Build the data array
    $text_font_data = Power_Addons_Public::getFontsData( $text_font );
    // Build the inline style
    $text_font_inline_style = Power_Addons_Public::googleFontsStyles( $text_font_data );   
    // Enqueue the right font   
    Power_Addons_Public::enqueueGoogleFonts( $text_font_data );

	$align		= ($align) ? $align : '';

	$top_title_part_1_color = $top_title_part_1_color ? 'color:'.$top_title_part_1_color.'; ' : '';
	$style_1	= ($top_title_part_1_color || $text_font) ? 'style="'.$top_title_part_1_color. $text_font_inline_style.'"': '';

	$top_title_part_2_color = $top_title_part_2_color ? 'color:'.$top_title_part_2_color.'; ' : '';
	$style_2	= ($top_title_part_2_color || $text_font) ? 'style="'.$top_title_part_2_color. $text_font_inline_style.'"': '';

	$top_title_color = $top_title_color ? 'color:'.$top_title_color.'; ' : '';
	$style_3	= ($top_title_color || $text_font) ? 'style="'.$top_title_color . $text_font_inline_style.'"': '';

	echo '<div id="pa-wrap" class="pa-wrap"><article class="pa-title-plus-text type-'.$type.' '.$align.' "  >';
	if ( $type == '1' || $type == '3' ) {
		echo ($top_title) ? '<h3 '.$style_3.'>'.$top_title.'</h3>' : '';
		echo ($top_title_part_1) ? '<h2 class="part-1"' .$style_1.'>'.$top_title_part_1.'</h2>' : '';
		echo ($top_title_part_2) ? '<h2 class="part-2"' .$style_2.'>'.$top_title_part_2.'</h2>' : '';
		echo ($text_content) ? '<p style="'.$text_font_inline_style.'">'.$text_content.'</p>' : '';
	}else{
		echo ($top_title_2) ? '<h3 style="'.$text_font_inline_style.'">'.$top_title_2.'</h3>' : '';
		echo ($main_title) ? '<h2 style="'.$text_font_inline_style.'">'.$main_title.'</h2>' : '';
	}
	echo '</article></div>';

	$out = ob_get_contents();
	ob_end_clean();
	$out = str_replace('<p></p>','',$out);
		return $out;
	 }
 	add_shortcode('pa_title_p_text', 'pa_tpt');