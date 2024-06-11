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
define( 'DB_NAME', 'wordpress-6-4-3-db' );

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
define( 'AUTH_KEY',         'CP3+[J^NY[kTS<0<!ZKpp>At~/d(}|R^m@M;aZPh,D6ZX,%^n9j/QYmW_Jl6$ Og' );
define( 'SECURE_AUTH_KEY',  'tAB(d;Xh^Q@K7+R0JR@C%A!jx^g`+C}f(lnwFMeH}*WTVOcq3k*hPYr!}e $bMpX' );
define( 'LOGGED_IN_KEY',    '}:hHDb[E]uos4`{lNr;C*yaI2GX_N_p!MQLnW4;^RYSEx&*Wa]v9|,EN_G ?q@+8' );
define( 'NONCE_KEY',        '^TJflxT=B,F>Q735_3EIG&<C6J=)^d;Gghg2t<FM{YLmoiVU)#]@p0PZLTa@~7}z' );
define( 'AUTH_SALT',        '3jfyc>r#w:ZLa*e(r!S7]l5EJFia(Ido~A.]g%REx++GT]Md8N9^bh:h|f>5P+7,' );
define( 'SECURE_AUTH_SALT', 'LCPgrvBV?s|v&`PN`<e%Oe>ka!I=V $k^C||u6__:J|La}i]?O,@]+8b3j|VsXdN' );
define( 'LOGGED_IN_SALT',   '%kb=SG_`IXI9~L4U3>$K3N0126lg2G[yXb]hhVLrE@i-Z{@}7S/?zGl<{>y?!-T?' );
define( 'NONCE_SALT',       'v!Fxqd+`p9<)rbTev6+6HR(.Bp=H%%. lBr,@Y|BJ#gn5q45zmpc6l]/*iG+)E{5' );

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


/* Multisite */
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', true );
define( 'DOMAIN_CURRENT_SITE', 'wordpress543.local' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
