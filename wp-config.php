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
define( 'DB_NAME', 'aramun' );

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
define( 'AUTH_KEY',         'xABuW,xgW7P1wx3i!@Ll_!)jyM_xK}+Nl;~Xu]B]f~WBj6_W+.3s3R 1DZpb+5t ' );
define( 'SECURE_AUTH_KEY',  'V t7RoiT/@xqI=Y=)J,M{g@z>Zj~1R%G63$)Dj(Y%.mN|-fC$mX!Ptm*5wvqcR=j' );
define( 'LOGGED_IN_KEY',    'i//tDI%iM47J`IEyW/`M3I;GT`D&)]UVr}EtFeCuqT9q)NSlzJUPn!ai;~Jn1EHW' );
define( 'NONCE_KEY',        '7bY/XlH_ .S0Zb,VMnqvg4)/?<86q$b1I}Xo*+6oiyr*|&|e7atUn:bh`=3POCH#' );
define( 'AUTH_SALT',        '6vxz${t6L7@&vlmHyLV!u&|sXcBb|8^HH`yMAq?*NDyzy);2Iix7mu+K5 !i94d$' );
define( 'SECURE_AUTH_SALT', 'd*%:YeTH}<Bpv^U_O0u9=y]g9N[<IgN9g6+T}#Ga/UfM3Ev,!j.bAZW+[Bmlf`t2' );
define( 'LOGGED_IN_SALT',   'T(9`/?Wy]-T.FjosrT-{Xn.vy4cl=d138n`_aDd>Tg@e}#sC mXa55Z~iKS%x#rJ' );
define( 'NONCE_SALT',       'fe!j`<2L|B|9N?,G?AzBPYz8,T@$d D`x|!Rrjr}W_V7k;ml!(.^[zc+UZLyI0Jz' );

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
