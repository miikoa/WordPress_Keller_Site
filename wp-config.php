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
define( 'DB_NAME', 'newwordpressmardi' );

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
define( 'AUTH_KEY',         'Yc7X^xjfGQ<f>/iQO+thP|*ql2I>B5eZx@kd~@W!>R`[x.6]PvDlFD$9pl]lGT<j' );
define( 'SECURE_AUTH_KEY',  '`jLBflS$pxZ}qPJx^&/cdmK=mzNBzgGo[Ze@eN}aCx68#MuD]#)[<~%HCi/B&^KA' );
define( 'LOGGED_IN_KEY',    '*aIGcp2HQDZ+JnwUQg8r) l[i/@R{n?MKUL3<cc,HS6Og>EhY]c]P]@ 6pLMeMy ' );
define( 'NONCE_KEY',        'j!7SLPbM#%BJU6j[c>f`NavHn0P*&+mH&rqg0@sJ!H0kqYy HWHUVRo:QM2*. zs' );
define( 'AUTH_SALT',        '<n1^_u,K`~T?b_H$7~|pl/ud%l7c}wDh!Ll7T~of0[^vy,8%&W_cF/=Hd{F}fmP~' );
define( 'SECURE_AUTH_SALT', 'tKIo9d4i(<)|?x+$4L@^PPgCizd[~[$^XZ#t$o!BoF6gjNM+Cq{2d@x0$GRO))<6' );
define( 'LOGGED_IN_SALT',   'T*cMqo*@1g3_LgUs7H[Iwt`^i{k v{+-A6n]*hlXhI[^,=4G-Ajo]R:yjGM!t+VU' );
define( 'NONCE_SALT',       'e >;Ea4I z8Y6(R%L(U|m< 75+/1/jffdo$;n~rG$2FGFsyq=JFIdBdsBbW2_&%_' );

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
