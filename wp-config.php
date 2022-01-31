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
define( 'DB_NAME', 'testproject_db' );

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
define( 'AUTH_KEY',         ' F[nDz[gc%rMbxfc(sYGKH=`X|a]vXX77D`zt1l(5ujTu|(LtS|hZHkD6t1 Z6pn' );
define( 'SECURE_AUTH_KEY',  'D Urx%LGY`xB=d0pa{@2Luv7zuKr94c }T3lscHDD6BoG96ypR9KD,`T#g4ARD)3' );
define( 'LOGGED_IN_KEY',    'z<`NV:2=xL]30BQs&+L0?/_muLwnr8@e(iqT8W%Ndy$c-Ip+qT@bjk;bkU-aCrLn' );
define( 'NONCE_KEY',        '?R*lhZ.S$}JL]);.<{s0E50pAN9W*U7*DRDrtBp99$#op02#:)L4E-=/u$[Q@u?g' );
define( 'AUTH_SALT',        'BM#oPV071}9$.1`[p~uj#NVJ]Ycsmg&%qDMllLwaA,>**#sDKS:8(-)6g5KC=&;t' );
define( 'SECURE_AUTH_SALT', 'D]c*Kf]Z9 UTc|@ bH;abjVsK@in6P :ypQa8#rp[2N>c)9}Q-=-H%-Kg|ab y$t' );
define( 'LOGGED_IN_SALT',   'PM(sCpG4ja@1~t}<o<#B<EC*[|OF]VCl1/~(pBp7%y1B}pt|$VAm@NO;Cr$80vTo' );
define( 'NONCE_SALT',       '~t3SuC3K2ws*./3zt!DA4CnMuh[1hb~1)o9a*-f]_>Ms[:ob_c*E7P~8xmsm6PxB' );

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
