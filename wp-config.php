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
define( 'DB_NAME', 'p20' );

/** Database username */
define( 'DB_USER', 'wp' );

/** Database password */
define( 'DB_PASSWORD', 'p@ssw0rd' );

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
define( 'AUTH_KEY',         'z5= v!<EsN_D,2]K(fKoD.m[+!DY-wn9:@|[8IB2$uknweL0PM,p5YGtBjw&MuRx' );
define( 'SECURE_AUTH_KEY',  '@1a@7+%xvfHaOPiS]VKl+ylYx;{Hgv8i?BxB[VQ;DDr*znho#2o4u)F~o9Ab88P ' );
define( 'LOGGED_IN_KEY',    'IiJ>-n_OU)$(YF;}%YOcKCJX}<!9~kJgcAp?aM~<VN+XNlpYR8Y62wQBsXD Z?+|' );
define( 'NONCE_KEY',        'qNU1|4dx,92OReiEU~n}>Lr9we@t@V^Y4zDSVv>Vc@@v9*C}6{l6y3-;*1n3neVk' );
define( 'AUTH_SALT',        '2Ke([7E=6xYg+^&#U(p#3M9o},YY!tN 3:|*:|-RR|?^N*$riVlMkM$|1#}Wr sJ' );
define( 'SECURE_AUTH_SALT', '[06F[`nenpY733}i-yzbh0k;Awhb:E8{p;Z@6/4K=A=!5*>U55wck8*I#i#q{rj)' );
define( 'LOGGED_IN_SALT',   '#sE7UMN.n16./QJmM/1Vb>y7_dV/-v,ZPW1xT<p`3.`-1d,[}&&/3|rrK9}WZ;|`' );
define( 'NONCE_SALT',       ';cNRO>45R3.*G?wxpj[u)MXYPae{QQI1L!1K1DDff6#}~<YFv>V i[>1w61Na.w8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p20_';

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
