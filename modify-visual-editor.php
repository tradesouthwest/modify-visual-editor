<?php
/**
Plugin Name: Modify Visual Editor
Plugin URI: http://
Description: This plugin modifies the visual editor for selected users and adds some dialogue to the  editor to deter code deletion or tag stripping. Also includes a function to remove-admin-bar for all users except administrators.
Author: Larry Judd Oliver @tradesouthwest
Version: 1.0
Author URI: http://
Text Domain: mved
Domain Path: /languages
This plugin is released under the GPL version 3 or later available at
http://www.gnu.org/licenses/gpl.txt
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
if ( ! is_admin() ) return; // Only load plugin when user is in admin

//wp_cache_delete ( 'alloptions', 'options' );
//Predefined Constants

define( 'MVED_VERSION', '0.1.0' );




//activate/deactivate hooks
function modify_visual_editor_activation() {
}
register_activation_hook(__FILE__, 'modify_visual_editor_activation');
function modify_visual_editor_deactivation() {
}
register_deactivation_hook(__FILE__, 'modify_visual_editor_deactivation');




/** enqueue scripts
 * example usage: German MO and PO files should be named
 * mved-domain-de_DE.mo and mved-domain-de_DE.po.
*/
function modify_visual_editor_enqueue_scripts() {
    wp_enqueue_style( 'mved-admin-style', plugins_url( basename( __DIR__ )) .'/assets/mved-admin-style.css', array(), MVED_VERSION );
}
add_action( 'admin_enqueue_scripts', 'modify_visual_editor_enqueue_scripts' );

//enqueue text-domain
function modify_visual_editor_load_plugin_textdomain() {
    load_plugin_textdomain( 'mved-domain', FALSE, plugins_url( basename( __DIR__ )) . '/languages/' );
}
add_action( 'plugins_loaded', 'modify_visual_editor_load_plugin_textdomain' );




/** Disable WordPress Admin Bar for all users but admins.
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}
//Disable WordPress Admin Bar for all users but admins.
	  show_admin_bar(false);
*/

require_once( 'mved-admin.php' );
