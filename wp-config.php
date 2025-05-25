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
define( 'DB_NAME', 'loja_virtual' );

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
define( 'AUTH_KEY',         ' tc9QOIp}f[5e?S%+{plljXd,O 5<l:mm Z^J_wdN<vCO_oF.CA/f|SR-T}Phw;*' );
define( 'SECURE_AUTH_KEY',  '`zn{sZbCA{.BXs>R4wJ&4yU*^YYqz`&/VHD=Rx~4!W%-r(uZK]V:cPCi>nnx}&Au' );
define( 'LOGGED_IN_KEY',    '>4himln,`Lm.Df6i,]vR[@ovaTpvu2UBJ@}gLJI37X!pkWfE#s3?6UgtiU4v^Qu6' );
define( 'NONCE_KEY',        '$W^@z( +i)(dxXH_M.3>_pHoc)ZnPN?$2rike>~Py(}=v14EYDdXAQk-gfvN:fGa' );
define( 'AUTH_SALT',        '>7B(nC{4T+>EaJQs2`[2v[S1ZWHspRJ@V{M]D7`_1|gRSVk=r|b$>%ir/3tJ8~0(' );
define( 'SECURE_AUTH_SALT', 'ckbs|s-EBV7T3q%lBm9Bx7;Bgkea/sI,NGs]M>1+jhLsJbSukUSg*zJ{}O3([6aT' );
define( 'LOGGED_IN_SALT',   'bu]%!DDq)BtFFQrro`6,R+N5jO%f,N~W`t_]Hs(~0-PC,G,-H#MFjOn@+HoS2b|2' );
define( 'NONCE_SALT',       'PRf]h$Av0i$L{Yf8fj|RZkwvR:Q2=rNjm09:.u*V2vjAJ&R=Rpp@ujwBlrD|3u]!' );

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
