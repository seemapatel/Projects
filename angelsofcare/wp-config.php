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
define('DB_NAME', 'angels_of_care');

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
define('AUTH_KEY',         ': r*[6)g!7/Ih]b Z. Tvx!~O4]^&,<_B5S^|DM1`nE2B@~@GS<8K8|>F~>C[|8&');
define('SECURE_AUTH_KEY',  ' OvjO-y#;h48w;w!wlur1c:I<}sBVEge=sH-5>|qOfG-2BPPkbA0M@{+*v|XbvBr');
define('LOGGED_IN_KEY',    '.MP~YF1Gc?bsXA / m3)|W!8Tq@fsg`hf)/O.$z94^$No6hsx>EEG_yFRQ(j7tG:');
define('NONCE_KEY',        '-xhY~%r|P96>D<C:Ym4+.3P4tA?iO_?*2ARpsy+beE~j;</:qsVZ<E]^+ET7>44J');
define('AUTH_SALT',        'CwN@r^-LrRz D/)on_SVYW9*+6(4s/Q/]uD%3zGWZqT9Q^>8sfj>1<*7-v|-Ekf ');
define('SECURE_AUTH_SALT', '=^Rj|o/pz7IK|z+uYm41TCtG5)^BzfA%yt^!DM2Zs4R<+iZJRl$NchYrBj5.f@i7');
define('LOGGED_IN_SALT',   'WH|>$#;^H?6d!M.5HTPWtIgD69G:EUTlwVZI!bxC7SZJ9f(_qx)u91:5m=_<OAN>');
define('NONCE_SALT',       '+)/t~0I3h(nYvF#e*_/,TacB/k|WX3(*GtqXR^d.Q1`HtC^N-2?/@qejSICcIt}]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', FALSE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
