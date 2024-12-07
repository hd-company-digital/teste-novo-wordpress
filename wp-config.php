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
define( 'AUTH_KEY',         'gXMDuE@z9u}lgv~Z~.s+V%za*_6A6?Tyv&VXs{MkDL B}e0cq[pI0[N$7#lnp!.U' );
define( 'SECURE_AUTH_KEY',  'FTEAz%f8[71:o@PJnDIW[1kP|DX=+OIjp&0JZ%O5o.8.9iHr}>2%D^/yO^dFATcf' );
define( 'LOGGED_IN_KEY',    'v{Y| NeQc5Se1K!<QrQ]TKFQ}{q?c=zrn?GD-L1Q|kue@k4/,hS%gep1(Q:Vh2RV' );
define( 'NONCE_KEY',        'tpjT2|R*Fw>X6=FE,4^CnY(f=eCdL0J3>G@1~W:wF&V2<KHAsraXK%81[.0bbX2n' );
define( 'AUTH_SALT',        'R:(;8i|[K_LZ~$/T`ytm0lX=z4Mpq3Q][quYmeaZ?}];oA}4z!-mBl4+8)g[_1u#' );
define( 'SECURE_AUTH_SALT', 'Q|myu5(c8$B?W#(iB=WSh#(%GD{f:tYi=~_XPm+}P^Q7z~]?2N$q04$&7H;tFI6J' );
define( 'LOGGED_IN_SALT',   'a=(`XYG~{=uRQ_ED84dv>}5+^3b&km[/^q]#E2^{V~{PZxjNNnFY=jaE/HFgj)J?' );
define( 'NONCE_SALT',       '{L @D0-`PcdrAQ_UK:1L(d44TYEw:&)]3qEu }{oifv-E(FzF!GL7Q3//L/]5g~/' );

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
