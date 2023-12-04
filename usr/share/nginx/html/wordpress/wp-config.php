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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'Nithin@12345' );

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
define( 'AUTH_KEY',         'a;*cn|LTk,,SYKgXKiV;C*!jIm`BLx#vgLt4v{][z5`9&dNklGX^d{_SJPCji0l0' );
define( 'SECURE_AUTH_KEY',  'y*B_nd?n)eH@<]];8AN=m^aFNzGDot0Zw!@5g2Z/(>=9+x]RQgDl}ow5~`@D-$wX' );
define( 'LOGGED_IN_KEY',    'ucMW,v9=6-LYi9p_}%bC0,HPm>Yi,)AJ?UNG0W9n8A7lNXJhEKC$jNsNu7m^wS&L' );
define( 'NONCE_KEY',        'hjO-Ohr6yZ/W)Z]xa-g;t<jUYml.QS|UV >0h#AY~r G=}hTBasbe)<=,K6azF h' );
define( 'AUTH_SALT',        'L6fRU m6KY6MPf.Q0Y+%!F9 }ol#Q>lcq2U[L<SQKD1i?5Ck4S:R}`^r7A;nhk,!' );
define( 'SECURE_AUTH_SALT', 'Q1Jd[po?kg<}Kx[L;u>WA-^>iNNDjK}/lVNT/)q;] ?LPss#G^:dg3+GMZoVF6V_' );
define( 'LOGGED_IN_SALT',   'go xy.bi &7es-Vk!>5is+7 d/}_LKa&GS4!&C|nN1%v*Bn-C)A7[wBS.(r5*.Tr' );
define( 'NONCE_SALT',       '|bbOZf,a*K=GDKU]{9W[kA].J{IbkGj@>P^[|rr`o[l&l{$9)c63jvc.VU51A}Vt' );

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
