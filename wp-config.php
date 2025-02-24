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
define( 'DB_NAME', 'heladosjuanita' );

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
define( 'AUTH_KEY',         'Nn3N2=K1uvUo2P`<ab2a98@;9%!aFqnn#<s+.gzu-pHtKv5Wu^x|LmhBy^@]}f~ ' );
define( 'SECURE_AUTH_KEY',  'z3-]~6|U8gmY.|wny>n+Rf+P >7Da6$q}*k#*..e_,k8n%>BM|j#3N&VhEFkK+de' );
define( 'LOGGED_IN_KEY',    'f`R5/Sx!ny(a6rRE_)1$~K*T=_^m4q100?)b/>)kfl+au(!VT<u(5Gf5x(~b|/2]' );
define( 'NONCE_KEY',        '2u=eq3?m5~wXS__U7I+^EE,8Kxe7FC3.h588VQ,1:IN+EeFIfn$d@B_a(En!5L:G' );
define( 'AUTH_SALT',        '/vc_a)iUBRp*4uI9^^Z24;(7yIwWX.%<3:pU(!Z[{C m1>xFpSb+[yi~;+5{<rc[' );
define( 'SECURE_AUTH_SALT', 'Zq83QEo[bO2jo2^Gla#e(/fA^@P!S7 oU*-F_;t5HiL9i+yV9D8C&]`[rVR9hm3d' );
define( 'LOGGED_IN_SALT',   '~X,V9w7D)CQ:teeFq]|efk_X}[d2/({3,%l1CZyRGf6qSWAy&~3dO_^>!MTg&wuV' );
define( 'NONCE_SALT',       '+77V=O@7H=yE&Vu~fM0I6E2Hf+FPi>u-J$Rx/[]y|7C!uyv_[0lB,{(wWfw*SN)_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
