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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ')2)mf&7bz]K|U6[cp1:)1vK{)G-Z2tIoO2,2}OAc=m-?c^UX!j7AN4c]~;uF>X8;');
define('SECURE_AUTH_KEY',  'z}jDU,-^e]/!hnUI5>hs2mU}ao]9YVf)O#~bD <6g[GkF1bona@AA*_($39M^]_;');
define('LOGGED_IN_KEY',    'v]:;@h;YJ6(L`F%;DEuq  O$JAL#`Y`(LCB[.h;:RHLt&ahL?vQ{CE7E!cF5z4f[');
define('NONCE_KEY',        '$WR;La#GkQ.oWqFXVd/T rx[U`TOhsFS@vPQgZoQ^:ZQ=H;t=[OYJ(S!Q-+Y=fWR');
define('AUTH_SALT',        '><,}(Y}a.[sJ`JwTV.xT9F5w?}0uHY`nVSGP;1UY&oemuQ=tl_Nd&j`S-:txUGaL');
define('SECURE_AUTH_SALT', 'e^UzRz1_3Z#8oWiyqim3FCjd!,tWKP+i=1YVQiCiV~Qf}$6W%t,:;#K!!xWxo_d5');
define('LOGGED_IN_SALT',   'QbSXlpdu;&~^ U#zV?U4Q!|o>p*7K;PeD^^TQ<W7}t}(CnK$o|qf._0FnRCz6l#U');
define('NONCE_SALT',       'NQ/Uh~0YC%[g)iqES %GhRdLKz%JVsS+*)9e*STi_u6XU$KY+h2e@<O]&dU^a&DA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
