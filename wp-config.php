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
define( 'DB_NAME', 'woocom' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '0707' );

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
define( 'AUTH_KEY',         'uH(Tqd/d<dhIIYrN!fo;E{ey(8&uip=WTal]Or2(WsJwdCy3LW;lYdKQ_xtb(j0+' );
define( 'SECURE_AUTH_KEY',  '*}=CR%)_]}C ul;p1i `ba{JtKLRm)[st_#YF0DAI:)]PpxG=>upQ,*<rs(p&:PF' );
define( 'LOGGED_IN_KEY',    'v_IAt)^z-/8!sYZgnEw5zl^9$)vH(eVCJ`5c&Fh1;(DxmY7nza+m)]<pIlnPCfaY' );
define( 'NONCE_KEY',        '6kQN1WsHUq+$z$60rg)&,_Zk/(|aXD:@/MCJW&*nFm)@e;R7GVfiVcX[fJx,z]!C' );
define( 'AUTH_SALT',        '2qeq|o[HFp(i-(Wyc:l`)Fz.Fn)8b[Oi`h,&FWl1s2x@GjD-HH>8}F`XNd!SY*TM' );
define( 'SECURE_AUTH_SALT', 'h~asdR*?l%ibkR}F#]M_g}TOtQL8(6,C?Md^Ti@!1$:_m8HgRD!eZT/xjp7#@M)t' );
define( 'LOGGED_IN_SALT',   'oDb<au]D }FqsRqQi#ORCjV0 ,#}Nz8/@F0oWGi1v3[myWxJBJ[oh}(!mkLRcS$D' );
define( 'NONCE_SALT',       '<Eq4d<~r!|7V;;u,^{.&TQ+ouDQ8]T#LDJew:q_p1mY3y(Jpj/d,A&>ttU<;p|F.' );

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
