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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'OX:]dQL@Qk>K[w>,;{{and^V@S;Om<@AN}p%z?+5FhQFqVs1,g&J3g5LEzWF*21Z' );
define( 'SECURE_AUTH_KEY',   '%_}.wBl{{$ee&DPkq..%PV8NL{L#xQF@nLg$4(I;2ex/]]LS-<i*}%uW:s4/5(7c' );
define( 'LOGGED_IN_KEY',     ':&eM_4.nQ$-A`Q{kZ1fqWveT/yJfMnRSENzxOSj#owyFA_AzN7o^fr|<Bv~cxQZ[' );
define( 'NONCE_KEY',         'wIcS0B48S$VU0jw>Ei7S_p? ,Cu3&Dqo49 w{X@8_ c:c3;u}T1sswFuYZDAAJSZ' );
define( 'AUTH_SALT',         'b(E$tDNQ$d s#s=)@c%*0/dUmpe/u(C&sD*D5L7klv*w t0VT=Sbbh55kJf0[7L0' );
define( 'SECURE_AUTH_SALT',  '9In/sOYo4x}d1Tp1tw>5O@,?V$I3Y$Nc#}a}D5hFzWqt*_NrF1;c5d8+1Vtk#zKh' );
define( 'LOGGED_IN_SALT',    '=5<cMcw,J7[A&#.E9KK~jVAzq@} )d`9_SR8f_E5nate#O@d%MauRq#,l[d|8CHz' );
define( 'NONCE_SALT',        ',R5Hegqy@t}#;8c/l%bo.V^IzK_G0q^,G6Ta$v:7&Z@($?JuaCBArl]&?:DG[BST' );
define( 'WP_CACHE_KEY_SALT', 'N>(Wuad(/&rGWoW~x;J6j $m#1<B8/lLv%<wN,+ +ih|}iK:/@n5pDQ_!qt3s$}2' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
