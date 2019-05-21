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
define( 'DB_NAME', 'blogyoonhee' );

/** MySQL database username */
define( 'DB_USER', 'blogger' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ELblogger1234!' );

/** MySQL hostname */
define( 'DB_HOST', '25.74.104.162' );

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
define( 'AUTH_KEY',         '<{U?5>1qze^q{]HPhC] VaM*n&GR)b_phH&WQQHA4jCi>DU!Yc^mloN-,0K]Q[y!' );
define( 'SECURE_AUTH_KEY',  '`tJ K%=m!<Cx_7lJ3R[t@ShnxBh2aNru5rCHx]Nn[ApgKGE}9_1N6IZ!/_K=9!ZI' );
define( 'LOGGED_IN_KEY',    'uY[]ltkn}5!&:Y%QwUA:lILvd@#fYZ(a2%Gri1B)D}A9|V-31UBkxnsB1/wbj.#/' );
define( 'NONCE_KEY',        'Y5_EAa%f9U+`L5j2Z8fi:C,P6mG~a9SY:/*/|:t D.v:=h/c6pbU`:=I~KaMa]|3' );
define( 'AUTH_SALT',        'pY6heP)@{2)!/{s-zzo~GItqrU~3&{G:4w(_ v5I*5>$?Q3R6ihMS#gm)T#[4i+n' );
define( 'SECURE_AUTH_SALT', 'l&otobMg>]d]%~90OfN>iv$4DAw ANc*jT2phdgpW5k-6a&MnI=kp>NIb1>,rkKB' );
define( 'LOGGED_IN_SALT',   '^<3}QGazn!>7S}aZ<QiPR`/xj#+mOF7DtNUk*Y>&q<xbA]F+|Q5)V[-tfZ)LCbMb' );
define( 'NONCE_SALT',       '2n2{[1_V6/~%lR.azMe{l:.h;7=e.>8v|l_6[Dg$EJx4,~0:``c*ls#nWrdWw oB' );

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
