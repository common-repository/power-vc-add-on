<?php 
global $post;
$post_format = get_post_format(get_the_ID());
$content = get_the_content();
if( !$post_format ) $post_format = 'standard';
if(($pa_post_last_time != date(' F Y',strtotime($post->post_date)) ) || $pa_post_i==1){
	$pa_post_last_time = date(' F Y',strtotime($post->post_date));
	echo '<div class="tline-topdate">'.  date(' F Y',strtotime($post->post_date)) .'</div>';
	if( $pa_post_i>1 ) $vision_webnus_flag = true;
} ?>
	<article id="post-<?php the_ID(); ?>"  class="tline-box <?php if(($pa_post_i%2)==0 && $vision_webnus_flag) { $vision_webnus_flag = false; $pa_post_i++; } elseif( ($pa_post_i%2)==0 ) echo ' rgtline'; ?>"> <span class="tline-row-<?php if(($pa_post_i%2)==0) echo 'r'; else echo 'l'; ?>"></span>
	<div class="tline-author-box">
	<?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?>
	<h6 class="tline-author">
	<?php the_author_posts_link(); ?>
	</h6>
	<h6 class="tline-date"><?php esc_html_e('Posted at: ','power-addons'); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_date('d M Y');?></a></h6>
	</div>
	 <?php
		if( 'video'  == $post_format || 'audio'  == $post_format){
			$pattern = '\\[' . '(\\[?)' . "(gallery)" . '(?![\\w-])' . '(' . '[^\\]\\/]*' . '(?:' . '\\/(?!\\])' . '[^\\]\\/]*' . ')*?' . ')' . '(?:' . '(\\/)' . '\\]' . '|' . '\\]' . '(?:' . '(' . '[^\\[]*+' . '(?:' . '\\[(?!\\/\\2\\])' . '[^\\[]*+' . ')*+' . ')' . '\\[\\/\\2\\]' . ')?' . ')' . '(\\]?)';
			preg_match('/'.$pattern.'/s', $post->post_content, $matches);
			if( (is_array($matches)) && (isset($matches[3])) && ( ($matches[2] == 'video') || ('audio'  == $post_format)) && (isset($matches[2]))){
				$video = $matches[0];
				echo do_shortcode($video);
				$content = preg_replace('/'.$pattern.'/s', '', $content);
			}
		}else
		if( 'gallery'  == $post_format){
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
			echo get_the_post_thumbnail( get_the_ID(), 'power_addons_blog2_thumb' );
	 ?> <br>
	  <div class="tline-ecxt">
		<h6 class="pa-blog-cat-tline"> <?php the_category('- ') ?></h6>
  <?php
		if( ('aside' != $post_format ) && ('quote' != $post_format)  ) {
			if( 'link' == $post_format ) {
			 preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $content,$matches);
			 $content = preg_replace('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i','', $content,1);
			 $link ='';
			if(isset($matches) && is_array($matches))
			$link = $matches[0];
		?>
		<h4><a href="<?php echo esc_url($link); ?>"><?php the_title(); ?></a></h4>
	<?php
	}else{
  ?>
  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
  <?php } } ?>
	  </div>
	  <div class="blog-com-sp"> <?php comments_popup_link(esc_html__('No Comments','power-addons') . ' &#187;', esc_html__('1 Comment','power-addons').' &#187;', esc_html__('% Comments','power-addons').' &#187;'); ?></div>
</article>
<?php $pa_post_i++;