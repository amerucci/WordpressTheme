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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creativeagency' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'IbzL9o:DmC:3{_(HUj#>,VSAGaUn9r(c%3WjNp=3+_-JmB.g_Kb(9xik,NR90y9(' );
define( 'SECURE_AUTH_KEY',  'q}] Ld#V]5RH/(}pu3L^%,e?XDOQ<7)apkI#UX}UGYbm~ CqOruGKYb2w%MQ4J0G' );
define( 'LOGGED_IN_KEY',    'r<xFF}hn1=SdLD_wT~Q4u1(#iSWak[^)bEE29 >X|F99W}|6[WufF#3?l>5.v`!.' );
define( 'NONCE_KEY',        'wQFw!8wqn=b7m(%DzByuoiLB~Ux><Ci8]1*4OOXndXyK)|nCg?.>v8XFk,iZUL*.' );
define( 'AUTH_SALT',        'VvJZ(YVY{>feMo~8Q=JZlRyiJT87Xga*D><(^ajMO;txq7,v}&.8v7?YP:K~a}Q6' );
define( 'SECURE_AUTH_SALT', '$^,}SGxiv>(H7$!h0>NYf+{7jBT0r$?,bZX@z(l[qK9oZj=-@YnKP#5=0M.Qrimf' );
define( 'LOGGED_IN_SALT',   'WS/ohl U]SNEwW|s9(e~FvSv:FZ#Zyxuyzr:]vh#|T4dRKagUMs@IHT{77dOfe=(' );
define( 'NONCE_SALT',       'yx~l&Z<q5,!fU*0iNuYc6*RnbXu33&Me?I?9B;tPn1<6nr0p>DSM!96OWQ;^G/Xa' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'caacs_';

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
