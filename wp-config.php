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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         '{owR9~vD>K&31,]}{2<&U}t/68=S>QuR<be4uRuk$1Ye,_1J6uUX+g5R9+A~r8V^' );
define( 'SECURE_AUTH_KEY',  'wk@!?s(#f6,as<ttu><j$E6_QFpNjS5E+`I/9. 7+9rZreVg(n}K)m8J(}hD$V+]' );
define( 'LOGGED_IN_KEY',    'BxLm,lDqz-vd-R~c2^`p,;Tzu%`&K$O]{gEYz/Ja:_]$#O_Zf/:Vn) X{q7rF8h%' );
define( 'NONCE_KEY',        '9dQG%Job)4kL2flLAQ la-!8.D.8;3`6D8NR~K^RV/+wOv}$23gQg0`]C)BiO_;t' );
define( 'AUTH_SALT',        '(;LujYZy$c&C*^kR61YX1J{uHY!j>)P1583(5IH$S*hz#=| j8f~*Y,y?8qt`Us4' );
define( 'SECURE_AUTH_SALT', 'Uv;G(t#s!Dm/p(U-`?-,o3[<f<}eQo?rh% rbxF,#c+/H+428Dwvt*=uA#Ba>IVJ' );
define( 'LOGGED_IN_SALT',   '3tFzGG3zdTm}$i-i8{:|6eQpmb-O*U$Ybot[C}YH&V<@hm(aT2#KJH9Eo1vd?ITA' );
define( 'NONCE_SALT',       '*g4w5onlKeTx8Hdzh!|N?8NnV}PD`qd~fbZ__!cm%*K ImW-|X6&Drd!V/|b9R#_' );

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
