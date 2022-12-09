<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'itsupport' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_MEMORY_LIMIT', '512M' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '75! }2?%<ov<bt*yN^ZK8mm$/)VbDHrhF~DZ]RV8k,z^(@>u%8Ag-nfTV<(XIH5w' );
define( 'SECURE_AUTH_KEY',  '%6<G@Z*<?/^c7`L*E#4((}]<y)}&7T OYA5vz*sVqtvi-1GIOnQMeKW,SEV>l*Hn' );
define( 'LOGGED_IN_KEY',    'zrg,f}c.qTkz75)<qnIX=cU$*:!.<W;W]ijk.9OrMZT%zI]a5GF~ty1I-g[##/>R' );
define( 'NONCE_KEY',        'v,aT:YquiiT;{{f<i$(K(r)&t`4(3vBeA5WD `f+d`uDOz01M)Hgr4M1e0|+Uwb,' );
define( 'AUTH_SALT',        'x*3]$nLF]}^T!lan,02UE&>p~j).Ov8&_#E7a%*TN}*tIv=akKTe{7TTr.Oc)Sn*' );
define( 'SECURE_AUTH_SALT', 'uc+r8.hs/n`t*6!8H#?$e!-DgjPuhC3KcfqqzQbn{M#nAMUwaqZu+u5^.PdXLg=v' );
define( 'LOGGED_IN_SALT',   '<(SVt{Mvh-/`UEMDT,]in@!U>/^DI^GVcu1An #5Z+qsGJA[Nd+jOIDd!*Co91?$' );
define( 'NONCE_SALT',       'Ry?hVbW!n~)I1t;,$a|{tX$*+Q.ij?El!BH0a__j?hwGmMK(5:^bW#4)hnj=ojC3' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
