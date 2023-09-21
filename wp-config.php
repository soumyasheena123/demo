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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'Tio%WJI,/+Om*DT-m0<qWFq;d(6{b^$y`gfy`j%vvzy]N5xTUwj&(mRY]] `,fDY' );
define( 'SECURE_AUTH_KEY',  '>}$ -RRA?)k(e4@4e(Vf>W<[eqFD m1^Jx*tHfs(L` Kv`=Bj3@l7UY^nW5<rC+9' );
define( 'LOGGED_IN_KEY',    ',UNgr<99@mw:+06O9h.IxG_LF`/(p@3a o.J5fxr$1(jq5/(]$r5S?R@s#9QbeC4' );
define( 'NONCE_KEY',        'owb8B,S,d-~*n^c;;S|HFDKGuFbhR^f[:!2?9y P?RdWyX{ms@}P[j4-5GMj` QB' );
define( 'AUTH_SALT',        '3WR6_n%,1.Wd_m7cEI,1@KlINd1Cx7#]@&AkDd8{x+YJ~@y}kRyCp5Zmm|Ea{qB%' );
define( 'SECURE_AUTH_SALT', 'b2<:8<mdK}j?F-@tK0:c@(5:ox:f)35C.2g4~qTe6B2OV%#,1`Q0?b<HlZ_4q@Mr' );
define( 'LOGGED_IN_SALT',   '#HYj2{LHI1Pi6aVqH;XMdkBYlPH7`yN1Kh+Dm)6Cna;IzLuR]:!+1CEKDg7N qF[' );
define( 'NONCE_SALT',       'd|l^MDP#P`FQh[WSr;dSS%!2xh?7%s2{D<A<6`(Z31!BD(gadD`8knsidIJz_Ia0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dm_';

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
