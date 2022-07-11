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
define( 'DB_NAME', 'junkodanang' );

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
define( 'AUTH_KEY',         'H#cI?:L/rOK(<%s$Oz7.-RBjNDh2)vt#EfL.Sd!y)?a,Y#jD6.41r88cu[UImnSZ' );
define( 'SECURE_AUTH_KEY',  'yfKAd6?^oqY99cWGQ/dylgk[lB0/CDa(g2nT++rE}xmzb^$d3z_hwPO9?m,#p[z*' );
define( 'LOGGED_IN_KEY',    'o-;n6<035G7cqha:A%]37n7]0?b1yCW/ehz86$3ippr4@)Qx%=7vEQ5=q5kXXA8o' );
define( 'NONCE_KEY',        'kDsczCIl7C{&3C%gPr|7d[tV{,EJb#H~=Y({|y(#^m=[H`)rw~k-o6]GO9?6(oJu' );
define( 'AUTH_SALT',        '.PEe}aFe6tvVel_s-?f%=J6zOcp`#hlDm}E@?YQ543XaLh{YLEMGW48~FbN 7AYk' );
define( 'SECURE_AUTH_SALT', 'Z1t;sn5rX72vY3*i8b*qF _8@ `H}b`PTa v`V/+$Gg?35=:WjW/w0N<Tk+TuY#M' );
define( 'LOGGED_IN_SALT',   'nD>MeP`RUs400qponuL#~:_oFtgB*%fAbL<d8nL`UdrIUnC32bQsf bFequF!3<*' );
define( 'NONCE_SALT',       'pjs&VV>PZg?:[?%$#tL]16B._l.ped~@3JE!4K^jrnUybZ4dIT1-nn4l?I*GQodh' );

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