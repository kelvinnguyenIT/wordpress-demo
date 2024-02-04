<?php
/*
 * Plugin Name:       My Plugin
 * Plugin URI:        #
 * Description:       Plugin vip for user
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      8.0
 * Author:            Nam NV
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       my-plugin
 * Domain Path:       /languages
 */

 define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
 define('MY_PLUGIN_URI', plugin_dir_url(__FILE__));

 register_activation_hook(__FILE__, 'my_plugin_activation');
 function my_plugin_activation() {
    echo MY_PLUGIN_PATH;
 }

 register_deactivation_hook( __FILE__, 'my_plugin_deactivation' );
 function my_plugin_deactivation() {
    
 }

 include_once MY_PLUGIN_PATH.'includes/includes.php';

