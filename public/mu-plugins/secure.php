<?php
/**
 * Plugin Name: Standard Security
 * Description: Disables plugin/theme updates, XMLRPC, and pings (or the X-Pingback header, at least)
 */
add_filter('auto_update_plugin', '__return_false', PHP_INT_MAX);
add_filter('auto_update_theme', '__return_false', PHP_INT_MAX);
add_filter('pings_open', '__return_false', PHP_INT_MAX);
add_filter('xmlrpc_enabled', '__return_false', PHP_INT_MAX);
