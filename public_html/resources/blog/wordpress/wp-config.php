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
define('DB_NAME', 'calvary_testpress');

/** MySQL database username */
define('DB_USER', 'calvary_testpres');

/** MySQL database password */
define('DB_PASSWORD', 'ugoogly11');

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
define('AUTH_KEY',         '}V-r~^F]-- /JdMko2N cPmD=0NdtkR+Ie|ij8H=F_dt9M<>3Lcf|cUdnb0^eaK+');
define('SECURE_AUTH_KEY',  '>j,<9<w8,[)7+(-lgym|C)Na[)F_W5z%fiB{qMShW_^o:41fB27U*.# Rp7Jei%f');
define('LOGGED_IN_KEY',    'diFD`dF+[OqXQI*ZD|?H0BR@X9d~&1aD` P[rFfDS(o|zqwo/bW5hKk-+zx,(L&1');
define('NONCE_KEY',        '|k/kA5`Y$uiiciTmz97-V`3j+,3(oIFM/ftj-{RKw**%2*1!Inx^LiS}/ /6ZW!g');
define('AUTH_SALT',        'bu a@7K+z0X<-ugR_V[`|!Zi(R]1hDYf-2CNEiC9;E~wOD]Y+ugh5tEjGK9-$SHA');
define('SECURE_AUTH_SALT', 'YV$/2JF%>-wWhQPLR0uN/<g&>zS`As|o:m*fngXqZ-oMz)F^aLmj8^D]&_ W{ua~');
define('LOGGED_IN_SALT',   'heFv`g+Pq/no4rY$%D6xgxKaT#Xe3Vx!-TKVR-IX,>cEI_)+%+L1Gn}B>TO+AYb]');
define('NONCE_SALT',       'bxqOr+UA3z-*MY;mq>Yx)k0:YS489-O*pQ*;,2iGX>&W.y 1V].] =~nEvh^)-oa');

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
