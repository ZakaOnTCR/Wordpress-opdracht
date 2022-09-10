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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '#}_[wH^DL?Bmn/#jJ@*716@/V=f3j]5]I,r `<unu(n6;Dv|mQbt((b-Nf>FXE6(' );
define( 'SECURE_AUTH_KEY',  'f<^<]Xa4%*j5pG=YFnchb%1,e<N>-!(/W( m8.1wc VnjvU$t+Js,S(9v6<$r pW' );
define( 'LOGGED_IN_KEY',    'GC2&LZS[QHSN~{ xehp/xbN?1]CjF(y<zvZ Gh!t$<]7ZK0u+]DYN}/e`iJi_B-~' );
define( 'NONCE_KEY',        'MyQWY4QIF,K5|;,]v;c2x+jLIx#$JF}Bfw7T(R/z_nLJCiQo9Fef`AKTPqsatlUt' );
define( 'AUTH_SALT',        'S[5v4d6WQUK=Q$Lb8CYUdU]SKBTbdY_Q~Tbf;)ehri4!x..Bm+TXrGn&?&Uq(#1R' );
define( 'SECURE_AUTH_SALT', 'sGST,,Yfb|6#LQ,feoIWG])h#9LieFoDv.6C3VJl~ft!F=BTtnDhI?sT} HXZ8n5' );
define( 'LOGGED_IN_SALT',   '-&[$$fUTm~):t<$@42JrNdh52;o_3to[P[?sc{(0_]3<wA.P0O~D49odEP_Uk3:U' );
define( 'NONCE_SALT',       'x$G[LM]!sLz%4vg-O:5+:v3EuBJ5gHlB;#],P  Jr63M$E:&^i;dOxSfPE5iS(t=' );

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
