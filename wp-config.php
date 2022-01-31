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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         '>hm6N0U!h(GYq1V<gD`{]aCIcS$/UBy}zM<JrKx,UYI0{m_a,9dU,[A>6qMoG(O;' );
define( 'SECURE_AUTH_KEY',  '..;+[7!RYR[eGU0kGB05W1D,hYw=Zn0$y!# iyawfXiuwsp^@2eKEeolGu)`wSoa' );
define( 'LOGGED_IN_KEY',    'R6!LGiNtUXH{#O6F>bg,VM~x*dkeB/]G@8 ?[hZ78?,ou,-S~-,wJ(S*_9Nvc)l1' );
define( 'NONCE_KEY',        'U?MOWh>QD$OIwjbp /WH8Bu_HGsidw-.OJBzug][:>qw_LP!IdWg|Dq~fzq,v/@G' );
define( 'AUTH_SALT',        '>%YheyR(IE!g+oI+mWaL]fU{jPCqt/C2L9S0dZ{P:8V9|#4@/|lc9?X4OU)YIN3R' );
define( 'SECURE_AUTH_SALT', 'SHdAc?2[:q%u!rr%>o2Vbk_E4:<[mQ#R]*o*~|yw{*Aa6s|0_,]P4gR6Z3$;ALU.' );
define( 'LOGGED_IN_SALT',   '[ mGYvo38wX=)o^{E9iyYwQno]k1qrPDPu$J?)?U~zH-bt+CWbihvjQPynb!?/)C' );
define( 'NONCE_SALT',       '2wH/<^jbBu-H8y*WjJ5:wFs=XU)iE9mK*Q*A)o7cE13W8}g@J,!hL7m<]DA8h_g+' );

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
