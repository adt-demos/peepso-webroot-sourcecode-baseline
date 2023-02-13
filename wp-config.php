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
define( 'DB_NAME', 'XXXDATABASEXXX' );

/** Database username */
define( 'DB_USER', 'XXXUSERNAMEXXX' );

/** Database password */
define( 'DB_PASSWORD', 'XXXPASSWORDXXX' );

/** Database hostname */
define( 'DB_HOST', 'XXXDBHOSTXXX:XXXDBPORTXXX' );

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
define( 'AUTH_KEY',         '5c48Ng~!_-2]>ScV5T,pgn*/M6gS*H5;aHG)nJ<%e^txB^VT/@L~d -Ll%+evQu(' );
define( 'SECURE_AUTH_KEY',  '6h{TnsE>jxdPl8W#HhJ=4&e/x5b%MhFw^lyAz4?uUb2xQDeqPM!R6G^2_AVXAS#G' );
define( 'LOGGED_IN_KEY',    'qlIM.clVC#(LPWt3Q)3uqW1uw!Zf]1/X85vvz+FEwPG. jj]YJ`o3jt<=2GESh}i' );
define( 'NONCE_KEY',        '~pUTO-oq}^H+j[PTo3AdH49&w#,g5Q:5$SnxG.BE)#hqckrPo#81X:aFH.NrAXH ' );
define( 'AUTH_SALT',        '-*XiDGIgWP|&|HC2umNT~IwO{YOzH>#sco*cPY!`F~oeCKMkjbh%!Ez+4YHE Y/h' );
define( 'SECURE_AUTH_SALT', 'A(1N&L,8M9i=k%9.z^5NQJYSgAj,O|3>DCc+#=T)ee5S2&Vg1073JNu3&0XtTlB!' );
define( 'LOGGED_IN_SALT',   '~7zf,S_?ZX{SAX@[r+`TbY@}5R:@zC)Sp;.i_Q,%cWl_j*) FTv9A-g<|Yl:zc9x' );
define( 'NONCE_SALT',       ')OU%?Raf`V+MZO##U7>7IM }usz6^pGoFA>M:-*Qp9ngxf)?p-5H|FW56hk>({!T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hdjuoi_';

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
