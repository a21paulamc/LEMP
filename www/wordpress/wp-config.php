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
define( 'DB_NAME', 'presta' );

/** Database username */
define( 'DB_USER', 'prestauser' );

/** Database password */
define( 'DB_PASSWORD', 'prestapw' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'vxR0wW,o[es25A]OP3]+*P-r]^*ZoN#,Qpy}cn^:&$_Vd%[l4r7:vC4*$NC3=tl:' );
define( 'SECURE_AUTH_KEY',  '.HUx@)O,D_:I0o(IE^-V?< !fb|x#&yu|_]Ip}#|LcmTP>p>sxijnX_m&; j-+Ti' );
define( 'LOGGED_IN_KEY',    '~Au&mq/0dgV&8j(T[y5+>YPGOw>MASi}N>V%mFPOE.reC#@)$v>Ip(qscJ^9ua`9' );
define( 'NONCE_KEY',        'U44>tX)ips?)Cy5Fk~XQzafAIvQkx5RBZekFC0jxg1C2PVzIpxtJ$E<x=}0G.Ns:' );
define( 'AUTH_SALT',        'alr8-))]=TT]Xi]ulVb*RQ[9A0#h5K,IJUiY3s&]7{nkZpR8!8[h(-m ^D@IPE;.' );
define( 'SECURE_AUTH_SALT', '=%(X5Z:3ntqfWEO-]cd%!m+;$1SF>g+r?0(WOhz{,@=gDjAzzUz8_E`bfww^p*(P' );
define( 'LOGGED_IN_SALT',   '0gJH!(Il0c/Tph#XbkkxhDvhsf~%B`SkCFc*UP]Q1#oFXN#@7R_nLkJWvnM2O=ar' );
define( 'NONCE_SALT',       'oEO-@WGl }MY;D7>}uqp.7(VCRw>N~VQm49.H9(WZAS-sr?A=~BI$]YAsaM1XdxZ' );

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
