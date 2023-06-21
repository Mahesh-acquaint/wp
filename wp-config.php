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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'agc123' );

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
define( 'AUTH_KEY',         'uFun`ynrY;q,81HJ=P>Ly; MIYM6+^Vq65Vs2!+;^H%l~fUS<iqJ9*W) ]5e8jf*' );
define( 'SECURE_AUTH_KEY',  'zUGyBG.::C{p&_^>)<+#P?Gc<:uVMrYY& ~WeO_lk;BF:tL[mocSi<xfWE}~k7.~' );
define( 'LOGGED_IN_KEY',    'x%&l<dN[/V4y8&~LM3J18nV/8Bxk$1Ryv08-kUcYFm+-09c1^VN?V^SUz lMe]DS' );
define( 'NONCE_KEY',        '~BB$KkAY)C {{4c qpOdjgaGI> ~]NHrqI7oe?@Oqo&$7+*cmEeD3$T@-Sl)EL7s' );
define( 'AUTH_SALT',        'KmE!To2D#/Y~;);`>jnRmK9E{Fx$p/x8=V3yF>I0K?>>|<>Gc8`u1WZqF}m T4eR' );
define( 'SECURE_AUTH_SALT', 'YwtJ3COM5IOjXR<g^/0DOR`GemGI47ai~rT-JLD QIYKLl$s$:E@{x0jFW/s &:#' );
define( 'LOGGED_IN_SALT',   'Q`7[.8JM{f_if8gU#`B]t=DhDl=WLtlXX$#p)U)NQ|p4#/MMwh=D#ipu3+=1.j5!' );
define( 'NONCE_SALT',       'JfRF)lNUXXIQA{xA^-m7Vw}tiGJAom9 YTo7xqp*N=;9+Hsz,0%zmL60V}ZpUPs+' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
define( 'FORCE_SSL_ADMIN', true );