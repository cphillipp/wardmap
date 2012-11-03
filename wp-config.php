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
//define('DB_NAME', 'gold');

/** MySQL database username */
//define('DB_USER', 'root');

/** MySQL database password */
//define('DB_PASSWORD', 'root');

/** MySQL hostname */
//define('DB_HOST', 'localhost');

if (isset($_SERVER['PLATFORM']) && $_SERVER['PLATFORM'] == 'PAGODABOX') {
    define('DB_NAME', $_SERVER['DB1_NAME']);
    define('DB_USER', $_SERVER['DB1_USER']);
    define('DB_PASSWORD', $_SERVER['DB1_PASS']);
    define ('DB_HOST', $_SERVER['DB1_HOST'] . ':' . $_SERVER['DB1_PORT']);
}
else {
    define('DB_NAME', 'wardmap');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'root');
    define('DB_HOST', 'localhost');
}

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
define('AUTH_KEY',         '/n~%3&q6Nb^?oqmDvNOn)E`]1Q$|&w[9MhHB9+b}CiHX`ECxyZe<Hb` C_8Ml`>w');
define('SECURE_AUTH_KEY',  'CpRvlw($~P?7fS&e]RlW%dEQ|kU~Kb-r:%{?NLp |m]cL[PBnD`m~CID$|WEl2*g');
define('LOGGED_IN_KEY',    '_+Ub8L4u&|L{x:55VH97d$[{f!wx{5*Ty:,=&Q!0;<t)!#v|=VBYdF@uAPcA/V(.');
define('NONCE_KEY',        'U#Z-xg@[$eo}bcwA{LRbmk2U@<=Ibg=Fi.;LS?W{0k-B*gFo,2YYsF1V,VO0n=sc');
define('AUTH_SALT',        '}uO!2s.91Mcu&4y8T`JV@wr}uq~r.}$M!v<i0iQBoIj|S7xyyrY<-LJ+fy->k9n:');
define('SECURE_AUTH_SALT', ',[.=&CtsdN|?{HO[FelYu,j1@b`FJ+>Rv$[.7Qg-LrvF>2j`b`nvgQ{+wbmh{0AR');
define('LOGGED_IN_SALT',   '*(~R=nVc@gw?{y_D6#Yu+Q*mhX.+a1H%t|6e|meVm. zu~,iF(kGU8]{3-=a/SlV');
define('NONCE_SALT',       'rnr-N[s+{pG=n-P&5]~a5r^PH~k8n+?1Qk<zjiN?#e(J-&iE-.Q2CdR?:URoo.<|');

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
