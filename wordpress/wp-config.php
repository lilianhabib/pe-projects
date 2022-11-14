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
define( 'DB_NAME', 'recipe_data' );

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
define( 'AUTH_KEY',         'j@1Ik15l%f3,fb89jQdl?w}a{LvmTH3wY/G[pi_5l_J.<#a5l2Npw1y4Up2P!<0Q' );
define( 'SECURE_AUTH_KEY',  '{%Wi7O}Viw:io=s`fxyVz_{hBHm~hBTHc_s*$n~3Gm0.tKtqfia$*BBs`cPS#<H%' );
define( 'LOGGED_IN_KEY',    'kWL=.IH)Xw3W:g)@K<N&9xLI?B%Z7cm]devS?h<<*0zv_es/I>MaL)Me6C3SR nH' );
define( 'NONCE_KEY',        'oo#@~mb*I~;k>Z:>A6z@,NYB#szkjZT!B=3CODF]^^3eQgi>hq#4{=`Z%UXp?eS.' );
define( 'AUTH_SALT',        's-c(acLUr~T32s4Il_FP-(k[&=lPsi&*GWAs;bhc3MV-#x-IG! i-6f$ 5{DZ6lx' );
define( 'SECURE_AUTH_SALT', 'x-@kprP`&A$jp4m2rMT];t))GG :,]b^@`0Wst3Qbl>e*84; ]]O*UGn}u*S.-so' );
define( 'LOGGED_IN_SALT',   'bp>|4J]`@8tB~S6gGAl05-7yZ&?xxd[~sHVC>sfGLQ{+%bu_`YPQe;I(|*Wkap3m' );
define( 'NONCE_SALT',       'g1TJ=9jT#Q}T[RQzIT[a[0lNE)IAh-1$0ou{_[)Wf|zCVd5#R^:MTNE}WNt}G=;<' );

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
