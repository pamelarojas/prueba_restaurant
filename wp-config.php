<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Wu8k2frh.,Kbnso}f4;ith$43|( @!%)d9`>MFXswu{NT[9e7ZcS_~a[l0k3.kea');
define('SECURE_AUTH_KEY',  '!7Y~Tc!a#lBPB}[6WZ;f:V,ot]>m0{CGk93U@hb89^-ZR7W@qb#ZtK-$;QrL ,)W');
define('LOGGED_IN_KEY',    'z4x-.lqZmNt%s=6x?riVO65T_t=eH0%!)1|.30(t7C+%`+vAR^qPC3Xy^Y|^TA+N');
define('NONCE_KEY',        '?D`3c8hXjmtDJR4)ohm,W[8xD<KA#B1NYgK Rl^OJ{;`&u01$CRKo_wQN6.=Y iU');
define('AUTH_SALT',        '.^)(<4@aN!Bry lGzvloV$JWyb+57!2:gk=F/7MyaCms8v:u4T,D=LzA@f<b{3#7');
define('SECURE_AUTH_SALT', 'p>0 P*nSV]Lvqqh2/OC3/rK$b58/K,dZ%:TF9o@I^+#E`bz9J.9bc[>KqP/G+}>n');
define('LOGGED_IN_SALT',   'F#:  P!oy8F<:Sf0pgRa0-`qt0HMUX%_O23RvDk3 vVb#20$mc <HN[E2&UX_3e;');
define('NONCE_SALT',       '?t1&j?W{`W+e#>U|$0X<.3e<MP*&D1~54&AN%/5;!Lbm*=My#2WV@7e}|e*g;*[J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */

define('WP_DEBUG', true);
define("WP_DEBUG_DISPLAY", true);
define("WP_DEBUG_LOG", true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
