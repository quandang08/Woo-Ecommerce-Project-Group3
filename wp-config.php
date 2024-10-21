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
define( 'DB_NAME', 'Group3_CMS' );

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
define( 'AUTH_KEY',         'a9,N(.#P? x/-0|DX.9Viy6lYo$wzhOb(IHl<n}3=<cpP#0ZLG)s/<R<|Z/R@*??' );
define( 'SECURE_AUTH_KEY',  'O/wyLQm^`~f721CTtxRm1nWe/y2fjhO(A<C]GPtF$9x3p9fsYOa}*_6&*xwPHKlF' );
define( 'LOGGED_IN_KEY',    'H7A?lO2*{m#z*]mR].GR{2c/V@VE%t9Z(/j]v%eR[rxs(:ttAl^Z8KMj .d;l@ 2' );
define( 'NONCE_KEY',        '0ghH`4c!!Rm$rHdhc[3Z,~1c9DjewfX -PTL9s_JvkTAP5u=jp3g{TOi,`WeKl7Z' );
define( 'AUTH_SALT',        'xe#d^W@HjzK]%o`+[)3I&?,%R*};<QwRkug]aAp?lI+&`Ea?d*!f2T3 I0{)c^7w' );
define( 'SECURE_AUTH_SALT', '_)ofz7r|`wSHlI$Y[OkJ.gBaWo(%!7O7uOnG!#F)[Yi,igF*O.iNV2YA4S Zn~Va' );
define( 'LOGGED_IN_SALT',   ']-Rn78jvbL*qmd+lgq3B&cKdui#YP*gVOye]XCbC~jJ~{jBh^D~tQX._6p!m.j5S' );
define( 'NONCE_SALT',       '3BCop9:Er?q?YWp32Z>rPkixzLOD|oS A+]W,=^c/(>S1*,nAF~}E&)m?/0N?8xO' );

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
