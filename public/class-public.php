<?php
/**
 * The public-facing functionality of the plugin.
 */
class Power_Addons_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @param      string    $plugin_name    The name of the plugin.
	 * @param      string    $version        The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->load_elements();

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Power_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Power_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name.'-plugins', POWER_ADDONS_URL . 'public/css/plugins.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, POWER_ADDONS_URL . 'public/css/power-addons-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Power_Addons_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Power_Addons_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name . 'owlcarousel', POWER_ADDONS_URL . 'public/js/owlcarousel.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'flexslider', POWER_ADDONS_URL . 'public/js/flexslider.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'waypoints', POWER_ADDONS_URL . 'public/js/waypoints.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'flipclock', POWER_ADDONS_URL . 'public/js/flipclock.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'magnific-popup', POWER_ADDONS_URL . 'public/js/magnific-popup.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'jquery-visible', POWER_ADDONS_URL . 'public/js/jquery-visible.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'masonry', POWER_ADDONS_URL . 'public/js/jquery.masonry.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( $this->plugin_name . 'public', POWER_ADDONS_URL . 'public/js/power-addons-public.js', array( 'jquery' ), $this->version, true );

	}


	/**
	 * load elements
	 */
	public function load_elements() {

		// include shortcodes
		foreach( glob( POWER_ADDONS_DIR . 'public/elements/shortcodes/*.php' ) as $file ) :
			include_once $file;
		endforeach;

		// include vc_maps
		if ( function_exists( 'vc_map' ) ) : 
			foreach( glob( POWER_ADDONS_DIR . 'public/elements/vcmaps/*.php' ) as $file ) :
				include_once $file;
			endforeach;
		endif;

	}


	/**
	 * 
	 * Post View
	 * 
	 */
	public  static function power_addon_webnus_setViews( $postID ) {
		$count_key = 'vision_webnus_views';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}else{
			$count++;
			update_post_meta($postID, $count_key, $count);
		}
		return $count;
	}

	
	public static function power_addon_webnus_getViews( $postID ) {
		$count_key = 'power_addon_webnus_views';
		$count = get_post_meta($postID, $count_key, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $count_key);
			add_post_meta($postID, $count_key, '0');
		}
		return $count;
	}


	public static function power_addon_webnus_excerpt($limit) {
		$excerpt = explode(' ', get_the_excerpt(), $limit);
		if (count($excerpt)>=$limit) {
			array_pop($excerpt);
			$excerpt = implode(" ",$excerpt).'...';
		} else {
			$excerpt = implode(" ",$excerpt);
		}
		return $excerpt;
	}


	 
	public static function getFontsData( $fontsString ) {   
	    $googleFontsParam = new Vc_Google_Fonts();      
	    $fieldSettings = array();
	    $fontsData = strlen( $fontsString ) > 0 ? $googleFontsParam->_vc_google_fonts_parse_attributes( $fieldSettings, $fontsString ) : '';
	    return $fontsData;    
	}
 
	// inline style
	public static function googleFontsStyles( $fontsData ) {
	    $fontFamily = explode( ':', $fontsData['values']['font_family'] );
	    $styles[] = 'font-family:' . $fontFamily[0];
	    $fontStyles = explode( ':', $fontsData['values']['font_style'] );
	    $styles[] = 'font-weight:' . $fontStyles[1];
	    $styles[] = 'font-style:' . $fontStyles[2];
	     
	    $inline_style = '';     
	    foreach( $styles as $attribute ){           
	        $inline_style .= $attribute.'; ';       
	    }   
	    return $inline_style;
	}
 
	// Enqueue google font
	public static function enqueueGoogleFonts( $fontsData ) {
	    $settings = get_option( 'wpb_js_google_fonts_subsets' );
	    if ( is_array( $settings ) && ! empty( $settings ) ) {
	        $subsets = '&subset=' . implode( ',', $settings );
	    } else {
	        $subsets = '';
	    }
	    if ( isset( $fontsData['values']['font_family'] ) ) {
	        wp_enqueue_style( 
	            'vc_google_fonts_' . vc_build_safe_css_class( $fontsData['values']['font_family'] ), 
	            '//fonts.googleapis.com/css?family=' . $fontsData['values']['font_family'] . $subsets
	        );
	    }
	     
	}


}