<?php
function power_addon_donate_buttons( $atts, $content = null ) {
	extract(shortcode_atts(array(
	'donate_content'	=> '',
	'id'				=> '',
	'color'				=> 'default',
	'size'				=> 'small',
	'border'			=> 'false',
	'icon'				=> 'theme-skin',
), $atts));
		$border 	= ( 'true' == $border ) ? 'bordered-bot' : '';
		$icon_str 	= $icon ? '<i class=" ' . $icon . ' "></i>' : '';
		$theme_skin	= ( $color == 'default' ) ? 'theme-skin' : '' ;
		$out = '
			<div id="pa-wrap" class="donate-popup">
				<a class=" pa-wrap donate-button square pa-button '.$theme_skin.' '.$color.' '.$size.' '.$border.' " href="#w-donate-'.get_the_ID().'" target="_self" data-effect="mfp-fade">
					<span class="media_label">'. $icon_str . $donate_content . '</span>
				</a>
			</div>
			<div class="white-popup mfp-with-anim mfp-hide">
				<div id="donate-contact-modal-'.get_the_ID().'">
					<div class="pa-w-modal modal-donate pa-wn-donate-contact-modal" id="w-donate-'.get_the_ID().'">
						<h3 class="modal-title">'. $donate_content .'</h3><br>
						'.do_shortcode('[contact-form-7 id="'.$id.'" title="' . $donate_content . '"]').'
					</div>
				</div>
			</div>';

		return $out;
}
add_shortcode( 'pa_donate','power_addon_donate_buttons' );