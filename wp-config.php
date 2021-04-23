<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'db_marketplace' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C=1BZ.FiZp#.Bm#PqQBt<[.d5,)f0Ogm>93$iUOCWw7r*Opt=%%bNI;96p_#S<|W' );
define( 'SECURE_AUTH_KEY',  'EKaW2^6X~Cf!=TQ&]qW 22M%1(gU,uL{4nvXy^KP*!H@StLWo4:c_r(f@9>~?qVQ' );
define( 'LOGGED_IN_KEY',    '.Fy~c)j`eV>RuL x ;Zt*.7h?d@*3qBR19>JKp!?a/MvX-ey c)+.N19JeOG0I_X' );
define( 'NONCE_KEY',        'yaWDHmKrv.|lDp|Bp(LS<I`Nd0OT,0%rhpAuqzPWGOgEIAC^lU*5d{zozp3Vu/1{' );
define( 'AUTH_SALT',        'qqVi_^_:^^#/0vM[1%)X],Vd[E0P52EKqyF]. g{x_%;L;%x Gyvcdft-H&RPGXp' );
define( 'SECURE_AUTH_SALT', '$`yr]Cb<WmJMpl^NY6T7>]v!2mI2*u)/GQ3u62}aN/v4h)L+z%kE[^gVPdG=q/Fk' );
define( 'LOGGED_IN_SALT',   'wwrm1O+%|i$82x3g9!ir.D_2<[enqFXjjc^9@wj_91W.Q<|VODlIJ<R)d19X0}t[' );
define( 'NONCE_SALT',       'FTP+5n{ZzAZn=A.t:Ah9tMgb%e)#NxaafwTgLG!f;{:^(*(,.)<mveV@$X+8%-Ok' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
