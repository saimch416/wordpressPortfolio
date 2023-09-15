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
define( 'DB_NAME', 'Safdar' );

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
define( 'AUTH_KEY',         '<F%]=v@pT[HY:uu3~2YEaHr>,I!8jAc@f^<UHlqQ$j_e^at[&15,via>-|Nk%G3$' );
define( 'SECURE_AUTH_KEY',  '~R)~YCdCLWG-xkwgt>R Ghd}X1f=sySmOscy=m>^6i+uq]C1,9{+cA%k!#rUsT.t' );
define( 'LOGGED_IN_KEY',    '1pBeNJO[w|n-qZ;XXBKE%gm!! 9!#l;v(.hN?Iax+/WLS*Fjzim6XBw@ra}JtStm' );
define( 'NONCE_KEY',        '?f %yg(.5j3ej,A{g&R 2adnLt~o6oo[eR5FhrO%-jaOKj!X6Ix5X9Y1:,.RLLTP' );
define( 'AUTH_SALT',        '+(eF.6:c70Ar^Sr-)Gvnv(nY1))R4OiF+  U3.Bv0`;y,*5eH0aqm%ajht#oP=MV' );
define( 'SECURE_AUTH_SALT', '/650mEOv-[&a(2DLuiWA?SI#qE~|Ka<U=yo$T$><Ek^/Nr&HTo/Z:L}&pKQ,%Z+W' );
define( 'LOGGED_IN_SALT',   'S(Ov4Zy%r:&oaqi/*?[P2ld4!6Pd3Onp`O6=Equ/!tG^*mXxFTeg7!4C{Ccv6gUc' );
define( 'NONCE_SALT',       'yj.+rY|w|v8M(Q_aJY7)kU`#(}CN*~$/k>,;V9OpU!E0R`dI8fZj;V_]T;F9lDJ!' );

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
