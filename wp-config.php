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
define( 'DB_NAME', 'rht_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'P(,Vu6;L)F:QRy+cINO9itzW_m.b?NrY0)A-0CPCr+@$s$(9hKaaOdw$KEKJKYTG' );
define( 'SECURE_AUTH_KEY',  'mBG_5L3z2$<Hy7XroK?eyBCC=[Po7X_,kk6fs9_5tizG)JLv*p5=M~N$^JCWeUI@' );
define( 'LOGGED_IN_KEY',    'rgJf9+oP4>[iF=j{-D1uh%A4=G -8u$T2Wc4;9gD_g8(TMeSY|taq]RH6k^O{Vq<' );
define( 'NONCE_KEY',        'm}e4y0IN,Hf/$(vMNKdw0pl}aLDsa>c5C@@<nZNUglKNsDD{L(a+IOh]xptd7Y{y' );
define( 'AUTH_SALT',        '?[Yw7jXeLf1[MYUliOOtn[]Eje@<+n?0_`(l-VSeVxlWV!Ikaij+ar2_,ni-/P6x' );
define( 'SECURE_AUTH_SALT', '%MF]B6dZkk>kRxt&fD@^=AQBxgNT5:q@GjnWv=+Dpk8-,,~%k_5h&Z+>Mf#r4JT$' );
define( 'LOGGED_IN_SALT',   'nH4*LZZjh;]=-yXdj#DtE7*kVYz(9eop!I6g_qP&Gk2wKO%v!/tp9W&;C ];;P_?' );
define( 'NONCE_SALT',       '7`#q`1+LTz%28fU7la)t5msDB@gO%o%9IO92_EU5kSi5rD2hVP=P1sf^VvOke,go' );

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
