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
define( 'DB_NAME', 'cms2024' );

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
define( 'AUTH_KEY',         ' tu7NdDT{B2|$gyZ@D^NK>hO/&zHr6Hv2x|h3Ke~Q#l55{_BQnV n?W<e5{:f~i.' );
define( 'SECURE_AUTH_KEY',  'y+.5Z_.83/oqkGWyfSvl7g_=+9x$5;w[JDA_1O?7dpBoWZ<pQ7AJK;V(<a! q(vn' );
define( 'LOGGED_IN_KEY',    'QgKagVG /~[Fb/|tu=KQula8-[sU?&cE.U,yV HiN`OMY)2677:}YQ0Pc}-q?W/)' );
define( 'NONCE_KEY',        '8YW@j?m}&,#bf_:v#(ar6q_, ZZ-@4A8JLD/Otm@*xS^Uw1-I70ZYdP)zgu8wKTi' );
define( 'AUTH_SALT',        'gDM&1F=!4)eGOBFKU0*|ETJl~3WeKabC1 W+*b[rXj+{-oMa{A.~VPp6hC[XBi.#' );
define( 'SECURE_AUTH_SALT', '$=^Zau;P!24oT2Na23*1V!i[@qip{M%drw3~rz5iinp$v|O]$n>S:;gnzlktUm~k' );
define( 'LOGGED_IN_SALT',   'z,;.vg&&SYQMF]59/:l+c7jJ}#rXa^-~5 JZ?kj4apF<o&u>=/l=oRjF],vn_MJX' );
define( 'NONCE_SALT',       'LUKxSe 2>P]X7caI6(AsKA,!&~_zC=H=KH@YI~o>b]X5/^Nni@q.!sc$y]#ZDA)@' );

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
