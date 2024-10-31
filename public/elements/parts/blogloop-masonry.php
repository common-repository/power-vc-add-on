<article  class="pin-box entry -item">
<?php
	$post_format = get_post_format(get_the_ID());
	$content = get_the_content();
?>

<div class="img-item">
 <?php
		if( 'video'  == $post_format || 'audio'  == $post_format)
		{
			$pattern = '\\[' . '(\\[?)' . "(video|audio)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2])))
			{
				$video = $matches[0];	
				echo do_shortcode($video);		
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}
		}else
		if( 'gallery'  == $post_format)
		{			
			$pattern = '\\[' . '(\\[?)' . "(gallery)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			if( (is_array($matches)) && (isset($matches[3])) && ($matches[2] == 'gallery') && (isset($matches[2])))
			{
				$ids = (shortcode_parse_atts($matches[3]));
				if(is_array($ids) && isset($ids['ids']))
					$ids = $ids['ids'];
				echo do_shortcode('[vc_gallery onclick="link_no" img_size= "full" type="flexslider_fade" interval="3" images="'.$ids.'"  custom_links_target="_self"]');
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}	
		}else
			echo get_the_post_thumbnail( get_the_ID(), 'Full' ); 	
?>
</div>
<div class="pin-ecxt">
	<h6 class="pa-blog-cat"><?php the_category(', ') ?> </h6>
	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
<?php
// Post Content
		if($post_format == 'quote' ) echo '<blockquote>';
			echo '<p>'.Power_Addons_Public::power_addon_webnus_excerpt(31).'</p>';
		if($post_format == 'quote') echo '</blockquote>';
		if($post_format == ('quote') || $post_format == 'aside' )
			echo '<a class="pa-readmore" href="'. get_permalink( get_the_ID() ) . '">' . esc_html__('View Post', 'power-addons') . '</a>';
	?>
</div>
				<div class="pin-ecxt2">
					<div class="col1-3"><i class="fa-comment-o"></i><span><?php echo get_comments_number() ?></span></div>
					<div class="col1-3"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?><p><?php the_author_posts_link(); ?></p></div>
					<div class="col1-3"><h6 class="pa-blog-date"><a href="<?php the_permalink(); ?>"><?php echo get_the_date('d M Y');?></a></h6></div>
				</div> <!-- end pin-ecxt2 -->

</article>