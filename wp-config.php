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
define( 'DB_NAME', 'white-stone' );

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
define( 'AUTH_KEY',         'E/Wg>+k&aa@W#1dF/| -Gj4;qjPcsT8SvA0*ZoJXI.r,nb?n}T+$}{gs>$I]LuRB' );
define( 'SECURE_AUTH_KEY',  '~zJ>816#$z5>N1JFZCVA>^5;Dy|OG0QC1y{c!LltN2#]8M(k5p>GZ_H,au>G5F$C' );
define( 'LOGGED_IN_KEY',    'Zl*Vc1[nVCi!Vm8KAAu^f5&4q7SX1u.P-FyQw0;wtPH#D;pCo~JMe&+MX>|V9Pf/' );
define( 'NONCE_KEY',        'gy+b4GiZpf!l!VdSmO/EzZ-?RdtC%zHB|8*k3>O:?VeRa[Jp/aZ>D|*U^n:E|yL_' );
define( 'AUTH_SALT',        '2bHH;p:3*n?WdD;.5U>BU2#vuwW$c Coh~|/fe*Oqp.W(1;=Cq/ &G)7./lqhf`m' );
define( 'SECURE_AUTH_SALT', '7E(JeVv6_//k;8DKmnk;0[Z$H2jdAU@MW.={(&j-N3Z8cd4wQAk @4|@LAyW[-^F' );
define( 'LOGGED_IN_SALT',   'e$/Ix]bZ-.xs_zFQZ8t;i #0z_`Kx(g`Vwk/RIxDN5zC)lh^aRd-^[3fgOzXNEb9' );
define( 'NONCE_SALT',       'uIFbhS$jI`Pcgo>YKl_.-~Yz!wMO5pWnOE#MIjdkeoK}wb^U[nPo{2haXpC1={n{' );

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
