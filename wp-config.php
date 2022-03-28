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
define( 'DB_NAME', 'mosambee' );

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
define( 'AUTH_KEY',         '>V dc@)Ex=h-xi&IfLOH|]WP>%SZeM9o*xhoY1&dT3^[L{&Hq[*lSmFqM#j;,mu7' );
define( 'SECURE_AUTH_KEY',  'r(l<f*PE96V-4XGL{;=kv`hqFF;lwHqMBo}RFg-d?V4`(]`AW@=s-<g,z~(8xsf^' );
define( 'LOGGED_IN_KEY',    'w?EGY.OcN&Bo>V+Zd?s| >nnSNz8?W<db;nHB tk!i0o97Bw<v_{BIR3}Bw{Sj3h' );
define( 'NONCE_KEY',        'bix}|B)aQ]o)6Yn<k@uj[M]c$aPYaG]Hs[t8ur|],F>:a`SVt)J@3`{ia]urAm11' );
define( 'AUTH_SALT',        'o##d>d++x1sTA&$Lan+|e5y5;~i3)_1~Qo?4d$#h?|pvWo3{xp!bGC+s>P6*unpn' );
define( 'SECURE_AUTH_SALT', ',7(F fS-UDIm#oe%|;NICJ$VR6{+IXCny;4^[eAF! M$Z&AIDs,LYRq,8WDb1~,8' );
define( 'LOGGED_IN_SALT',   'jx/o4i#2@nD/}?@h,7Q1VgP2V7A{.AXV,6ja6Jh%1<?o16KLVN*.xg<)zj`b7ji1' );
define( 'NONCE_SALT',       'H,I.IqnnBY)3BDGPN@e*f`~mAs#UT<dZ<srMiI<3s|E8Jj3:o7ZH_aIFxYviE,TK' );

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
