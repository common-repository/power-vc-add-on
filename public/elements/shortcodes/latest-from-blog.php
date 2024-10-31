<?php
function pa_latestfromblog( $attributes, $content = null ) {
extract(shortcode_atts(	array(
	'type'			=> 'one',
	'category'		=> '',
	'carousel'		=> 'false',
	'item_carousel'	=> '',
	'post_to_show'	=> '',
), $attributes));
	$post_format = get_post_format(get_the_ID());
	ob_start();

	// carousel

echo '<div id="pa-wrap" class="pa-wrap">';
if ( $carousel == 'true' ){
	$carousel					= $carousel ? 'pa-latest-b-carousel owl-carousel owl-theme' : '' ;
	$lastest_b_carousel_item	= $item_carousel ? 'data-items="' . $item_carousel . '"' : '';
	echo '<div class="clearfix">
			<div class="container pa-latestposts-'.esc_attr($type).' ' .$carousel. ' " ' .$lastest_b_carousel_item. '>';
} else {
	echo '<div class="container pa-latestposts-'.esc_attr($type).'">';
}
?>
<?php
	if ($type=='one'){
			$query = new WP_Query('posts_per_page=2&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post();
?>
	<div class="vc_col-md-6 vc_col-sm-6">
		<article class="pa-latest-b">
			<figure class="pa-latest-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' ); ?></figure>
			<div class="pa-latest-content"><h6 class="pa-latest-b-cat"><?php the_category(', '); ?></h6>
				<h3 class="pa-latest-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="pa-latest-author"><?php the_author_posts_link(); ?> / <?php the_time(get_option( 'date_format' )); ?></p>
				<p class="pa-latest-excerpt"><?php  echo Power_Addons_Public::power_addon_webnus_excerpt(36); ?></p>
			</div>
		</article>
	</div>
<?php
	endwhile;
	}elseif ($type=='two'){
			$i = 0;
			$query = new WP_Query('posts_per_page=5&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post();
      		if( $i == 0 ) {
      		?>
      		<div class="vc_col-md-7">
				<article class="pa-blog-post clearfix ">
					<figure class="pad-r20">
								<?php
								  $image =  get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );
								  if( !empty($image) )
									echo $image;
								  else
									echo '<img src="'.get_template_directory_uri() . '/images/featured.jpg" />';
								?>
					</figure>
					<div class="pa-entry-content">
					<div class="pa-blgt1-top-sec">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<h6 class="pa-blog-cat"><?php the_category(', ') ?></h6><h6 class="pa-blog-date"><i class="fa-clock-o"></i><?php the_time(get_option( 'date_format' )) ?></h6>
					</div>
						 <?php
							if( 'quote' == $post_format  ) echo '<blockquote>';
							echo '<p class="blog-detail">';
							echo Power_Addons_Public::power_addon_webnus_excerpt(45);
							echo '<br><br><a class="pa-readmore" href="';
							the_permalink();
							echo '">' . esc_html('readmore') . '</a>';
							echo '</p>';
							if( 'quote' == $post_format  ) echo '</blockquote>';
						?>
					</div>
				</article>
			</div><div class="vc_col-md-5">
		<?php  }else{ ?>

      	<article class="blog-line clearfix">
          	<a href="<?php the_permalink(); ?>" class="img-hover"><?php
				$image = get_the_post_thumbnail( get_the_ID(), 'power_addons_tabs_img' );
				if( !empty($image) )
					echo $image;
				else
					echo '<img src="'. WP_PLUGIN_URL . '/power-addons/public/images/featured_140x110.jpg" />';
          	?></a>
			<p class="pa-blog-cat"><?php the_category(', '); ?></p><h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4><p><?php echo get_the_time(get_option( 'date_format' )); ?> 	/<strong><?php esc_html_e('by', 'power-addons') ?></strong> <?php echo get_the_author(); ?>
        </article>

      <?php
		}
		$i++;
		endwhile;
		?>
		</div>
		<?php
	}elseif ($type=='three'){
	$query = new WP_Query('posts_per_page=3&category_name='.$category.'');
	while ($query -> have_posts()) : $query -> the_post();
?>
	<div class="vc_col-md-4 vc_col-sm-4"><article class="pa-latest-b2"><figure class="pa-latest-b2-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?></figure><div class="pa-latest-b2-cont"><h6 class="pa-latest-b2-cat"><?php the_category(', '); ?></h6><h3 class="pa-latest-b2-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3><p><?php echo Power_Addons_Public::power_addon_webnus_excerpt(17); ?></p><div class="pa-latest-b2-metad2"><i class="fa-comment-o"></i><span><?php echo get_comments_number() ?></span> / <span class="pa-latest-b2-date"><?php the_author_posts_link(); ?> / <?php echo get_the_date('F d, Y');?></span></div></div></article></div>
<?php
	endwhile;
	}elseif ($type=='four'){
	$query = new WP_Query('posts_per_page=2&category_name='.$category.'');
	while ($query -> have_posts()) : $query -> the_post();
?>
	<div class="vc_col-md-6"><article class="pa-latest-b2"> <div class="vc_col-md-3"> <h6 class="pa-blog-date"><span><?php the_time('d') ?> </span><?php the_time('M Y') ?> </h6> <div class="pa-au-avatar"><?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?></div> <h6 class="pa-blog-author"><strong><?php esc_html_e('Written by','power-addons'); ?></strong><br> <?php the_author_posts_link(); ?> </h6> <h6 class="pa-latest-b2-cat"><?php the_category(', '); ?></h6> </div><div class="vc_col-md-9"> <figure class="pa-latest-b2-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?></figure> <div class="pa-latest-b2-cont"><h3 class="pa-latest-b2-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3> </div> </div><div class="pa-vertical-space"></div></article></div>
<?php
	endwhile;
	}elseif ($type=='five'){
			$query = new WP_Query('posts_per_page=6&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post();
?>
	 <div class="vc_col-md-6 vc_col-lg-4"><article class="pa-latest-b2">
	  <figure class="pa-latest-b2-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?></figure>
	  <div class="pa-latest-b2-cont">
	  <h6 class="pa-latest-b2-cat"><?php the_category(', '); ?></h6>
	  <h3 class="pa-latest-b2-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	  <h5 class="pa-latest-b2-date"><?php the_author_posts_link(); ?> / <?php echo get_the_date('F d, Y');?></h5>
	  </div></article></div>
<?php
	endwhile;
	} elseif ($type=='six') {
			$query = new WP_Query('posts_per_page=4&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post();
?>
	<div class="vc_col-md-3 vc_col-sm-6"><article class="pa-latest-b">
	  <figure class="pa-latest-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?></figure>
		<div class="pa-latest-content">
		<p class="pa-latest-date"><?php the_time(get_option( 'date_format' )); ?></p>
		<h3 class="pa-latest-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="pa-latest-author"><strong><?php esc_html_e('by','power-addons') ?></strong> <?php the_author_posts_link(); ?> <strong><?php esc_html_e('in','power-addons') ?></strong> <?php the_category(', '); ?></p>
		</div>
      </article></div>
<?php
	endwhile;
	} elseif ( $type == 'seven' ) {
		$wpbp = new WP_Query('posts_per_page=3&category_name='.$category.'');
		if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); ?>
		<div class="vc_col-md-4 vc_col-sm-4"><article class="pa-latest-b">
		<figure class="pa-latest-img"><?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?></figure>
		  	<div class="pa-wrap-date-icons">
			    <h3 class="pa-latest-date">
			    	<span class="pa-latest-date-month"><?php the_time('M') ?></span>
			    	<span class="pa-latest-date-day"><?php the_time('d') ?></span>
			    	<span class="pa-latest-date-year"><?php the_time('Y') ?></span>
			    </h3>
			</div>
			<div class="pa-latest-content">
				<h3 class="pa-latest-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p class="pa-latest-author"><?php esc_html_e('by ','power-addons'). the_author() . esc_html_e(' in ','power-addons') . the_category(', '); ?></p>
			</div>
	    </article></div> <?php

		endwhile; endif;
	} elseif ($type=='eight') {
		$query = new WP_Query('posts_per_page=3&category_name='.$category.'');
		while ($query -> have_posts()) : $query -> the_post(); ?>
			<div class="vc_col-sm-4">
				<article class="pa-latest-b8">
					<figure class="pa-latest-b8-img">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
					</figure>
					<div class="pa-latest-b8-content">
						<span class="post-format-icon <?php echo get_post_format(); ?>"></span>
						<h3 class="pa-latest-b8-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php echo Power_Addons_Public::power_addon_webnus_excerpt(32); ?></p>
						<a class="pa-readmore" href="<?php echo get_permalink($query->ID); ?>"><?php echo esc_html_e('readmore','power-addons'); ?></a>
						<div class="pa-latest-b8-meta">
							<div class="autho"><i class="sl-user"></i><span><?php esc_html_e( 'by: ', 'power-addons' ); the_author_posts_link(); ?></span></div>
							<div class="date"><i class="sl-calendar"></i><span><?php echo get_the_date('d F Y'); ?></span></div>
							<div class="comments"><i class="sl-bubble"></i><span><?php echo get_comments_number(); ( get_comments_number() == 0 || get_comments_number() == 1 ) ? esc_html_e( ' Comment', 'power-addons' ) : esc_html_e( ' Comments', 'power-addons' ); ?></span></div>
						</div>
					</div>
				</article>
			</div>
		<?php endwhile;
	} elseif ($type=='nine') {
		$query = new WP_Query('posts_per_page=3&category_name='.$category.'');
		while ($query -> have_posts()) : $query -> the_post(); ?>
			<div class="vc_col-sm-4">
				<article class="pa-latest-b9">
					<figure class="pa-latest-b9-img">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
					</figure>
					<div class="pa-latest-b9-content">
						<h3 class="pa-latest-b9-title">
							<span class="post-format-icon <?php echo get_post_format(); ?>"></span>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<div class="pa-latest-b9-meta">
							<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
							<span class="categories"><?php esc_html_e( 'in ', 'power-addons' ); the_category(', '); ?></span>
							<span class="comments"><?php echo get_comments_number(); ( get_comments_number() == 0 || get_comments_number() == 1 ) ? esc_html_e( ' Comment', 'power-addons' ) : esc_html_e( ' Comments', 'power-addons' ); ?></span>
						</div>
					</div>
				</article>
			</div>
		<?php endwhile;
	} elseif ($type=='ten') {
		$query = new WP_Query('posts_per_page=4&category_name='.$category.'');
		while ($query -> have_posts()) : $query -> the_post(); ?>
			<div class="vc_col-md-6">
				<article class="pa-latest-b10">
					<figure class="pa-latest-b10-img">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
					</figure>
					<div class="pa-latest-b10-content">
						<div class="pa-latest-b10-meta">
							<span class="date"><?php echo get_the_date('d F Y'); ?></span>
						</div>
						<h3 class="pa-latest-b10-title">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h3>
						<p><?php echo Power_Addons_Public::power_addon_webnus_excerpt(19); ?></p>
						<a class="pa-readmore" href="<?php echo get_permalink($query->ID); ?>"><?php echo esc_html_e('readmore','power-addons'); ?></a>
					</div>
				</article>
			</div>
		<?php endwhile;
	} elseif ($type=='eleven') {
		$query = new WP_Query('posts_per_page=3&category_name='.$category.'');
		while ($query -> have_posts()) : $query -> the_post(); ?>
			<div class="vc_col-sm-4">
				<article class="pa-latest-b11">
					<div class="pa-latest-b11-content">
						<h6 class="categories"><?php esc_html_e( 'In ', 'power-addons' ); the_category(', '); ?></h6>
						<h3 class="pa-latest-b11-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<div class="pa-latest-b11-meta">
							<span class="date"><?php echo get_the_date('F d, Y'); ?></span>
							<span class="comments"><?php echo get_comments_number(); ( get_comments_number() == 0 || get_comments_number() == 1 ) ? esc_html_e( ' Comment', 'power-addons' ) : esc_html_e( ' Comments', 'power-addons' ); ?></span>
						</div>
					</div>
					<figure class="pa-latest-b11-img">
						<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
					</figure>
				</article>
			</div>
		<?php endwhile;
	} elseif ($type=='twelve'){
		$post_to_show = $post_to_show ? $post_to_show : '3' ;
		$query = new WP_Query('posts_per_page=' . $post_to_show . '&category_name='.$category.'');
		while ($query -> have_posts()) : $query -> the_post();
		?>
				<div class="vc_col-md-4 vc_col-sm-4">
					<article class="pa-latest-b12">
						<figure class="pa-latest-b12-img">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
						</figure>
						<div class="pa-latest-b12-cont">
							<h6 class="pa-latest-b12-cat"><?php the_category(', '); ?></h6>
							<h3 class="pa-latest-b12-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo Power_Addons_Public::power_addon_webnus_excerpt(19); ?></p>
							<div class="pa-latest-b12-metad2">
								<span class="pa-latest-b12-author"><span><?php esc_html_e( 'by', 'power-addons') ?></span><?php the_author_posts_link(); ?></span>
								<span class="pa-latest-b12-date"><?php echo get_the_date();?></span>
							</div>
						</div>
					</article>
				</div>
		<?php
		endwhile;
	}elseif ($type=='thirteen'){
		$post_to_show = $post_to_show ? $post_to_show : '4' ;
		$query = new WP_Query('posts_per_page=' . $post_to_show . '&category_name='.$category.'');
		while ($query -> have_posts()) : $query -> the_post();
		?>
		<div class="vc_col-md-3 vc_col-sm-3">
			<article class="pa-latest-b13">
				<figure class="pa-latest-b13-img">
					<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
					<h6 class="pa-latest-b13-cat"><?php the_category(', '); ?></h6>
				</figure>
				<div class="pa-latest-b13-cont">
					<h3 class="pa-latest-b13-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php echo Power_Addons_Public::power_addon_webnus_excerpt(19); ?></p>
					<div class="pa-latest-b13-metad2">
						<span class="pa-latest-b13-author"><span><?php esc_html_e( 'BY', 'power-addons') ?> </span><?php the_author_posts_link(); ?></span>
						<span class="pa-latest-b13-date"><?php echo get_the_date();?></span>
					</div>
				</div>
			</article>
		</div>
		<?php
		endwhile;
	} elseif ( $type == 'fourteen' ){
			$query = new WP_Query('posts_per_page=4&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post(); ?>
				<div class="vc_col-lg-3 vc_col-md-6 wn-latest-b14">
					<article class="pa-latest-b14" style="background: url(<?php echo the_post_thumbnail_url ( $query->ID, 'vision_webnus_latest_img' ); ?> ); ">
						<div class="pa-latest-b14-cont">
							<a class="hcolorf" href="<?php the_permalink(); ?>">
								<i class="ti-arrow-right" aria-hidden="true"></i>
							</a>
							<div class="pa-latest-b14-meta">
								<span class="pa-latest-b14-cat"><?php echo the_category(', '); ?></span>
								<span class="pa-latest-b14-date"><?php echo get_the_date(); ?></span>
							</div>
							<h3 class="pa-latest-b14-title"><a class="hcolorf" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						</div>
					</article>
				</div>
			<?php endwhile;
		} elseif ( $type == 'fifteen' ){
			$query = new WP_Query('posts_per_page=3&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post(); ?>
				<div class="vc_col-md-4 wn-latest-b15">
					<article class="pa-latest-b15">
						<figure class="pa-latest-b15-img">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
							<div class="pa-latest-b15-overlay">
								<a href="<?php get_permalink(); ?>"><i class="ti-arrow-right"></i></a>
							</div>
						</figure>
						<div class="pa-latest-b15-content">
							<div class="pa-latest-b15-meta-data"><?php echo the_category(', '); ?> / <?php echo get_the_date(); ?></div>
							<h2><a href="<?php get_permalink(); ?>"><?php the_title(); ?></a></h2>
						</div>
					</article>
				</div>
			<?php endwhile;
		} elseif ( $type == 'sixteen' ){
			$query = new WP_Query('posts_per_page=4&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post(); ?>
				<div class="vc_col-md-3 wn-latest-b16">
					<article class="pa-latest-b16">
						<figure class="pa-latest-b16-img">
							<?php echo get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );  ?>
							<div class="pa-latest-b16-overlay">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<div class="pa-latest-b16-meta-data"><?php echo the_category(', '); ?></div>
							</div>
						</figure>
						<div class="pa-latest-b16-content">
							<p class="pa-latest-b61-excerpt"><?php echo Power_Addons_Public::power_addon_webnus_excerpt(15); ?></p>
							<a href="<?php the_permalink(); ?>" class="pa-latest-b16-readmore"><?php echo esc_html__( 'Read More', 'power-addons' ); ?></a>
							<div class="pa-latest-b16-footer">
								<div class="pa-latest-author">
								<span><?php esc_html_e('By','power-addons') ?></span><strong><?php the_author_posts_link(); ?></strong>
								</div>
								<div class="pa-latest-date">
								<span><i class="pe-7s-clock"></i><?php echo get_the_date(); ?></span>
								</div>
							</div>
						</div>
					</article>
				</div>
			<?php endwhile;
		} elseif ( $type == 'seventeen' ) {
			$query = new WP_Query('posts_per_page=3&category_name='.$category.'');
			while ($query -> have_posts()) : $query -> the_post(); ?>
				<div class="vc_col-md-12 wn-latest-b17">
					<article class="pa-latest-b17">
						<div class="pa-latest-b17-content">
							<div class="pa-latest-date"><?php echo get_the_date(); ?></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<a href="<?php the_permalink(); ?>" class="pa-latest-b17-readmore"><?php echo esc_html__( 'Read More', 'power-addons' ); ?></a>
						</div>
					</article>
				</div>
			<?php endwhile;
		}
?>
<?php if ( $carousel == 'true' ) {
	echo '</div></div>';
} else {
	echo '</div>';
}
echo '</div>';
	$out = ob_get_contents();
	ob_end_clean();
	wp_reset_postdata();
	return $out;
 }
 add_shortcode('pa_latestfromblog', 'pa_latestfromblog');