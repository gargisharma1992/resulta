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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_resulta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'BsD,7<m.Ay0h7`2ro.srEvmCpH~yIGWlrR7u]g,-Gx%x@A+kVmy:8o|?Ec5W.l)x' );
define( 'SECURE_AUTH_KEY',  'Dr2wdBA@1F3`pIy& M-3&o<^WlSa4#x=hZ,a<sSkUzrWCP_6-EA6Y-Oti#+}aL8#' );
define( 'LOGGED_IN_KEY',    'WUlK6g{xhc;hO4XYbt.nXIN72uBz,t@Is.$Ok,,kgpW/<xsv1]$6~r>[LgCAY- @' );
define( 'NONCE_KEY',        'i{#)Ui wP3$=}qxUbG]&1sK{[;vBo5HzMNmQfv(0u984LS_ }RcRO!)oKUE9 ^Es' );
define( 'AUTH_SALT',        '8APg[Ny^`ZF{M`9XOX(`DAvBej8gT#ZUH>rectT[T7ti cklH@1&~.z*9p-22az3' );
define( 'SECURE_AUTH_SALT', '_5/wsq~-J`Z|GzTsvhIGm5^!-1/7+oebhg/-z8*e=E_:v[#v}z%C!o:WreFB1WD|' );
define( 'LOGGED_IN_SALT',   '38+`DeXFV8hl;/7^{B,.2y=CvFNse!:iVi) uz2t?{ijZtQ0]7Z{CE$;S-3O?9|.' );
define( 'NONCE_SALT',       'z5R:<?E$2{P5QN+ozDMLq{E,~TS}^HJ@i]#f{Y!,vt7I$:KCE-E=EpX1m2#N^2ez' );

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
