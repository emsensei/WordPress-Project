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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

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
define( 'AUTH_KEY',         '=mV]5s.qf}Z[<^-o*wuiWM]11gD&V:=4|)]kKg9{n%^o_&m@;Gk!$s?4~F7BqiDl' );
define( 'SECURE_AUTH_KEY',  'D_$2V?@SP7K+Fz%v55,}iD!@JuTY`(@1L?9FZR3m,t_Y8$&0^~-moiT>mE:1@>hE' );
define( 'LOGGED_IN_KEY',    'Y?Xvw(^CB^$x0_PbflE(4BzL-<ZXoZTtk@mV@5A70YEPIc!.C73%t<Q!&v%xAtu}' );
define( 'NONCE_KEY',        '<@V7q5L4KJ+S4jD~FUmg&}qZTNZzcu,}hJK2&/ivWDgu ^@gT!sD6MIj/o5PC3Qa' );
define( 'AUTH_SALT',        ')#sqq4j~fWRDGwUc7X)sESKIg@g^u>BzD8]]/([b[W=TROWE>TtKw2&f~*2}H4ss' );
define( 'SECURE_AUTH_SALT', '@=[%DSgDQ}3F_Ce>{m*N;Jz~_JvOMlA[]vp7Qr:Cpy^Yo~%Ir2iX(VI`x,lO_xg.' );
define( 'LOGGED_IN_SALT',   ';e`B7>RTq}K9]p6rJF$!bfz&@#`0[UevV-_ul;e/5zwn{DR6pCcT,ToI}ZH0o/eu' );
define( 'NONCE_SALT',       'ZF,ltpEDQ+=qK@KWu`Yj]+5OZHbQT=lc;b_k[cct*=,2Wnk,+~YJ3|.=o0g$hp?z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
