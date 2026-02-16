<?php
// Base de datos desde variables de entorno (NUNCA hardcodeadas)
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));

// Charset
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Claves de seguridad también desde variables
define('AUTH_KEY', getenv('WORDPRESS_AUTH_KEY'));
define('SECURE_AUTH_KEY', getenv('WORDPRESS_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY', getenv('WORDPRESS_LOGGED_IN_KEY'));
define('NONCE_KEY', getenv('WORDPRESS_NONCE_KEY'));

$table_prefix = 'wp_';

// Seguridad
define('WP_DEBUG', false);
define('DISALLOW_FILE_EDIT', true);

if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

require_once ABSPATH . 'wp-settings.php';
