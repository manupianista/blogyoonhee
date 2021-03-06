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
define( 'DB_HOST', '25.70.240.10' );

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
define( 'AUTH_KEY',         '&EJh;%?e&+ty.7K5];Z]Kb/x5(Sv@;o@=7NnR:e5~>5/? wDCLYgHyf.?njynM^G' );
define( 'SECURE_AUTH_KEY',  'cX!7d8/6oWTeVRf@9]]_dY8a9P,kqiK+6?7OT_=DSrCZrDF6D(]dUjTH`Q$_6.>t' );
define( 'LOGGED_IN_KEY',    '#Sd7<c&020Zx|U/v1e1{5Mr9=9?4cG= -MqS_wrmBrYl&Lgo^Z^*W_Fz)`jvaF~f' );
define( 'NONCE_KEY',        'M6gif`.a2>HV`PC.5<Lh/xwNU0(#-?<7k~pa77~G&B$%5{0=YJOK<uT[6h`~8Hvo' );
define( 'AUTH_SALT',        'PBVDaej9PwN<QR4mq?c&$Jv<CtWU!RzajPi$fL7bWPa;Z>yq]cI!^ JeYF(&+L!N' );
define( 'SECURE_AUTH_SALT', '-fc,hqAw%GY]v+3efoBRJJfu$Pu+C^J@ssU9NzLLVL5H1wBHYGj5aU7mRDvCk)0D' );
define( 'LOGGED_IN_SALT',   '/,[=xWgh.Cm;;UW(pXEFd[P`@|})55ym+Mx;X6d_qQy*A.t`-7l<@K:p,CC7/[[P' );
define( 'NONCE_SALT',       '.!I4z>N*Cq<zmwz|.%(p2u;_j}q6]>(mlR/Xkz+,xM4J8|]~F89D<kio$G&{.V-r' );

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
