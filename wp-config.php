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
define( 'DB_NAME', 'travel.hollidays' );

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
define( 'AUTH_KEY',         '{kVQ!X>dXXQ=BiWRBAV0il:|=$Y6$:!.VSq6Vb$?+e0FRvv(iPkKvQKgW P~8!kg' );
define( 'SECURE_AUTH_KEY',  '0eh1y}<(~38@`q .*F<2#2%IY(AqRd8]9r{;62MPsLAgx0S7!X;.y{!>lexbllY ' );
define( 'LOGGED_IN_KEY',    'I*b%Wo fig%ZUxrL5o?M$*Xr6ge?6%_1UQ.-VbI+ %z {V#=<T{<~jD*Ij>MDkdn' );
define( 'NONCE_KEY',        'L#}IGI.9kSLSBn1pG(dezdhmEC<LwhipVZ>P5iz,O2G K8l^8g])2sNhKwz6H.wc' );
define( 'AUTH_SALT',        ',e*|:_iC81xE[ODH=,7uqr]`bS-C#RU2&OHo<x1Y1U[s|E$#vy{4d&87^_n/=.Z$' );
define( 'SECURE_AUTH_SALT', '~,q@K)uUdK`2yL)KP)7l1[Byt:1817hM#<CzI!,Nn~|(;q,.@o|`^2Pw~FH%./-k' );
define( 'LOGGED_IN_SALT',   'PA^_BGsv>C)ipLE`dR6):hgN:w{IIY9-J@{|K@MTvnSp*se5QXj1XT>`mE3@6Qww' );
define( 'NONCE_SALT',       ') >Sl=|aX[fri4(.YrDcM7Hc9Id3yElcksk/SV[&K8UpWl4i~E=vlh2B0^[`lOih' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'th_';

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
