<?php
// ** Configuración básica de WordPress usando variables de entorno **

// Database settings
define('DB_NAME', getenv('WP_DB_NAME'));
define('DB_USER', getenv('WP_DB_USER'));
define('DB_PASSWORD', getenv('WP_DB_PASSWORD'));
define('DB_HOST', getenv('WP_DB_HOST') ?: 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Seguridad
define('AUTH_KEY',         getenv('WP_AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('WP_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('WP_LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('WP_NONCE_KEY'));
define('AUTH_SALT',        getenv('WP_AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('WP_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('WP_LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('WP_NONCE_SALT'));

// Prefijos
$table_prefix = 'wpfa_';

// Debug mode
define('WP_DEBUG', false);

// Absolute path
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

// Setup WordPress vars
require_once(ABSPATH . 'wp-settings.php');