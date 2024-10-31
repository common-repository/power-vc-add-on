<div class="vc_col-md-6 blg-typ3">
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post blgtyp3'); ?>>
<?php
	$post_format = get_post_format(get_the_ID());
	if(!$post_format) $post_format = 'standard';
	$content = get_the_content();

// Post Thumbnail
if( $post_format != 'aside' && $post_format != 'quote' && $post_format != 'link' && (has_post_thumbnail())) { ?>
	 <div class="blg-typ3-thumb">
		<?php if($post_format  == 'video' || $post_format == 'audio') {
					$pattern = '\\[' . '(\\[?)' . "(video|audio)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
					preg_match('/'.$pattern.'/s', $post->post_content, $matches);
					if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2]))) {
					$video = $matches[0];
					echo do_shortcode($video);
					$content = preg_replace('/'.$pattern.'/s', '', $content);
					}
			} elseif( 'gallery'  == $post_format) {
					$pattern = '\\[' . '(\\[?)' . "(gallery)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
					preg_match('/'.$pattern.'/s', $post->post_content, $matches);
					if( (is_array($matches)) && (isset($matches[3])) && ($matches[2] == 'gallery') && (isset($matches[2]))) {
					$ids = (shortcode_parse_atts($matches[3]));				
					if(is_array($ids) && isset($ids['ids'])) { $ids = $ids['ids']; }
					echo do_shortcode('[vc_gallery img_size= "420x280" type="flexslider_slide" interval="3" images="'.$ids.'" onclick="link_no" custom_links_target="_self"]');
					$content = preg_replace('/'.$pattern.'/s', '', $content);}
			} else {
					echo get_the_post_thumbnail( get_the_ID(), 'power_addons_blog3_thumb' ); }
		?>
		<br>
	</div>
	<div class="blg-typ3-content">
<?php } else { ?>
	<div class="blg-typ3-inner">
<?php } ?>
	
<div class="pa-postmetadata">
	<h6 class="pa-blog-date"><i class="ti-calendar"></i><?php the_time(get_option( 'date_format' )) ?></h6>
	<h6 class="pa-blog-cat"><i class="ti-folder"></i><?php the_category(', ') ?> </h6>
	<h6 class="pa-blog-comments"><i class="ti-comment"></i><?php comments_number(  ); ?> </h6>
</div>
	<?php
	if(function_exists('wp_review_show_total')){wp_review_show_total(true, 'review-total-only small-thumb');}
			if( ('aside' != $post_format ) && ('quote' != $post_format)  ) { 	
				if( 'link' == $post_format ) {
					preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $content,$matches);
					$content = preg_replace('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i','', $content,1);
					$link ='';
					if(isset($matches) && is_array($matches)) $link = $matches[0]; ?>
					<h3><a href="<?php echo esc_url($link); ?>"><?php the_title() ?></a></h3> <?php
		
				} else { ?>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3> <?php
				}
			}
		
?>		
	
<?php
// Post Content
		if($post_format == 'quote' ) echo '<blockquote>';
			echo '<p>'.Power_Addons_Public::power_addon_webnus_excerpt(31).'</p>';
		if($post_format == 'quote') echo '</blockquote>';
		if($post_format == ('quote') || $post_format == 'aside' )
			echo '<a class="pa-readmore" href="'. get_permalink( get_the_ID() ) . '">' . esc_html__('View Post', 'power-addons') . '</a>';
	?>
	
	</div>
<hr class="vertical-space1">
</article></div>