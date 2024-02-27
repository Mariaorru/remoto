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
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'EQ<gf0c9JaDOI1%2&x_<gegw@5SeEBb5pc:gP2%#N8.er1M^K*Ll:cTyM>ZBTW7u' );
define( 'SECURE_AUTH_KEY',  'ix{=Rt!{UU=b;U]#$UPv0UIX51p?0 %`1H~P~gpnEE2=sSjQ2w1A}9!X6DViwFwN' );
define( 'LOGGED_IN_KEY',    '#ra@HxoPO8#9lP36299S/>ZMmA[/[k0t3;Ha GB$i:A)sQ^&s)<Wb=unJ8XM`Q[[' );
define( 'NONCE_KEY',        '|Ap[14Q),uDZKA[3E#P9>,dL[~#OKPQu<$0X.)ACdml/N%.RX89x.h~CG<O[`G-o' );
define( 'AUTH_SALT',        'KV_XdD$f{eg/[AhS)([5/}qs6@ArN5esH[zMfSG>GA;t~Yjv@Q-a|6@xG[MfYN)$' );
define( 'SECURE_AUTH_SALT', '+z% X%1-{(&Ck:Nmxyoce[p(2a3/)^fx<U@N1M.0<exM1=CfF[J /[d30mD;ZQ&W' );
define( 'LOGGED_IN_SALT',   '(szQRvW ~0iRpiCa^F)(,+f:9NRxop)T|+6.zxf[Q<Lde2bJF0i]?fP+Qp=r)^`0' );
define( 'NONCE_SALT',       '2~-Q@%&y G:!:nBXd&9*vR.[#TCif5m&_OlC3)L>rOOO$j?sQx}sEk@{E92?`|pm' );

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
