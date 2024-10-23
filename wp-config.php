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
define( 'DB_NAME', 'project' );

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
define( 'AUTH_KEY',         'UxCWG8Z(B]!q}1=~eQR`3Xy},rB&h/U[7 v8a[t?]iMi~FCL;E@|=s~sOT/3|ZlW' );
define( 'SECURE_AUTH_KEY',  '{JwB05LJ.e3D!-ybM! ?`O]7z.-FuI{>UHwgrt~yC9TJiIGX7(T0+(5:4w#hjI_|' );
define( 'LOGGED_IN_KEY',    'tHv},UGf828 q`_&/>fzdqTpp KJY#Njjpvibyj03CL)Myk6T+<.Qpi{tF`FD-NJ' );
define( 'NONCE_KEY',        '%{<JseyEQ-[7i_}~/LG`VL7[7:<&z[hS4q:tjQf!k%x<^NbjY@_L+1rSV4(c?/VV' );
define( 'AUTH_SALT',        'NmFLLf]JquJ[v?Ir7x[l3{29sv2[qAcb2ed|HDmt}:K~GU<t;{Mk~.OTcoFB[0i>' );
define( 'SECURE_AUTH_SALT', 'WUKPs3r FUY6|Lb:J^aQvOEmvB~dGu~?qdanIv+`JUJ*1&]v>.}>eV*SFN>[r`MQ' );
define( 'LOGGED_IN_SALT',   '!U*+ _%(#tm{{/r;E#)j4,9 S&L(]MkTtE#Ej%218Cspqb4,{`)kShw0{ifp6Z{4' );
define( 'NONCE_SALT',       'O6?=t}u;mlT,jujUku|9+H!Fq6+O=9(%p)gGOAP*{ne):YcCt1loc<-ty6`8_8A/' );

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
