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
define( 'DB_NAME', 'wordpress_1' );

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
define( 'AUTH_KEY',         'pgwjN*6;SudW(-Dr}m]VX<YtA2Z+>3cL2tUz5~Y[ji!;Z+^`!s]ij2$cl?~0fF2I' );
define( 'SECURE_AUTH_KEY',  '+Qy9H|Ut.>W>pvp!.70ZMI1t&@vE[CABnaGIkpUc4SNKJ60nq^2[[?F]`covPOdz' );
define( 'LOGGED_IN_KEY',    '6SwTfdlMsy/}.^1!0*kT:lZB8+tWVS!j<KSgrm)WGtU$<9/r#s9lX)?jt2n2}jz]' );
define( 'NONCE_KEY',        'I.GD11lC87&Sz$%c8E(z?ZzEpRtJ{yL, @oX|T>bT@J%UV?<uH1;D&@ %@**b.Ii' );
define( 'AUTH_SALT',        ')gWlVv;)OvUFF`/DHU}Y^QS|V?(iZsTMZ3:^vr(Bs~XTg7)x.+0|FNlJToF]8WFu' );
define( 'SECURE_AUTH_SALT', '%{p@xU6nMtLw|gMMfGIKj`M~2vFtY#X_]-Q7m>8em>6zK)H<l#m$o,{-Gf4pM&IH' );
define( 'LOGGED_IN_SALT',   '^8r:;t9w]~h_}Z_HO(1y(9Mp96/%O%r-=uj,?;Qy4To83o=Vz/7z&:S,;+$6/<?F' );
define( 'NONCE_SALT',       '<%.CZ1!6e9S-em_N&ow&(vr<cMEW=&R@v@^sfKK=iC&a>]iW3:s;9zC^}CIM`f_o' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
