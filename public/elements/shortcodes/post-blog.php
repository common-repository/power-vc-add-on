<?php
function vision_post_blog($attributes, $content = null){
	extract(shortcode_atts(array(
		'type'		=>'1',
		'category'	=>'',
		'count'		=>'',
		'orderby'	=>'',
	), $attributes));

	ob_start();
	$p_count = '0';
	$paged = ( is_front_page() ) ? 'page' : 'paged' ;
	$pa_post_last_time = get_the_time(get_option( 'date_format' )); $pa_post_i=1; $vision_webnus_flag = false; //timeline

	// orderby query args
	switch ( $orderby ) :
		case 'comment_count':
			$orderby = '&orderby=comment_count&order=DESC';
		break;

		case 'view_count':
			$orderby = '&meta_key=vision_webnus_views&orderby=meta_value_num&order=DESC';
		break;

		case 'social_score':
			if ( class_exists( 'SocialMetricsTracker' ) ) {
				$orderby ='&post_type=post&meta_key=socialcount_total&orderby=meta_value_num&order=DESC';
			}
		break;

		default:
			$orderby = '&orderby=date&order=DESC';
		break;
	endswitch;

	$args = 'post_type=post&paged='.get_query_var($paged).'&category_name='.$category.'&posts_per_page='.$count.$orderby.'';
	$query = new WP_Query($args);
	echo '<section id="pa-wrap" class="pa-wrap">';
	if ($type == 6){
		echo'<section id="main-content-pin"><div class="container"><div id="pin-content">';
	}elseif ($type == 7){
		echo'<section id="main-content-timeline"><div class="container"><div id="tline-content">';
	}
	if ($query ->have_posts()) :
		if ($type == 3)
			echo '<div class="vc_row">';
	while ($query -> have_posts()) : $query -> the_post();
	switch($type){
		case 2: 
			require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop-type2.php' );
		break;
		case 3:
			require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop-type3.php' );
		break;
		case 4:
			if($p_count == '0')
				require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop.php' );
			else
				require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop-type2.php' );
			$p_count++;
		break;
		case 5:
			if($p_count == '0'){
				require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop.php' );
				echo '<div class="vc_row">';
			}else
				require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop-type3.php' );
			$p_count++;
		break;
		case 6:
			require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop-masonry.php' );
		break;
		case 7:
			require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop-timeline.php' );
		break;
		default:
			require( POWER_ADDONS_DIR . 'public/elements/parts/blogloop.php' );
		break;
		}
	endwhile;
	if($type == 3 || $type == 5)
		echo '</div>';
	elseif($type == 7) // for timeline
		echo'<div class="tline-topdate enddte">'. get_the_time(get_option( 'date_format' )) .'</div></div></div>';
	endif;

	if(function_exists('wp_pagenavi')) {
		wp_pagenavi( array( 'query' => $query ) );
	}
	if ($type == 7){
		echo '</section>';
	}

	if ($type == 6){
		echo '</div></div></section>';
	}
	echo '</section>';
	$out = ob_get_contents();
	ob_end_clean();
	wp_reset_postdata();
	return $out;
}
add_shortcode("pa_post-blog", "vision_post_blog");