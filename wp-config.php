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
define( 'DB_NAME', 'coastdemo' );

/** MySQL database username */
define( 'DB_USER', 'coastdemouser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'coastdemopass' );

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
define( 'AUTH_KEY',         '?3+(8_R ap]QF7Qz%_5_p]~T{J.dI491oit3KsG/6SlU@aegQA*T}^G.f_`kef|2' );
define( 'SECURE_AUTH_KEY',  't/alL#+`A]v=K%tt+u**56.AQp8pYmw`![Ax/tU;{.BmMg}N5fRkL%(MmY1eUHOF' );
define( 'LOGGED_IN_KEY',    'T@xmOWVe_>sQ;e/t7uLnv5>v]6|Dxdxs:?8WS3K%94NhtA|BN`pO/&)eP^=n^:iB' );
define( 'NONCE_KEY',        'a%tm`iA3xc oGPg[h5yhjnvZ6hlyU2Fi+<x9bVNy+ozQ0U@IX8]GYoptwrwlaBU9' );
define( 'AUTH_SALT',        'JhF?GDvUn5yE<k]yBre:L& `yh+~!Q/Ko=8O*O<R3V^Wyyo}iW7I-5@Nfzs78YZB' );
define( 'SECURE_AUTH_SALT', 'f)fE2QNw~Ocde*/vlw(fjvraFxB^Y)aAB&rH%jZXW[#1AF[KHyxsejyL|?RUylPR' );
define( 'LOGGED_IN_SALT',   'NzvL|dBEsO?pe3A7wAgye41C?atErLc`)0Sk;ON8vl*#zi:M{?]IKDiZ<3-<yA=*' );
define( 'NONCE_SALT',       '{W[)Ca2m%nSQl<P:^Oo(E1S<]3sH2%M jc6N3|x9U(lAnIbYvf[Jr&>-8#X)>@*|' );

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
