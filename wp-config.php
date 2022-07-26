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
define( 'DB_NAME', 'senior.bts' );

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
define( 'AUTH_KEY',         'r9_{eXn&(KK7g<jb`?~IFn[RQI^dY^M?0a<Lw+/6!EedecaoRFPf9&aJx-`,b]H9' );
define( 'SECURE_AUTH_KEY',  '[}4Ja_nVeV/w`XOu(Q!~jS/V +?Z+zWu,Esn%m!(/DI+kD|be0P}+0U)IsP5M/{d' );
define( 'LOGGED_IN_KEY',    ',t;{k7kNC|5V%O1Xh_o2utb^uwz^dd(6x^}SpP*;|CarXWf2,/2]>[m9~,)22*&4' );
define( 'NONCE_KEY',        '8y4<?Ua>&VB&DZp,i1rIVfR%&&`6dA34:OC>O?*RT<hE!:yuK^Z*3%xV4h>I+q`n' );
define( 'AUTH_SALT',        '|R6{#^EmMClQO#($0vCgFp/mfX{*1[h0jL_r2]]))O/q}`@puh^oQKdmHa|AQ=i|' );
define( 'SECURE_AUTH_SALT', 'HNi#va(G#.,5o?/3:FwP]mqrOBP6p|/aDfNz(Lod,s(:b=#M6EX7If5>F:pMY^@T' );
define( 'LOGGED_IN_SALT',   'v$wlU-{+pNf3YLdin&?2X_.Hn+ytL7,6U|1fb+/s9}8U:_CE40qyAmsAXm#ye}^{' );
define( 'NONCE_SALT',       ')p6l#O,x$!or08tWU^FgUp{OCnD-?sm%tDK8Q,`dk@wOJu/&/=PqoqL9?^bfCqf*' );

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
