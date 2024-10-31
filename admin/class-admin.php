<?php
/**
 * The admin-specific functionality of the plugin.
 */
class Power_Addons_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->admin_page();
		$this->custom_group();
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
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

		wp_enqueue_style( $this->plugin_name, POWER_ADDONS_URL . 'admin/css/power-addons-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
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

		wp_enqueue_script( $this->plugin_name, POWER_ADDONS_URL . 'admin/js/power-addons-admin.js', array( 'jquery' ), $this->version, true );

	}

	/**
	 * include admin page
	 *
	 */
	public function admin_page() {
		include_once POWER_ADDONS_DIR . 'admin/admin-page/index.php';
	}

	/**
	 * include custom gorup
	 *
	 */
	public function custom_group() {
		include_once POWER_ADDONS_DIR . 'admin/vc-template/custom-group.php';
	}
	
}