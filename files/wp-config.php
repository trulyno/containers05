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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '/K&w90e5lY1JlPvj:F4P_J:tP_^5s5ML7mRmcBSH`EGD_D]~`:.Iw&$(]vDaWSdC' );
define( 'SECURE_AUTH_KEY',  'YpPLtI?=wu~3I9o-fU`&o%ndYf}piX:5#p!p I7A^mPjs]v9ZIoJX`;/RM3R`5^v' );
define( 'LOGGED_IN_KEY',    'l%PRW4Qgvr[N+r|a MBxl2VrbMlaCypRmxZMWG 2&#-dICR(HVvKfkia6BU-ARM}' );
define( 'NONCE_KEY',        'JU$WlR: *,1E3)R =N_9drost[ fx;M=mG]%;J.lepNB0_:}T)$j^eIpd;/rywcJ' );
define( 'AUTH_SALT',        'cwMit/ulm,@nt>9!Eivxj_W&S?Z[<X?/JB{4ChxuI+|we{$6G_D$y.(mPz[Nu4IM' );
define( 'SECURE_AUTH_SALT', 's314:DoGZPofeM[Y-pN8|F8ev^6vk2zc%8Vo=H>2.?j&_>a@:Zu2GhQFjr|zC^4+' );
define( 'LOGGED_IN_SALT',   'k<A#JXcG18UpFPzfY02+9bc~R|3FKC~<C|3r{]wDkRnH3[at,`Pjl%]+61rj:E,E' );
define( 'NONCE_SALT',       '*5!*@y9Ap#RPuJ!L KiF5Q4Oq:k)K-%@Kp` bpnrM1zh43eT9! I(jU!}pX8#/J9' );

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
