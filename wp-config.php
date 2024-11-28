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
define( 'DB_NAME', 'wordpressB' );

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
define( 'AUTH_KEY',         'lK}*qD[j/Bkg8[oX,N6,NU|g)c1;Si$jZVmbuK#oxEoGSmq%F8*Yeh3rx(1 tW;h' );
define( 'SECURE_AUTH_KEY',  '$Vp*1Q0VlYg}hF&u$G4-RYDEUshr/Qg<wVvG&;!<=0SWWZjA[-Vu+gmbM)zW[xy$' );
define( 'LOGGED_IN_KEY',    'j*n=r)>zJ3C@_)O17L4CF$:ctm=ZV{uXEd63/?o%;*C Z)}D1W*|hL*v%aL=X!5I' );
define( 'NONCE_KEY',        '-Im(E?h ]@D7_v|Xh|ylZ|g3Y/LsT6p7lxTl4w{n<$Ml>}[h9&KT]o4;5v.b>H`<' );
define( 'AUTH_SALT',        'au q!hpu7:OVTS/hjx34R+<2%v;3B;_cXPgTw@NV~d:glT.yPjGD<.f@cN>M8w]n' );
define( 'SECURE_AUTH_SALT', '%#1^-KO=Vflyhs;A$V@Q4FlxhS~J;ENU=$C|}Y)4]zCQOf%b!ga:Df5JiOG{K?+F' );
define( 'LOGGED_IN_SALT',   'nYj|RB6PR=?S=slpIK`l3Lm:v=@_:g{rNb`f0}H(PCEPz+~>Qm*xwU_:Iw<5dgcg' );
define( 'NONCE_SALT',       'i_=~NA?`b~xv@7c;(#>=,8keK;8L[t?:tl9l)f!aow.{Sjl7a[Kx3c`6%8b)A Gt' );

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
