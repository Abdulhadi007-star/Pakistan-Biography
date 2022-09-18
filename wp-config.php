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
define( 'DB_NAME', 'aech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         'RGW@P(kec>YdY OOkMS SK7hyT%5)x!V=.LrNU>YF9>-&^2ka=VeLT_<dy<l/v;4' );
define( 'SECURE_AUTH_KEY',  's`x6j*dCvxcFVSz.!;|;5v=7b8iL>6LNJNuLCQQm!2(@,{RR$}q{Nu>2c`4p-ZN!' );
define( 'LOGGED_IN_KEY',    ',A[Q@mE<oV7#CwyV1b%oEN[sM*}?>-j;xr<;a}UoU;|G ~T34vLp.op]&,=i_ @e' );
define( 'NONCE_KEY',        '9xc:b)3`]A=2#tVl4;a<:!mC^J/ 2q%${MaRI$;?Kc(LYhfN0oop[,z0i{+.$QW0' );
define( 'AUTH_SALT',        '@|CW_=|qaLK~fMQIT#6L4w!P=}YHQQNb:SWMa%O`MjXcgvv<?I6oe`YVEGZiMJ;h' );
define( 'SECURE_AUTH_SALT', 'qF@=5/>KzMd+jajaIj5O3y+ 8XfN+gb:-i;},yAm,G{MduH<5~3)iL<08dd^D%k ' );
define( 'LOGGED_IN_SALT',   'OoMT$:=4utwJ9DWOErpwpD5MiK2+b8sJWd4t{_~^ohFf.X]Pdv#ad|8e~@+T`+|p' );
define( 'NONCE_SALT',       '1Sif.qA3oqAWVgi$#N5Y-ghSJpc3QZghut`gpT~>8UuRC`Ca-)RPAo+P4V:Vdp6H' );

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
