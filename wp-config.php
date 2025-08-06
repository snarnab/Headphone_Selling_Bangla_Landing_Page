<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'RCInventory' );

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
define( 'AUTH_KEY',         '=/<3!#tQ.]9--?tTHP,ZIPZw:b`LyDx<LlU$7&cU.;sU<hVWBf3n>A})J6S5S$}$' );
define( 'SECURE_AUTH_KEY',  '4DwVsaV?y(-^ClZL`~B:v3 CTn?Tg,?E=^xJA[ln|M5(|F<BgZ!MAtz>S+=#(Om=' );
define( 'LOGGED_IN_KEY',    'w}DG_iG&O*+m#OoZ;>(9L6@H FDaep-,e^bZi.r%M*B#L7Sn!_quFnZ)u)u?fZaZ' );
define( 'NONCE_KEY',        '2;u~L/jnR7.S:`3c]EGk&QV@<KP;0>[U 765<z7( 0!]fT=9wSS-<RV/qD<-;>Wo' );
define( 'AUTH_SALT',        'X9w(:5(J&Wo3].&}G+QlCBhA];L%]%4Am>Mj:zHDRQ.jz$iU5+CQ=ilTX2(3!P%g' );
define( 'SECURE_AUTH_SALT', '>R(+s*k?>ypjL>7#X>]MIL=EN}q&)~Bg|Wt T{sCR}FA1 ;&elE(4 &y2I]Ynb5I' );
define( 'LOGGED_IN_SALT',   'e3ocrR]FVh5T(fZPujEs^xiCJ2nmRUhS~12|[RM5s:Pu~w,9`rj#=]-OZyoz5/fT' );
define( 'NONCE_SALT',       'Qj&3QlYl{MFOL}#FMY{$(QrQ6N7hU5pH0D~2W>4ajek*uEu}hG][ChlB0c32LX_z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
