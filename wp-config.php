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
define( 'AUTH_KEY',         'c?5QQRu{F0Ab,H`7dFuSvj!{{u*2W}|X>~&l_L-X 0?GnC*Vz>E`#WVy8M(FfyJ1' );
define( 'SECURE_AUTH_KEY',  '70YQ!p(#]h?Cv(,kW>#@bd{%6JvkOR{O|4`NxV~4eANo 6-?N!Lxk,u~~pen1J(Z' );
define( 'LOGGED_IN_KEY',    'jMn3//<8n^SnN3< ]lO3R,3$Idp%{<v%IF<jMhpu33V>XA0)m=VA^4cN,1O=l3.D' );
define( 'NONCE_KEY',        ',5,rxV]B2pl.!0- <=4jXE$1H^8 <8601_RAKGK?3ad@z2d,A79N,xLa24jWxcn|' );
define( 'AUTH_SALT',        '_FX%T),xp_<.XNkL:BXf=,lFU5p/&6zzMAfDyb0yzK^+Ft$_CXaM>)angv(vx4-T' );
define( 'SECURE_AUTH_SALT', 'IFQe;ZDJ ^O.-MeWrcKDRjPttny+xt3-eZ]w:]^h$5~?,%=UAHOq%w4gs<#Ow,;C' );
define( 'LOGGED_IN_SALT',   '*mF:UON6dRR{uU25d`B=<``Hg$S*|z)r@(C>l kVsU0Og>Z+=$e2WI^c%Kp6{I%M' );
define( 'NONCE_SALT',       '%{l)m{L?YjD3]Xkg,`)xr9>e@5Mq)^L0R(v=R^Yl9#ucx)goKwEdr%T{k3g*T;-]' );

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
