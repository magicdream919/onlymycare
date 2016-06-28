<?php


/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'dekhf156_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'rkjnio3u7fpiprnhuqhmey0lri2ykslkktsgq3havbrgv3uedjnvrjlqfbwounsc');
define('SECURE_AUTH_KEY',  'ankqfwqluzcxjlrwahmu0jxacmfgqcttlmimtoivpovv4n6nnhpzxguvj83x8rta');
define('LOGGED_IN_KEY',    'xxy4o3vikocknxvqnenhvgigg8pm5qd4fwwnoeniltu9r4nwo5dyqqanqikf5tkp');
define('NONCE_KEY',        'zq35mqk802qrmn8g26xkvlkzk0ajeg9nd8cp4qvolc5up25qhdjaqptdmeinfmfv');
define('AUTH_SALT',        '1llmqpsrpx7exavhfcitqkj3uksubwy4mwdquzqffvdqetmbqp1dnnivwlq74gea');
define('SECURE_AUTH_SALT', 'juqw3jmbjxtehthrhdrnjbnqgvdhw63hcpoung3sw7pprsiu3jtjhj4fdtufogxp');
define('LOGGED_IN_SALT',   'upzajbgdvstd9vw7g234qywsj9le3wlmb2qypmbkdhkvyxoylgovmowcza14rgrg');
define('NONCE_SALT',       'trfwqg0cqmeawbj8emrnuxgfthftxtjjgp2zzkipcak4dlrppaifr4xisjgcflug');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
 
 define('WP_MEMORY_LIMIT', '64M');
 
// Enable WP_DEBUG mode
//define('WP_DEBUG', false);
//error_reporting(E_ALL); ini_set('display_errors', 1);

define( 'WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
//define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings 
//define('WP_DEBUG_DISPLAY', false);
//@ini_set('display_errors',0);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
//define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');