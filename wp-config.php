<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopping' );

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
define( 'AUTH_KEY',         '% QAZV!5jD0AQ}qI1.m>3?/h|egd+0Ko2:N+1DJ.?-s6V/y3@%Oq,6XU~5<Z[e{%' );
define( 'SECURE_AUTH_KEY',  'v$VT8bGuQIMz6g3A:MF~VOdgx2W6L/W`C&c~Z_FDYHzuq4Tu6yz2dHm)TgtyR=TF' );
define( 'LOGGED_IN_KEY',    'zREExlRVyRQ_cV:<*no>|#)p: ewb_b6N=Bs l`#Qg*w.84._Vz9ml|FccuI|UXA' );
define( 'NONCE_KEY',        'XWVj!h11]{bY;HvptY`wA,0*zh ZCU{rNs$&x*h,0q03V`b>/5tIErQFW:?t;Qa)' );
define( 'AUTH_SALT',        '1<b=-s9uBQ_(YT{=x42oS{NB5L#Nc?@^7.~DhwWt6GO,<a]d -;$UWlG`jFU,Afw' );
define( 'SECURE_AUTH_SALT', '5#9 sV6vxvEEaIpiK*ZT%-Hc~vcd|F#-A5v,87~}Wqlae>=icYb&]<yi+/lcWggG' );
define( 'LOGGED_IN_SALT',   'k5hh0uo*+H4RT3s,T)sI-d$&:Zo/<4_>`b%wuo_?cD3j1q7`swC9uTEfh/D5[`3d' );
define( 'NONCE_SALT',       'd#[=bN}Gx&r@O1^IoC:O)v}SmINSOW?R)_Z&yN{Kv:ix)*=VelPH@/E*?YY6#{AL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_shopping';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
