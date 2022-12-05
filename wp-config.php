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
define( 'DB_NAME', 'fourth_project' );

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
define( 'AUTH_KEY',         'dg7[EYJB/Q@DS&X?k4]>w?vR/<RiJ_?/33k.arv.!&.7nXi[jQn;[*3{;qX_9HA!' );
define( 'SECURE_AUTH_KEY',  '5JWQ5<TwEbmdH;w9.y@EHZbVg}&xXRSRp)|{D6*l:j^AFXJ|iX!d1O<)Ey6~+G@]' );
define( 'LOGGED_IN_KEY',    'zmmXmG#a9AgJ9/Fa;l`G~iJJ({U.M4tj}*;.=ja9k$?^=we3k%g&7,@<ypG=dq A' );
define( 'NONCE_KEY',        'yg<`tDd0).r~D>!R(BMBuLP1_8@CvBd r3X>935K3<N/=64a/|`4&.)N~^kA%U]6' );
define( 'AUTH_SALT',        'X:9N;EdtgxX#Tpo(rD6e<&e?qhaET]=.$8NWUbU<2CP//TXW(S .A^zJ}b/]pz(4' );
define( 'SECURE_AUTH_SALT', '2//PVv=L&8k*uc=,qN6)axrWn-eSE5P^DxF9aVtl,L~bdayR=&HJ6#[D+}VWxWnw' );
define( 'LOGGED_IN_SALT',   'cPQ1{75nmV2nR>*_CUQuASr?&U2/-2_,vHvQ:^Y1%:]-M q9uDlZCYa2}Kfh5yvJ' );
define( 'NONCE_SALT',       'bIm7cR;0-4d.QP* 1s(Crvdt,J%9gyOQ~hTdhvGhR~_zcK{X@?ben/5`N:^Zog@s' );

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
