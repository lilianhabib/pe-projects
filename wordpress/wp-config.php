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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cafe_data' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'O7V}Q#%}<8c0tB!Lca@f#owo=6S/2VF8i9B;Pstl~^gZ+Gsecc%VB9UcDKOK;<B!' );
define( 'SECURE_AUTH_KEY',  'Q@e?wl+8rfgzmEG;Ps{8=Y-/fKO.U>.aOHA9#].pDv)!P<]%`54s YMTx;j>,zzm' );
define( 'LOGGED_IN_KEY',    'Tah>Si/|<HL/0Ms5*IR$#Gja@A/5IvkbI GYxa)s%qV:@wSC76OJ_4ukWOK&OoL8' );
define( 'NONCE_KEY',        'd=nKeDrLk>sPC*_vAtyhUWdPbBQpA@uctOJi$&=!!kl%ctFa>ew$&N0|v.*O0JkF' );
define( 'AUTH_SALT',        '|~]i#=fp>f#MapZ]c/~-wJp[`^D[k<R_Hzh6]d([N5T2 -WG;-8?99r;8q*FF.WQ' );
define( 'SECURE_AUTH_SALT', 'UQORB@Z0t7l1;.F*jmPv>$y]mh4vgA$r!2oonn.9LA7shJ)WLbbom(*//|N,d[x1' );
define( 'LOGGED_IN_SALT',   '{L(pVS?Dd]z=;BI SX,IfN:VF7e?=O0?i-!_O7w.w6~*XSocw;oKMkiCOa:PJdVN' );
define( 'NONCE_SALT',       'L|&;V!F@{.1_gf=0mjv XXC}hH3+dPMDx#%PgQ>AFPcUn&a[7CwA:yI_6=J}Cc-,' );

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
