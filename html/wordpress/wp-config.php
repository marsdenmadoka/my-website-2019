<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'madoka' );

/** MySQL database password */
define( 'DB_PASSWORD', 'madoka98' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}g;*.FJa7Hi7%GgCjkfaoeteq`0{s5{PQI8s5u?F8*CnK9pe%qYcZap@[w)RXg(G' );
define( 'SECURE_AUTH_KEY',  '`aQIDLoC3 A{Z4ZKY;TwZ[Y}L)Ua(WKP GIsH|cOhVd{YBHt60Z#.tL1:74ldGRn' );
define( 'LOGGED_IN_KEY',    '6<G62:Y?<IJ(Y*pknnUZh*E%5}?^jE5~Ojs?&>*u{jbJuB`Q`M=CI3s(xWJCB`W)' );
define( 'NONCE_KEY',        ',o@(N%oh6n!!U8Oz|u4l}/oZj|?%UGUBV-`pl,n}H_1*..j:_QEnyKW~$qUPc 7&' );
define( 'AUTH_SALT',        'BZd*c&W.eXouK#`xxX9do?v1Jg9As9d%tJ$,}z~yT!-BE$JBkA8)VH3T fljhu(S' );
define( 'SECURE_AUTH_SALT', 'F3>c~eB([S^s>6lH^K_3l(O/?to-|Qn9Nt]<33Pm{>>/l5V3Km%n{Uj!55IRYGQ{' );
define( 'LOGGED_IN_SALT',   'g9C.DzXfh1/I}E)LW1rB>]iprE9<(X. DI8yMg+K(V-^[xBs[7S-|-W~wAq=XL-X' );
define( 'NONCE_SALT',       '_Y{e{CCU]%B.nM[uD$K`.A7H3i8Puc(3XhV]0/nQeOq}V*p[{ZTak:.z^k_7.atu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
