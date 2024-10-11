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
define( 'DB_NAME', 'vanardan' );

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
define( 'AUTH_KEY',         '(eG!`RE(jZ`7FpvZVvU>)AFBZ1. rWnQ9{#}[Mb+XFbI)nLC()6x$m 2RW><M~]O' );
define( 'SECURE_AUTH_KEY',  '4J,,% PCCf`b4?fM }EFw;`Lvm9~>?J3$gy+@37,tGnAEhXvZBzoHgEEE5b^JdFy' );
define( 'LOGGED_IN_KEY',    '>!1fcD%:Ps{o$SMJoiaJ7U)v#@-[=D9c&CTsd-BcK~NiJd;h(]1M[deM*_ppVw]^' );
define( 'NONCE_KEY',        'pn@&Sdfb,!XZ`cZ-sgGC^,p?|hHwPO8To&:UUSR31}[u)X7/1.se(`~OT}UHb=m]' );
define( 'AUTH_SALT',        '2%A3#mkmh_,q&>NBm)4qwWtyT-eu-}UEC,xDLb.nvvT}hM_wVmVI@Mlu?3IvYBCf' );
define( 'SECURE_AUTH_SALT', 'BSgCx<B*]s9irPquyo^7stmn0D)I+.gS-b}T4WMJQ?z`OL=i((rBws<KgUP91d[<' );
define( 'LOGGED_IN_SALT',   'x<ri=.jrFll2b{F[]0zZ>C0DwY/,6dQ @`)#hGW%kMy,#+8jwT1 I{V#}Oc43OKW' );
define( 'NONCE_SALT',       'o6fE=Z{plj@n)NaEla/W2_7_2QJLluR;;&fWj|~SKVmoJJ:Q~_e=7) ./O<G%^%d' );

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
