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
define('DB_NAME', 'hank_website');

/** MySQL database username */
define('DB_USER', 'hank_website');

/** MySQL database password */
define('DB_PASSWORD', 'Par24thGw');

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
define('AUTH_KEY',         '5#gX^DD4H@SD6G2hb)g=C cP/mcqy&n<Q_Un=g%|;]3geMYg9Qmz^.sW6xP~!Gt:');
define('SECURE_AUTH_KEY',  '-k@D+6k*cyzE95D1[-}oYlSto[Ai@WjH>2ZNaa.746mh UjrIg7Wpz>H8K&rxDuP');
define('LOGGED_IN_KEY',    'X[emYmy[UhP^t;Of{-C4!C63LMah$[jn&IWZu roqmL;m9YGN v02:JKNwmyk xr');
define('NONCE_KEY',        '>40O-8$nA3hX7pNLUI--:Dl!.bU<.L0=TR)M[I_-&{#F42$cs(n]PVdE0_,mxPBx');
define('AUTH_SALT',        'r>gf&=d>P++UgSeavZDd`UhtJbN#ob+Z}5re0?bQGPAraN[M-smH}RLja8Pb|5PV');
define('SECURE_AUTH_SALT', '},|-O4F]@MiFw~_uhzUx52B[V5Kzv(1x2sNHn9=b[-;fqKQ)xJwTN}LwC<=nX)5;');
define('LOGGED_IN_SALT',   '|=-eL:|q$z1B.eqK|782{4+2^3b-%*`2,zkW-n5C|i,|L/~x]QeVb1IHq5;~+1j/');
define('NONCE_SALT',       'VQ$pY{5:%cDm9};Hxcl`#1(J!YM> ^6-p&S>5i9;U7r/k<<32G7U{?7RSE+@+S@(');

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
