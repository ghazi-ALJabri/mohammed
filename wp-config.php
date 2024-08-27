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
define( 'DB_NAME', 'mo' );

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
define( 'AUTH_KEY',         'Oa|OJxU~9G`:<Zz.J67pq:&vi^yMn_PYE|}F&cPQ%`=.sgHF_RE5S8PiVUn66iS3' );
define( 'SECURE_AUTH_KEY',  '@Jj;Ba70c~Y;kk-o(lx}u~qX5%|w?2DTlplYxAximEr/jQQp6b`crGz]v3-Z1BML' );
define( 'LOGGED_IN_KEY',    'S6*,O21@fXMM.?.K/]w3`;jw4zHXF7IK<7Rm(>IO/iWeXD4FP(SwLJz$xHJOLtks' );
define( 'NONCE_KEY',        'w^FX6=XJT+7FS7lS,cKeAN8e]u=gUZ_u2t/g>B@/|rK<%(%y_jIfCZfV::a|hJR:' );
define( 'AUTH_SALT',        '4smUro|NQn h!eHF4aW%1O)AS)VIZ(3G0i&.M!(:g>f65iIEgxrM,M L$n% :3X}' );
define( 'SECURE_AUTH_SALT', 'ql Sd~O+MmgziI0kZ1}WT9Ya9nx}M?%|IT3Af=Dk/x+>!icmy?=gmi[|>2;sxA:w' );
define( 'LOGGED_IN_SALT',   'Et FHL!139ghu0^3q:JHQ#@/mZ2HkT8Dya~`0PadN5~R/VXgy-m(5I&PO`#whbx*' );
define( 'NONCE_SALT',       'C2,!U@O@O;IfuW_k}Si8]EGJUeA },;7W)l*w+5we`ga*,g>3HSP!gKOHfv1r^=L' );

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
