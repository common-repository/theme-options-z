<?php

/*
  Plugin Name: Theme Options Z
  Plugin URI: http://shyammakwana.me/plugins/theme-options-z-wordpress-plugin/
  Description: Simple yet flexible Theme Options plugin for any damn theme.
  Author: Shyam Makwana
  Author URI: http://shyammakwana.me
  Text Domain: theme-options-z
  Version: 1.6.0
 */

defined('ABSPATH') or die('No script kiddies please!');

define('TOZ_VERSION', '1.1');

define('TOZ_REQUIRED_WP_VERSION', '4.0');

define('TOZ_PLUGIN', __FILE__);
//  \www\wp-content\plugins\theme-options-z\theme-options-z.php

define('TOZ_PLUGIN_FULL_NAME', 'Theme Options Z');

define('TOZ_PLUGIN_BASENAME', plugin_basename(TOZ_PLUGIN));
// theme-options-z/theme-options-z.php

define('TOZ_PLUGIN_NAME', trim(dirname(TOZ_PLUGIN_BASENAME), '/'));
// theme-options-z

define('TOZ_PLUGIN_DIR', untrailingslashit(dirname(TOZ_PLUGIN)));
// C:\htdocs\wp-content\plugins\theme-options-z

define('TOZ_TEXT_DOMAIN', TOZ_PLUGIN_NAME);

define('TOZ_PLUGIN_URL', untrailingslashit(plugins_url('', TOZ_PLUGIN)));
// http://www.xxx.com/wp-content/plugins/theme-options-z


if (!defined('TOZ_LOAD_JS')) {
    define('TOZ_LOAD_JS', true);
}

if (!defined('TOZ_LOAD_CSS')) {
    define('TOZ_LOAD_CSS', true);
}

if (!defined('TOZ_VERIFY_NONCE')) {
    define('TOZ_VERIFY_NONCE', true);
}


// Add settings link 
add_filter( 'plugin_action_links_' . (plugin_basename(__FILE__)), 'add_action_links' );
function add_action_links ( $links ) {
     $mylinks = array(
    '<a href="' . admin_url( 'options-general.php?page=themeoptionsz' ) . '">Settings</a>',
    );
return array_merge( $links, $mylinks );
}


require_once TOZ_PLUGIN_DIR . '/inc/settings.php';
?>