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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         '1HcY3Sy{m3?C3j>bA=p:Lp5s&9Eva/+QT-<SGW<_p_u,9AvQ{ClV4(WqL~1*R[($' );
define( 'SECURE_AUTH_KEY',  '>j$Q%DVCM%r`ZJtz534+cgYpBq{bxSMnE|zxh-gl4;j20Ob%BLGh-SbM{s>U*e:Q' );
define( 'LOGGED_IN_KEY',    '@lK&/G@SZ)DGb*/&%m6!f*>;a)xh|IIw&FW6(zf(>tdBWTv(WEa#z1v@J0Pi=vUH' );
define( 'NONCE_KEY',        'ySc;|#o},I,jW&v]8:Y7w8)08czq:Q~CWB-yafSu_QkA{Lqps(RTsq%1FQE~V{(:' );
define( 'AUTH_SALT',        ';=`llp3mEX`JjB[[8(OP;Ix.([_lT].{6?*+tqCI%B]*yvV2[l2DDo]<%bl<$r?G' );
define( 'SECURE_AUTH_SALT', 't]su0zY]a0hCX-TDX.WuSx.VQuz<W0uD=!{9G@>6?Fg}qJ;YtH[OHC?SDj<dRJ~V' );
define( 'LOGGED_IN_SALT',   'VqU!]0 E(Sjh2K~4;E/(k1 TG0s,DIzif/Axg}6 Z(<J!S-O9yC;8xwWM^hr*yVo' );
define( 'NONCE_SALT',       'epkk=x]7cfY$TZ/Y~$cqFy,C-i,l&!sq`)}23baUDIM9d;D7VD+n%,N:$%dyFJ1T' );

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
