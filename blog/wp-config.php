<?php
//Begin Really Simple Security key
define('RSSSL_KEY', 'iZpdSOY97pa6Fs9Tkc1PfDhtllaZiUekrAL3D317O5Q7RV9LP6cDEt7lGSSninI2');
//END Really Simple Security key
define('WP_CACHE', true); // Added by SpeedyCache

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
define( 'DB_NAME', 'geofis90_wp854' );

/** Database username */
define( 'DB_USER', 'geofis90_wp854' );

/** Database password */
define( 'DB_PASSWORD', 'P6jp5)25S)' );

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
define( 'AUTH_KEY',         '7mik3nsa9yjjsqeraizpdygtfsdu6k2upojv4hhfa3fu23srhdf1weoui4mhguis' );
define( 'SECURE_AUTH_KEY',  '9kwxefmdtfkzsewwruo1gplxkfull4sslnryowaofqcsgt8qqtpqdfniu04cgdmo' );
define( 'LOGGED_IN_KEY',    'ygfdjjkykmngui9lcgblk6u1bvpyxiqpvwdeq6vaqq7ziijpytxkonxioscrwe0x' );
define( 'NONCE_KEY',        'w6jfgfuyv34bxsnjd40t0lob3kemotsqmjij2fvgs57kzpioxwmamiyvgapoklpy' );
define( 'AUTH_SALT',        'cmyxywenk3p1bex9mmwxpd9r7rsxi6zjjyw7tkd3nyk1os7twu5tz6iqerh4g8wk' );
define( 'SECURE_AUTH_SALT', 'mjfvgqrubyu4bvduvlu78oz1stfdtq0i43tis2ttwrsishiqi0lauyugsoy8y0u0' );
define( 'LOGGED_IN_SALT',   'cjkvj0lwy4pr8pl09fo84so98kn3lqndve0lya4tyikqlx3ehfmikgbhrim5mprc' );
define( 'NONCE_SALT',       'lmzbtidbkusp4mgk1et4xehecd3iziitkwczhaoprwimg90c2161htkem0f6cawc' );

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
$table_prefix = 'wplm_';

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
