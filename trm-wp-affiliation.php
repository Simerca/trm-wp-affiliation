<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://weebedia.com
 * @since             1.0.0
 * @package           Trm_Wp_Affiliation
 *
 * @wordpress-plugin
 * Plugin Name:       TRM WP Affiliation
 * Plugin URI:        https://github.com/Simerca/trm-wp-affiliation
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Ayrton LECOUTRE
 * Author URI:        https://weebedia.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       trm-wp-affiliation
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TRM_WP_AFFILIATION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-trm-wp-affiliation-activator.php
 */
function activate_trm_wp_affiliation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-trm-wp-affiliation-activator.php';
	Trm_Wp_Affiliation_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-trm-wp-affiliation-deactivator.php
 */
function deactivate_trm_wp_affiliation() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-trm-wp-affiliation-deactivator.php';
	Trm_Wp_Affiliation_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_trm_wp_affiliation' );
register_deactivation_hook( __FILE__, 'deactivate_trm_wp_affiliation' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-trm-wp-affiliation.php';
require plugin_dir_path( __FILE__ ) . 'public/trm-front.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_trm_wp_affiliation() {

	$plugin = new Trm_Wp_Affiliation();
	$plugin->run();

}
run_trm_wp_affiliation();