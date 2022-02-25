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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'University' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'A~NztFWH=mt8vD>,>|m5WO]]%`]_7@Mft$*`0,,z(H8i`DXROHGdK~#H*Wi!SLVS' );
define( 'SECURE_AUTH_KEY',  '$Z_J|C?dB3-X$ZzH ?!)#6DKdi?9l-88-Qxh?arzsBDZ+@PRaksbETS#i4Vse+1E' );
define( 'LOGGED_IN_KEY',    'cs~H)9X9#O<n9;3o!ky^D]}gN57k4*1KS?RA-Y8 fu)Q:s|n!#xlU8(9Z4$a9NVK' );
define( 'NONCE_KEY',        'f$YlbNfj84/x1ima9fr!ZH(?)zEZ!{AD<ja!U$%UGw7n:{0Wu8KYu>Q6OnX2z2aU' );
define( 'AUTH_SALT',        '0X%Ro; s@tD^j7Xwnwv*YdQeOgEE{f=9@qd*x&b1c~V@<%^T6$L4-HSty%!^`Ptp' );
define( 'SECURE_AUTH_SALT', 'vaySKhyHI7qt,fI<tNl3IIaN6$d{$[`Iqw/.Zvfz;?Rz.ltky+E*B]+lg$NjwUJ^' );
define( 'LOGGED_IN_SALT',   '6Iooy+nni4w7_o>{n{$|jb`T2evw44^>S.vQqAlw2e`=uew],ao?wR$l{O-ItGXf' );
define( 'NONCE_SALT',       'C=8Jfc.I=|Yc+0zDr8cM_:12RBY8($&X`+Lee5re{C=%Qe2DJ6dh;MspJ`xBd#B>' );

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
