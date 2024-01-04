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
define( 'DB_NAME', 'wp-hadeeforge' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'passworD@123' );

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
define( 'AUTH_KEY',         '(%}kQH_pH,!6{WQx1IV}Q-Qm^RN`nx?5;@<*+3Hnl~}hA_5a>H?^U}.sC<q?DxJ-' );
define( 'SECURE_AUTH_KEY',  'B7#=hD{!mrNT4?#yRpI}gQLq%u1n?UJr2C#%{xhD3[xD@q|Z:{2Cx{#k5H%gm+XK' );
define( 'LOGGED_IN_KEY',    'o7NY;fMBw6GoolAnz?C3+q}&?{PLTN)yXd{L}U(epvZn5t:I/=I2ne_?(W_.cb~0' );
define( 'NONCE_KEY',        'dru4u<!;~x!#b=2h`+dLy2mCff<XzM*qf4VLd&8MXk[O&=yL2V?00< nVgL^Y>a/' );
define( 'AUTH_SALT',        '}33 ,`@Tsz{ce9s5@))2]5pLuqgJO6yM4i/W[OUZ~j_`EA3LbU)!~c=$yX.<z{|n' );
define( 'SECURE_AUTH_SALT', '90XOU9FBY+k6QQtNE}Lf.Fx/Xs-Hg!9.*p%c;W*#! =K6 *RWuRR XbX6nW7&N!,' );
define( 'LOGGED_IN_SALT',   'J9CX>uyg>[;Et1b`5+b})%RL_o)Zd}zU!qD|#i7 Y:2KD_40$d1am=j8(<;iWk*1' );
define( 'NONCE_SALT',       'Cp;]HGf6#j9]Je:cPWq-;/h1wU*^;.(Rzv CItqq9QjiD524nDDGi%>5Xh1o6X.n' );

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
define('FS_METHOD','direct');
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
