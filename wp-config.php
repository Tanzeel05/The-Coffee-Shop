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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '=GYCu`43];%]e3*%xBGHrPb{gX*&(Y]@1>`!<LL4PpW~=wbh;a#JKkvfqMf;nk7c' );
define( 'SECURE_AUTH_KEY',  'D^2i,XIfjBf~q/VX3di]TxZ]0unjT^Xz?ls[ev&BArw)+{0!o[;5N9s.^Eaue8Rb' );
define( 'LOGGED_IN_KEY',    'y[1p)}sLfvV_(N60@}cDV`#Ofz{mby7H%&3KIH:{B=|Zy_oja_qPiB5NU1}L(wq8' );
define( 'NONCE_KEY',        'w#L$K8Tj>9)8,M6$mlY-M@a=wkT%3mmWFZV--Wm`1O795V;]W?$mrNa]J/Y(5/uM' );
define( 'AUTH_SALT',        '6,_;#vjA<R)T+is)>+Y{#qP8bJ@4*f}bUNXv^m0U&@Gp.#J!6f]I);KK:-Xq;#bo' );
define( 'SECURE_AUTH_SALT', ';MHKrgtdsv8s*A~vi+X=zG9atWze)13t Vd1WEVuxEMv>0%<oj0.f~ldU:2)7]E2' );
define( 'LOGGED_IN_SALT',   'dg*F eXh%D(&U]iM.+{zRaRLh?i}H$|W_gS2q!|!8hG,+aNb:[h-Zy2>48F4Yd<j' );
define( 'NONCE_SALT',       '~8kYs[,T.fU%^9@zmfH8tZy7mNs|0Hh=I0V0)?@, `@T$twu{?@PMrL%%q$dLH6{' );

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
