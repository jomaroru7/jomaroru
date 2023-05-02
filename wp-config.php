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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define( 'ABSPATH', __DIR__ . '/' );

// ** Database settings - You can get this info from your web host ** //
require_once( ABSPATH . 'wp-env.php' ); 

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
define( 'AUTH_KEY', 'kR.&N1IQ~w^~17-3jZ.<mOCDChTD5li=>7]|MCVd+H1ZkX?g!c~z)o.$d|R+d-]x' );
define( 'SECURE_AUTH_KEY', 'yON.kMFUL[>R7i9a?/!=wnE9),2mCS~_aHID9!wV?VL;UC|kn%ug]%bavg@3;oo^' );
define( 'LOGGED_IN_KEY', '$?Ovuf9dx:{GjdUK}dKe%t57RF:}/0LA)sar?JL?@9QQe}Z)/N#OiJLR/(9$ILB+' );
define( 'NONCE_KEY', '/.Q$MJMmDle_;VkK]/!2jvH.)hlGC=hO-[B,}.9&$g.nAEcM9UHvFq[xH0-VKRF8' );
define( 'AUTH_SALT', 'UuG0F3B2Q&/eh?r*bD+q<H4*W[Z8&(y5SUgG>DAFhE+2aj}N=S63mU}Jc{;=l~8n' );
define( 'SECURE_AUTH_SALT', 'j,N$$,UbmN!u ]B`j<y.%}[0()Y$7n,CCLTsqwJQlN[gh7aqPW1Zv0zu@y`pQ]p]' );
define( 'LOGGED_IN_SALT', '7%^0&zM]$YkY>h0@,VsdCceu4T]pzf{j@s(EgzU#e~EElgSeg3=QC[?C%Qq^V$)y' );
define( 'NONCE_SALT', 'lMwg,7sCv@baBsCqIlHiX$%fm8,lVzkOF4irzh:*D7I!},]kcY3U73xSlw5S&mLU' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
