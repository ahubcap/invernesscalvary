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
define('DB_NAME', 'calvary_wp');

/** MySQL database username */
define('DB_USER', 'calvary_admin');

/** MySQL database password */
define('DB_PASSWORD', 'I^BN@ZPzk^#P');

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
define('AUTH_KEY',         'AKCj~k-|Mo-u5|ZVXHp#.b7Iqg+|9;-o:L8v{zk3e|gTH@<fM8<PH76<!Ygd|v*=');
define('SECURE_AUTH_KEY',  '4:UvL0HbXo?r6mqk ]p+fapJvya1kcCHE+<?!pLs+wOcT50uh%Mt-L3l2-+.jG}<');
define('LOGGED_IN_KEY',    'R&?TbALSTwhoe=dv4N+/>q*YyUAMxz@-WyM|8eBLXjza(F^7 otsyJ~;wDw%OIE)');
define('NONCE_KEY',        'O8qqil1`a9b;aMR+B_<fl~IsW67FfM9PRqV?D`J&/|DY+wn+bO9^#%Mo<P0|:/ze');
define('AUTH_SALT',        '$|V2ct1lx><=H}.+>?QGVm- @fc7K)}eP-;j,?;x)h%uA-hwbfE6I!+QH(3OBkxX');
define('SECURE_AUTH_SALT', 'F7Hok[vq-:CXRjTo-<U{WXt+P+.|>y6HB{l+|.zpg<][9H!+o4t6L-UJquQuN{tq');
define('LOGGED_IN_SALT',   '*+Wc]mF.sG3VM?FdVFukcdLHIoXV|N.+}<S=>=M=a5?#I^%+ fo!q5.r#zv4:*+>');
define('NONCE_SALT',       'M8ZC2&Y(QdH>`6YJV] kO*F~k~7@ZH+$&EN?>AFLl#lm/COg|=cs%m+d*VNO#ET<');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
