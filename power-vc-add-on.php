<?php
/**
 * Plugin Name:       Power VC Add-on For WPBakery Page Builder (formerly Visual Composer)
 * Plugin URI:        http://webnus.net/plugins/power-vc/
 * Description:       Includes practical elements like Icon Box, Our Team, Our Process, Blog, Testimonials Carousel, Our Clients,... for Visual Composer plugin.
 * Version:           1.1.2
 * Author:            Webnus
 * Author URI:        http://webnus.net/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       power-addons
 * Domain Path:       /languages
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * We safely integrate with VC with this hook
 */
add_action( 'init', 'integrate_with_vc_power_addons' );

/**
* Check if Visual Composer is installed
*
* Display notice that Visual Compser is required
*/
function integrate_with_vc_power_addons() {
	if ( ! defined( 'WPB_VC_VERSION' ) ) :
		add_action( 'admin_notices', 'show_vc_notice_power_addons' );
		return false;
	endif;
}

/**
 * Show notice if your plugin is activated but Visual Composer is not
 */
function show_vc_notice_power_addons() {
	echo '
		<div class="notice notice-error">
			<p>' . __( '<strong>Power Addons</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'power-addons' ) . '</p>
		</div>';
}

// Define constants
define( 'POWER_ADDONS_VER', '1.0.0' );
define( 'POWER_ADDONS_DIR', plugin_dir_path( __FILE__ ) );
define( 'POWER_ADDONS_URL', plugin_dir_url( __FILE__ ) );

// Power Addons thumbnails
add_image_size("power_addons_tabs_img",		164, 124, true);
add_image_size("power_addons_thumb300x200",	300, 200, true);
add_image_size("power_addons_blog3_thumb",	420, 280, true);
add_image_size("power_addons_blog2_thumb",	420, 330, true);
add_image_size("power_addons_square",			460, 460, true);
add_image_size("power_addons_latest_cover",	690, 460, true);
add_image_size("power_addons_latestfromblog",	720, 388, true);


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-deactivator.php
 */
function deactivate_power_addons() {
	require_once POWER_ADDONS_DIR . 'includes/class-deactivator.php';
	Power_Addons_Deactivator::deactivate();
}


register_deactivation_hook( __FILE__, 'deactivate_power_addons' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require POWER_ADDONS_DIR . 'includes/class-core.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 */
function run_power_addons() {
	$plugin = new Power_Addons();
	$plugin->run();
}
run_power_addons();