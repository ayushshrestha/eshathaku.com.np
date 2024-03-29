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
define( 'DB_NAME', 'wp_eshathaku.com.np' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?/ Ma0p<QGrxK6JI^dGJCgvMtPEU;HFbJn[[b};[SquX#R@ -y(CrOl[w+>%M::;' );
define( 'SECURE_AUTH_KEY',  '.pvgBtfpMMQJ7o{kO?/f#X)sWCK[S!xNbl|EX^ap~Z#15*#:agF@XfC>}[`3l#gn' );
define( 'LOGGED_IN_KEY',    '_qu_]/<BswcnxRz|!NGH~Sg`_SR&d&Xe(G:tNttm4+XV7rHGjK{0G^h={KDo*,<]' );
define( 'NONCE_KEY',        '*I$w#V(hj^^xgOc)dv1EvV@&TaJrU<hQ(W_!keAzhkj.{t[wW9+8Mhn$vMW8J>1.' );
define( 'AUTH_SALT',        '.:f>{D.v|<[x QF!*3p#M7Xr=-hZh`%BE]Sz:P6W/n%R:qwDsN01eRoJqgwjzWy!' );
define( 'SECURE_AUTH_SALT', 'lU/~V|4|TU-=Lt:#UCvMb&n1>5BLRjO@mY}kEipGu7R@(AFD)M &!%{0@At^WcLk' );
define( 'LOGGED_IN_SALT',   'rCzq*!+hLN>F2$e0zf#Pvz-y{bQy.%+2hG~c|N9{R`ZLo8)ysa,=qFSpU$1?kW+4' );
define( 'NONCE_SALT',       'Ag7f1A8}Ad+^!0YB4&Le7QY40O=p$dkB)|FcXV7k&O>l _F5`kb@RXiWimomT5fk' );

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
