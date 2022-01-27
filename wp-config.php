<?php
define('FORCE_SSL_ADMIN', true);
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
    $_SERVER['HTTPS']='on';

define( 'DB_NAME', getenv('DB_NAME') );
define( 'DB_USER', getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST', getenv('DB_HOST') );

define( 'DB_CHARSET', 'utf8' );

define( 'DB_COLLATE', '' );

define('AS3CF_SETTINGS', serialize(array(
    'provider' => 'gcp',
    'key-file-path' => '/var/www/html/bss-sandbox-env-1-c5407de16323.json',
)));

define('AUTH_KEY',         'YOUR_VALUE');
define('SECURE_AUTH_KEY',  'YOUR_VALUE');
define('LOGGED_IN_KEY',    'YOUR_VALUE');
define('NONCE_KEY',        'YOUR_VALUE');
define('AUTH_SALT',        'YOUR_VALUE');
define('SECURE_AUTH_SALT', 'YOUR_VALUE');
define('LOGGED_IN_SALT',   'YOUR_VALUE');
define('NONCE_SALT',       'YOUR_VALUE');

$table_prefix = 'CblEt_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
