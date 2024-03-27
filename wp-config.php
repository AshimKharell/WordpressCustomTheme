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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Divi' );

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
define( 'AUTH_KEY',         'O>1sCVF3!gwUH!.#t-2mq+U<ryT^U*L]$^bMzxiMc<Lpva@c!HJ.XeCl-krH1K:W' );
define( 'SECURE_AUTH_KEY',  '(Q`1=G#BTN-a?<j@>i0X1]~Ho-bMg8 Na1$omi3h},{tdMWnt8tjCy8XAas1IcG=' );
define( 'LOGGED_IN_KEY',    'eu2C@*l!(KHGEz+]D]8uy>YC4UG`q%}yUCx#*fZJ7~62TCJEWov0:_tEj5U<yXy@' );
define( 'NONCE_KEY',        '|S=.<t#t9)w%<.y(>-u#(~.+LL|qbXf1gl=*W-J/dv%Qz-S :|h3^/j~5IOJR5ch' );
define( 'AUTH_SALT',        'fMGay@k#dBHEnmne.jvc-LTHY 2-Gnh80Nhn>Lf@S[1 Vu1]G|Q.M=|kD^C_]NP=' );
define( 'SECURE_AUTH_SALT', 'bFFv8r G>OurK%N.1q~RVv[tonszrw.EWP{]..M]qsv/3kc2g^m(U^^u0u]1HYZs' );
define( 'LOGGED_IN_SALT',   'JT1-C=EM~E$PndUiK=i`U^0|UaY_%U2Szgn;FWt-|Mjo#tGM!~(D8KYTAm&Z|0V~' );
define( 'NONCE_SALT',       'G+~s*@f%r(cSVT1l{z(0#5i<T %B(1;<rI^)eK-Xk[E^cL1tnOG;^3W_ZJ`bCM^H' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

