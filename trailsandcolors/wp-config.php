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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Increasing the memory on 06-Apr-2024 by Rajib */
/** define( 'WP_MAX_MEMORY_LIMIT' , '512M' );*/

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
define( 'AUTH_KEY',          '|k(VunXL[Q829~%f>)*9R|J9EYBZM=ZgtHVa-dKr|ZB0~# l4taLi:B2;q1>jo.A' );
define( 'SECURE_AUTH_KEY',   'SajoxEE_[-AY%OZ=rN@d{ XmxCHH9:=c6T?&lUL{F<8J)M7{qg./wF!~%=9Nq*`m' );
define( 'LOGGED_IN_KEY',     'A`D R<;J {P,76L9Zwj|2%__f`gO&|(U@;W[~(+qooK%[35&iW/$4~sG>w2pdk=[' );
define( 'NONCE_KEY',         'V34*EvTkYv tU74q$T*q|(i*yXQ=67gHFhh#&0B2*}v-,v-W1M@#MQz16c/5o)R{' );
define( 'AUTH_SALT',         'ft4{Mw,I4gSA;;0F9g4V>~OtdJ479w-0??X$P,_]d.abUTV2MJm1*.5l7J6=w=i)' );
define( 'SECURE_AUTH_SALT',  'FWYX{tlWrR4kNvR9~ltN ~Wu^/R]Wk!EZvzo6#hO7q_m&<o-(P+w]p_VQspR}Rvn' );
define( 'LOGGED_IN_SALT',    '541ec.Qky;*KLQwj<?6mmfyZ%abZf9$~SIUj6WgvqQgr{BS7q6xW _*w8Adp8QOl' );
define( 'NONCE_SALT',        'ff _z)W_v&t#d!4IF;R@R}x2R3!v30xrBj2NeM^xEL(s0B|XnG58AoH},-fE0/]|' );
define( 'WP_CACHE_KEY_SALT', 'ADD$?SN-_R DeuQz7(O=ewhYb<bZxN<&Pf%jI3`AL*i[@<|D%[R[+(v!RNz4QSH_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/** Increasing the memory on 06-Apr-2024 by Rajib */
define( 'WP_MAX_MEMORY_LIMIT' , '2048M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
