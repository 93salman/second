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
define( 'DB_NAME', 'sal' );

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
define( 'AUTH_KEY',         'e=+qq4S[{~:5aU_A@8*hFu42+R8T>*zrV^|_jb);I0T%t;0tUxRbEdr=<!S1%q?v' );
define( 'SECURE_AUTH_KEY',  'W[ath_]Kb*}-8`,LN(ga%(_);?+>m1`M&ZwGU }ZP38.t4yR~=k)OCu^nL-[x!:7' );
define( 'LOGGED_IN_KEY',    '7JfhMcZXADG4AOz*{ KP_u;>p_j_bs^G9r(eH`H(q@cOKF?c=.$Jro(wWC/%lC<[' );
define( 'NONCE_KEY',        'cmAt0@o[mL:0g|]0FLEt=Iz2y&FFn w1kyj{Kab4Qe]~V}0fTH}}D{,g3MAnubg}' );
define( 'AUTH_SALT',        'OviqJ:QMe6NrY5velZc^,gZ?jkJPVW3~: x_X#)qSfmMev_}hScn0?8wzkv1>HPO' );
define( 'SECURE_AUTH_SALT', '73WHj}+XnxVnw{fbTPZ`conGjl9d81oY.HcvY7+#v&1${%nE, ]`Wo(`:B2NRA:D' );
define( 'LOGGED_IN_SALT',   '@;jn[b:y%4_Ib+4`mA+gCKEgs`/9EYSleA:uG%+RL;@ey/f.m;#+w)b&:SC>B8Y=' );
define( 'NONCE_SALT',       '-`BCt-Cm,C!d+|lP`GMd$k,~!OdAICL(xIon{Ydni1#<+}]Lc^%=g_Mex?U2AAd-' );

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
