<?php
/*
	Plugin Name: Woocommerce Facebook Comment & Share
	Plugin URI: http://exnetbd.com
	Description: Add facebook widget comment on your product page.
	Author: Shameem Reza
	Version: 1.0.0
	Author URI: http://shameemreza.info
	License: GPL v2
*/

if (!defined('ABSPATH'))
exit('<h1>Not Found</h1>The requested URL '.$_SERVER['SCRIPT_NAME'].' was not found on this server.'); //Exit if accessed directly

define('FBC_LOCATION', WP_PLUGIN_URL . '/'.basename(dirname(__FILE__)));
define('FBC_PATH', plugin_dir_path(__FILE__));
define('FBC_BASE', plugin_basename( __FILE__ ));
define('FBC_RELPATH', dirname( plugin_basename( __FILE__ ) ) );
define('FBC_UPDATE', plugin_dir_path( __FILE__ ).'update' );
define('FBC_HOST', 'http://wpbuz.com/remote');

define('FBC_VERSION', '1.0.2');
define('FBCOMMENT', true);

include_once('admin/fbc-class-admin.php');
include_once('admin/fbc-setting-admin.php');
include_once('frontend/fbc-class-frontend.php');

	register_activation_hook(__FILE__, 'fbc_activation' );	
	
	function fbc_activation () {
		add_option('fbc_enabled', 'yes');
		add_option('fbc_app_id', '190328254487650');
		add_option('fbc_width', '550');
		add_option('fbc_share_enabled', '');
		add_option('fbc_color_scheme', 'default');
		add_option('fbc_twitter', 'bossSukses');
	}
