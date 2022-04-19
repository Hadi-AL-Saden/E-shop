<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'shop' );

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
define( 'AUTH_KEY',         'K.S=a8w{wC%>](,@u]HXM[?{J%h<+;ykAHf}Ofsf_] `j7YXtl3<`@BpCu9bcZ2M' );
define( 'SECURE_AUTH_KEY',  '7~5%~`jLm02i[4!*{j3`n7oRo0ef>a//07m;h!K0u]cXDZ~kZI%:C15!daSoQ&J?' );
define( 'LOGGED_IN_KEY',    'PupO.g?Lu-oSC`)ng|Yv+g!7hqPrmV)~0VhZd3l|inYG$;5$;v^Fj_{GY:6O-n)0' );
define( 'NONCE_KEY',        '}PwyIFD8@wI-t?h@{0{R*L]6wR.)qL_muVVjCz:tc+x+]Aou+o>2X3}z4ssU{zZ`' );
define( 'AUTH_SALT',        'h2E,Jl]&/Wef<goq~|,/gj-<_6E3Q^8qAQqSDUqq`V71F*nUgxrTIS<DMWrr`k/0' );
define( 'SECURE_AUTH_SALT', 'TWUYvySCMN#rTjH68J;$}ua:.nmdN:r X<5E.?m8`K0 GPc>x(e|Hf`0?Q3_<d+w' );
define( 'LOGGED_IN_SALT',   'M#,}<zj1NLBC_*G#XDu)-yv#:q??xH.7MBZMEry?(e_+weVE1%Jc/%,rQm;[_]w<' );
define( 'NONCE_SALT',       'MufPcB1ZVd)DCwp8Y<yK^k]q@)ig3_ye-Z%e%XEdt`Vy-EhlmzU^E;L2VC|g5Z3W' );

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
