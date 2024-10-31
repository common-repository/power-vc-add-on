<?php
function pa_category_box($attributes, $content){
	
	
extract(shortcode_atts(	array(
	'title'=>'',
	'show_title'=>'true',
	'post_count'=>5,
	'show_date'=>'true',
	'show_category'=>'true',
	'show_author'=>'true',
	'category'=>'',
	'orderby'=>'',
), $attributes));

$i = 0 ;

// orderby query args
switch ( $orderby ) :
	case 'comment_count':
		$orderby = '&orderby=comment_count&order=DESC';
	break;

	case 'view_count':
		$orderby = '&meta_key=pa_views&orderby=meta_value_num&order=DESC';
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

ob_start();
?>	
	
	<div id="pa-wrap" class="pa-wrap">
		<div class="pa-latest-cat-box">
			<?php if( 'true' == $show_title  ) { ?>
			<div class="pa-sub-content">
				<h6 class="pa-h-sub-content"><?php echo esc_html($title); ?></h6>
			</div>
			<?php } ?>
			<?php 
			if(empty($category))
				$qParams = 'post_type=post&paged=1&posts_per_page='.$post_count.$orderby.'';
			else
				$qParams = 'post_type=post&paged=1&posts_per_page='.$post_count.'&category_name='.$category.$orderby.'';
			
		   		$wpbp = new WP_Query( $qParams ); 
			$i = 0;
			$div_must_echo_first_time = 0;  
			if ($wpbp->have_posts()) : while ($wpbp->have_posts()) : $wpbp->the_post(); 
			
			
			
			if( 0 == $i ) {
			
			?>
		 	<article class="pa-blog-post lc-main clearfix">
		 		<figure>
		    			<?php
					  $image = get_the_post_thumbnail( get_the_ID(), 'power_addons_latestfromblog' );
					 
					  if( !empty($image) ) 
					  	echo $image;
					  else 
					  	echo '<img src="'.get_template_directory_uri() . '/images/featured.jpg" />';
		 			?>
		
		 		</figure>	
				<?php if('true' == $show_title){ ?>
		        	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		        	<?php } ?>
		
		          	<p class="pa-blog-author">	
					 	<?php if('true' == $show_date) echo get_the_time(get_option( 'date_format' )); ?> 
						<?php if( ('true' == $show_date) &&  ('true' == $show_author)) { ?>
						/
						<?php } ?>
						<?php if('true' == $show_author) {  ?>
						<strong><?php esc_html_e('by', 'power-addons') ?></strong> <?php echo get_the_author(); ?>
						<?php } ?>
						<?php if('true' == $show_category){ ?>
						<strong><?php esc_html_e('in','power-addons'); ?></strong> <?php the_category(', ') ?>
						<?php } ?>
		        </p>
		
				<p class="blog-detail"><?php echo Power_Addons_Public::power_addon_webnus_excerpt(31); ?></p>
				
			</article> 
			<?php } else { ?>
		  <?php if( 0 == $div_must_echo_first_time ){ ?>			
		  <div class="lc-items">
		  <?php } ?>
		  	<article class="blog-line clearfix">
		          <a href="<?php the_permalink(); ?>" class="img-hover"><?php 
			  $image = 	get_the_post_thumbnail( get_the_ID(), 'power_addons_tabs_img' ); 
			  if( !empty($image) ) 
			  	echo $image;
			  else 
			  	echo '<img src="'.get_template_directory_uri() . '/images/featured_140x110.jpg" />';
		          	?></a>
		
		            <?php if('true' == $show_title) { ?>
		            <h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
		            <?php } ?>
		
		        <p class="pa-blog-author">
		        	    <?php if('true' == $show_date) echo get_the_time(get_option( 'date_format' )); ?> 
		            	<?php if( ('true' == $show_date) &&  ('true' == $show_author)) { ?>
		            	/
		            	<?php } ?>
		            	<?php if('true' == $show_author) {  ?>
		            	<strong><?php esc_html_e('by', 'power-addons') ?></strong> <?php echo get_the_author(); ?>
		            	<?php } ?>
		
		        </p>
		    </article>
		
		
		  
		  <?php 
		$div_must_echo_first_time++;
		} // end of else that check first block
		
		$i++;
			endwhile;
		endif;
		/* Restore original Post Data */
		wp_reset_postdata();
		
		 ?>
		</div>
		</div>
	</div>
<?php	
$output = ob_get_contents();
ob_end_clean();	
return $output;
}

add_shortcode('pa_categorybox', 'pa_category_box');