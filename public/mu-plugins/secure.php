<?php
/**
 * Plugin Name: No pings or XMLRPC
 * Description: Disables XMLRPC and pings (or the X-Pingback header, at least)
 */
add_filter('pings_open', '__return_false', PHP_INT_MAX);
add_filter('xmlrpc_enabled', '__return_false', PHP_INT_MAX);
