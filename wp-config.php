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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hexing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8888' );

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
define( 'AUTH_KEY',         'el2k0v;]LbXf+4s~Ee6{]8g`5pv:<780u6Ib,9)!uO7xC+k+wo)>lR.x1F}Q##j{' );
define( 'SECURE_AUTH_KEY',  'bMJ!)k40*PP$047yC `I^7Ad6y`(}82BsrJ=t-hrHb=ORttENzuSh <D> HHm0*^' );
define( 'LOGGED_IN_KEY',    '2~W*Fzn I]=apTxAw9#{auMkmqe#Fj.FO+`XWz9VQ )Ret7c=T,]zZgZ_I.raCl%' );
define( 'NONCE_KEY',        '!RMwq#aV).v$8?pvRCwd+gOaL k/GK`$ 2acWHN$zngMi!HQlqtG+EzPdf^-(Vq(' );
define( 'AUTH_SALT',        '%GVk5JHeh}3XOpr@2xJO4HWTs._N<eVI&$1`h9[?]I,S}ALEMDlm|MX+kd%gOKK6' );
define( 'SECURE_AUTH_SALT', 'CdvvBSKIC+[jnl +Kl=gmV,vs<C|(L-|cD6%O:t9@*ATpZ@5u2a*BME 4laO,JKB' );
define( 'LOGGED_IN_SALT',   'xAw)9~!U/ko~7,V`=Bax(4gif.PDLd@{OVhzsfBZo9tSojdP~B 6or4$7Me%= 7%' );
define( 'NONCE_SALT',       'x5L8jo~kQeNQu1f7v,0.oV&UH3 b;PcY,GNLkn*e~o@K;qJ1 xaP[7&PLV{L 22T' );

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
