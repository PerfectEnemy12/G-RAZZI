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
define( 'DB_NAME', 'g-razzi' );

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
define( 'AUTH_KEY',         'LtPcXAc$2t<Z#Dw#zE9z}eR!Wnn* eZQqAN;`V,`gzbM<;Jc;8uRY-{q=vd}L2W1' );
define( 'SECURE_AUTH_KEY',  'S(>R^7|+EGu=Lzj5&iL3>$b~C$={/xlW4He.ZR2iyDHC:xDa|o!D iM[d3813M6v' );
define( 'LOGGED_IN_KEY',    'Sn}j&wB?)Y6XUgYS>Ep/r1UE.<T5n-@4yM=3lYtng1v6(eX%HvsLb3X3:M9SIdnS' );
define( 'NONCE_KEY',        '}L9=[0B>),[:T8EQB%`lxAUbz=4aD39BIN!i@m&A#J49O}9Hz{ Fywv@z(lXym$i' );
define( 'AUTH_SALT',        'nhsC:)cFKaXGG^Xs(r/Zj+2H2MW*sMYS)+C#J`=4YIusd!9D0AtI!;{!1BrL^,I#' );
define( 'SECURE_AUTH_SALT', 'DG<Wwk% 3yB}gXvX,# Twh^0Lnq9P{*.4 *Q~h-5>5`A6VXRe}N&j4GpSJN`=aW;' );
define( 'LOGGED_IN_SALT',   '-%AcV?>5q_k[T^rwQdM-}EI;~[[*p((kJf_`C5%yzof@v $,q@MhR#%a;Acks;Hj' );
define( 'NONCE_SALT',       'pt/m%SM3 ^HM={y,z(:6qoLRlg!uKAc@;a.1X<s$hf)c&.I8$KSDIq,>!3$xO7`8' );

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
