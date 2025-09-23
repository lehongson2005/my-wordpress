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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ',`]ecKC@QlSrAeK+Vos,11.g g7!5Zi>[7|+lhM :to^!&EL6bJ(4g9tmdQdL@]L' );
define( 'SECURE_AUTH_KEY',  'eImZE(i!_q}u~&l<tCy},~]oW<T@oqv(A<tihH?ya?4;.@+bQuWVKmp;ZbIHWu~Y' );
define( 'LOGGED_IN_KEY',    '$<  2A+}CG_O%4Lf pIpLaVYaE(3FeBv&UR1<2|kpqgOGuo7raODkHKUcrxWk#1<' );
define( 'NONCE_KEY',        'hz~$e-!pyWLYK+F3u;LO8w/a%nsBT6v9/_3$4Et1E?,au#/gA|XVk{9|9h11>?My' );
define( 'AUTH_SALT',        'dD= m~BJbCw`7y&VmrKfcD8o1(0=q/plTw@{^KjG.FvI(S0~i$adu78.>uQ)N94-' );
define( 'SECURE_AUTH_SALT', 'kvA#gu;P[?HN>]e7V^2(N@v[?hg+qWg^O3=@M~7$CEx2&Ga{&t@+E#o=&1iK+vw<' );
define( 'LOGGED_IN_SALT',   '3^b!q =a)$@>1Tjd/|=8501uld{3WEHu~LIH$@ix k(+zxfm+6:|u-h_9TAo}~mn' );
define( 'NONCE_SALT',       'wE __6Gp+E16{ zE;dt0Fa:qiJ@a%:?6d(-{;$IPuq_FkHQL`FHa zp7Ck4c.GKT' );

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
