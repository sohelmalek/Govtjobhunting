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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Govtjobhunting' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'M|`0J7b$gkAkX<dl.hF6?$,.7qoCdt?(;_s7yX-h}pn/NY,Fdq&[]@:sb.wrEYX=' );
define( 'SECURE_AUTH_KEY',  ' IgNT*m^o.$^GPzunJfd_$<Qng{YKz 1R6*T&gDK0=0*[9q)|yu;G6QF!!=^bR,#' );
define( 'LOGGED_IN_KEY',    'V~j4]ve/hP%9OF;=`wPlU$YXV7qkjJqJkG@_y?^;vzs/#NMtnl}izq7f6D=!>ce+' );
define( 'NONCE_KEY',        '3 @coD)joy?D(hJEv`mCnK~XIR@gEJ}Sbp$sFH`K{cN_]/iQlWc>h#sN_60S,CE$' );
define( 'AUTH_SALT',        'Ib{RSP-;aT2t&7[jZismNR>])Vzth3jIqEB2#8Ag2G;w2J*G aH={O]RyoBk?5t[' );
define( 'SECURE_AUTH_SALT', 't#$SLwps8$>y<dp7TsbOm;tn[T$V?1dRa<+/~`B:*=<r8(P i-`>}f}(9{Yvc92(' );
define( 'LOGGED_IN_SALT',   '.F=yOm/Y<w.<;GYJjH8r#d7cK~ oKryz)uzRj T@(s&r%w.BVa;t-!&@@HntXgmv' );
define( 'NONCE_SALT',       '8QKET3@@lTV}mv9,rlx]b^TM&]3QiDR8c=)9u?Y:s/Gb|[?c4jFPJL0S]biPhIyU' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
