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
define('DB_NAME', 'db');

/** MySQL database username */
define('DB_USER', 'db');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         's%Z28cG|s-ic,$t{*vW!uUlXhuF|SO(,hm(4bsy-p$-C,11~P?T.l@S}i[}}jG?S');
define('SECURE_AUTH_KEY',  ' V}HTVAvn.v:L<u_8&Z?iUwvXGj?a<SkaKRU?K3!iT}:gmx)9.=nd]G#4y(imUy}');
define('LOGGED_IN_KEY',    '$[eq)0]E5O%p17kBLqfw0Sku3Apv273FE>js9.nu3BLn)vzhu5nI;gH6e|`?fP}J');
define('NONCE_KEY',        '!jLZUjET+@J;kQ6t|(*>n2Aa)(J glCt.{Y5/M2x95G0~3<:CWMOjQkcWw 5r0Wb');
define('AUTH_SALT',        'tx|]$vQwF@$0ofO!M-##e2>(A{Us8_6zw+N8FMf%?<C1%G[!D2flGD&rL/5<j)bC');
define('SECURE_AUTH_SALT', '5)md-jRv1Kk+ZgDrCos?|*7!~~#p&N(KFiznF@pB@SMk$IN/ao.<mCQUl]OzN5/n');
define('LOGGED_IN_SALT',   '%jcbwN,uuArg])N| QrfH?kHGaS6#&IsxtvK?nivjfR|>Ne#zscOBr3s(I5_|kID');
define('NONCE_SALT',       'vasrR-^%dVP.sLzo3hHO+D|1j;%ymc9`I 0i:myaF4r Q|:r,UR{MAXT=!mxK=GP');

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
