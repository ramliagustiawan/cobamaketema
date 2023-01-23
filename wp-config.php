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
define( 'DB_NAME', 'theme_dev' );

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
define( 'AUTH_KEY',         '4U(>&pbTCom@$b;?+S?M5}GiOQ3evpFR#E7`;+uY$ #OuJFO@%{oQiF%IK18RUa)' );
define( 'SECURE_AUTH_KEY',  '%[B(O`^7&S_Yi*cpgtZ4FUC]#?^+Y=N8wtNQmYYjKmJE3_JyO,7SpG4|}m[C9P]t' );
define( 'LOGGED_IN_KEY',    '_83Z4S`H;M7I(X:J?msC?,t} O@SK&=*>GHcrUrmW{:3l:z}.0h5ZWqVAt)VRfND' );
define( 'NONCE_KEY',        'xoOe2f*lU!e*aq|O)8%DR_0G{6XEs1E=dm%#1g>rxYhTyRh0Y$PujT> ^/eZQfo-' );
define( 'AUTH_SALT',        '8W}wh*@_y;k_}*rhpQW+r~_*f+(j6#8mZCL1S*eCmH>5sjt#drOx*3.K!K.P{XM]' );
define( 'SECURE_AUTH_SALT', 'EdV-VGBp[1`m3/]% 4?q~LeJ;D%y6@79iRASOxz#FfYY`ocn9;]vfY![Oc^A{uGY' );
define( 'LOGGED_IN_SALT',   'z9:*)6sih.DFW2dCXvE10Pv]i+l;us<,&Mlqz0hi+NLl1U-:F}N>1.t!37_#988E' );
define( 'NONCE_SALT',       'bxaaWu6W6G~6U*Zq]W%3wS3pRFeb ([g]^RD6p0d+@[Qq*mDg3n<#&~~jx{JFr@u' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
