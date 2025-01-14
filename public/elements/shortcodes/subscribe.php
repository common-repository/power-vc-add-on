<?php
function pa_subscribe ($atts, $content = null) {
 	extract(shortcode_atts(array(
		'box_title'=>'',
		'box_text'=>'',
		'type'=>'boxed',
		'service'=>'FeedBurner',	
		'feedburner_id'=>'',
		'mailchimp_url'=>'',
	), $atts));
	ob_start();
?>
<div id="pa-wrap" class="pa-wrap">
	<?php
	$title=($box_title)?'<h3>'.$box_title.'</h3>':'';
	$email_name = ($service=='FeedBurner')?'email':'MERGE0';
	$text=($box_text)?'<div class="pa-subscribe-box-text"><p>'.$box_text.'</p></div>':'';
	$input='<div class="pa-subscribe-box-input"><input placeholder="'.esc_html__('YOUR E-MAIL','power-addons').'" class="pa-subscribe-box-email" type="text" name="'.$email_name.'"/><button class="pa-subscribe-box-submit button medium" type="submit">'.esc_html__('SUBSCRIBE','power-addons').'</button></div>';
			
			
	if($type=='boxed'){
		echo '<div class="pa-subscribe-box"><div class="pa-subscribe-box-top"><i class="fa-bell"></i>'.$title.'</div>';
	}else{
		echo '<div class="subscribe-'.$type.'">'.$title;
	}
	?>
	
	<?php if($service=='FeedBurner'){ ?>
		<form class="pa-subscribe-box-form" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onSubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo esc_url( $feedburner_id ); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<input type="hidden" value="<?php echo esc_attr($feedburner_id); ?>" name="uri"/>
			<input type="hidden" name="loc" value="en_US"/>
	<?php } elseif($service=='MailChimp'){ ?>	
		<form action="<?php echo esc_url($mailchimp_url); ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
	<?php } ?>
	
	<?php if($type=='bar1'){
		if($text){
			echo '<div class="container"><div class="col-md-6">'.$text.'</div><div class="col-md-6">'.$input.'</div></div>';
		}else{
			echo $input;
		}
	}else{
		echo $text.$input;
	}?>
		</form>	
	</div>
</div>

<?php
	$out = ob_get_contents();
	ob_end_clean();	
	return $out;
}
 add_shortcode('pa_subscribe','pa_subscribe');