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
define( 'DB_NAME', 'gdlh' );

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
define( 'AUTH_KEY',         'H;wPxpM*ex_|/M-Jwxo9rsTs/_fP%Sp><aWF5H/(y.b_k3VY;T`j+K/cpo0Ti#<q' );
define( 'SECURE_AUTH_KEY',  'e?f_f9KD.[E`$7Q$ZU:m:bLf1}6V}3Fc{+Uq,wu7WGVC!0Ej/?yfqz9qOS(uE*T8' );
define( 'LOGGED_IN_KEY',    'y-h>r,b^pgqqB7xno;Xn_[}MsYjj?Y 42c4cA.-/S:hIlIA&hYRjTX|aG^hba]96' );
define( 'NONCE_KEY',        'I-H2JX_vV,>.T<:+)#Ptt6>FQsy*;H(4jGnl>y=L^UjFN%zM?c{v8+d&G_9P54a.' );
define( 'AUTH_SALT',        'l$v^u!53lKh9$h`S]Q&{4P=j~R~xLkqfSj8al(]^<cSY5jC_`Y~+gC-sqqBln`|b' );
define( 'SECURE_AUTH_SALT', 'm&O7=~Er$v_Q$:SM#6h]AR<JTqqNk+^M4q;G*7&>[:6&x,DuGN5&3jv>9O_xargt' );
define( 'LOGGED_IN_SALT',   'Yex}GN;H vbkg|vQ:p{]pEuV.zhHIQ_L-~<sT)D77p(2a8$sB#YS:-1#O5+`7Ohl' );
define( 'NONCE_SALT',       'tMm1[w<W<yC~j$FdH#_jktf;T{ 0:I0GU$5:R4-4{sA+Wv@3b6bzyzF>!C]A@*r,' );

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

define('FS_METHOD', 'direct');
