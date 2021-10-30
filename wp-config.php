<?php

define('DB_NAME', $_SERVER['DB_NAME']);
define('DB_USER', $_SERVER['DB_USER']);
define('DB_PASSWORD', $_SERVER['DB_PASSWORD']);
define('DB_HOST', $_SERVER['DB_HOST']);
define('DB_CHARSET', $_SERVER['DB_CHARSET'] ?? 'utf8');
define('DB_COLLATE', $_SERVER['DB_COLLATE'] ?? '');

define('AUTH_KEY', $_SERVER['AUTH_KEY']);
define('SECURE_AUTH_KEY', $_SERVER['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY', $_SERVER['LOGGED_IN_KEY']);
define('NONCE_KEY', $_SERVER['NONCE_KEY']);
define('AUTH_SALT', $_SERVER['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_SERVER['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $_SERVER['LOGGED_IN_SALT']);
define('NONCE_SALT', $_SERVER['NONCE_SALT']);

define('WP_HOME', $_SERVER['URL'] ?? $_SERVER['WP_HOME'] ?? $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

// WordPress will interfere with Symfony's debug component if WP_DEBUG is true
define('WP_DEBUG', false);

$table_prefix = $_SERVER['TABLE_PREFIX'] ?? 'wp_';
