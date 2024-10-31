<?php
function pa_postfromblog( $attributes, $content = null ) {
extract(shortcode_atts(	array(
	'post'=>''
), $attributes));
	ob_start();	
	$query = new WP_Query('p='.$post.'');
	if ($query -> have_posts()) : $query -> the_post();
?>
	<div id="pa-wrap" class="pa-wrap">
		<article class="pa-a-post-box">
			<figure class="pa-latest-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );   ?></figure>
			<div class="pa-latest-overlay"></div>
			<div class="pa-latest-txt">
				<h4 class="pa-latest-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<span class="pa-latest-cat"><?php the_category(' / ') ?></span>
				<span class="pa-latest-date"><i class="fa-clock-o"></i> <?php the_time(get_option( 'date_format' )); ?></span>
			</div>
		</article>
	</div>
<?php
	endif;
	$out = ob_get_contents();
	ob_end_clean();	
	wp_reset_postdata();
	return $out;
 }
 add_shortcode('pa_postblog', 'pa_postfromblog');