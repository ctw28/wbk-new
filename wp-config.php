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
define( 'DB_NAME', 'wbk_wbbm' );

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
define( 'AUTH_KEY',         '0_8>g?|C1?DA(4pr]1&L%6/?/Y?h7{p,=0pBD0QxbPLEn%jYLNb;Su6npOR!Z[gk' );
define( 'SECURE_AUTH_KEY',  'N41XJ/_<j1-D$?H;w_R,$pF$;.7uejaL+~{kX(RkK|2UAoRDseC`[FlnaL ..gD#' );
define( 'LOGGED_IN_KEY',    'aT8Ir=B8OdeA%(bd5.oC_yt%&V%eqAA2gK-V*H,%[VfLm0#`xg+EX5 ^BD*]hjVc' );
define( 'NONCE_KEY',        '3mq$oC<pa6v((M$SKQr&)-k>)Tr7auGILK5]UPg(9949+p0:1/ eoc]3anz`**e5' );
define( 'AUTH_SALT',        '5~@Oi7Y-6{1ffSxg/e14$h!K|:uRV`lw3I53|IHcS=^N~Jo$#h>l^,5i%6{K.ssb' );
define( 'SECURE_AUTH_SALT', '}Rx-W*6s,vU.B0|8U!>c^=>a%flO_~DQHRq]~6WCu]KCE)Nl`FjJ?*%D6J(tUVF&' );
define( 'LOGGED_IN_SALT',   'tob5YqQpGE(3_TUuCD^R2CeFS=r-Xp^pY@Xz-<!P^ Gf>W18Ej=@kC)?l^+HO!l[' );
define( 'NONCE_SALT',       'P3NQpmH+`jnp5_1CU=1rF_-I9V a?Klu#VFBUsKi$a(tt5y#yVJ.vR%?KK,()Kjf' );

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
