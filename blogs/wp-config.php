<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u681665661_mahimadev' );

/** Database username */
define( 'DB_USER', 'u681665661_mahimadev' );

/** Database password */
define( 'DB_PASSWORD', 'EQdTMycC/1u' );

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
define( 'AUTH_KEY',         'O?Q]vk@`N1Bz9+h1!7=C+-i4`N[)<2G/##MC_UbYT&F}3Opfd~U=].PQN4|Lz5I1' );
define( 'SECURE_AUTH_KEY',  '/CB=y@P,H!a8mxS)k[)d.U#h)TEsL7CrZE%:CSr|8TSuJuwU&ib[?:pySB.I)vbQ' );
define( 'LOGGED_IN_KEY',    'h}uO+5TYi=;H+`Ia:<d7~kdGF,vpZIZ=-S_#DV}s<iok1BlRd:4uIFW;0Feaj&d0' );
define( 'NONCE_KEY',        '{6MeXR|lj]0&M[3M1}>rwVtD.R`;X|!yOxH07)+}iZ?A7:pSf1E<ga3g:>^hL{!r' );
define( 'AUTH_SALT',        'I@~$~~:I8J~u73p?-tw5;GRn$-K124eo0VQl(C=WZ92iVG^c-T+[|vs!cp5VPun/' );
define( 'SECURE_AUTH_SALT', 'EZ/,~*?,BW6~&x|IH&=^XQZf02Db+(NcT!&r1ysM,(P&=h)#lQvy|f6A}u;K7W[D' );
define( 'LOGGED_IN_SALT',   'O5b}Xa5xZ8LWYxE7ABE@J~UyNN9A8:8pmdA*}7mSzB6H|7bx$]h)p<0>.MK$]o^9' );
define( 'NONCE_SALT',       'h6HfyaLftjCvOKS,qT9SbXCtC`}n!16SH|YhnB,QWdr)@tU2 (`oYUJL3iNMEK[%' );

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
