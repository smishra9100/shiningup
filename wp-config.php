<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shiningup');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sha123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.FsSM-#0N1URT(2V+LCS@E95BtN%*Ku8,d4;4%4hkM+?4AZq1W3*YCj}5D,ACkr+');
define('SECURE_AUTH_KEY',  'gu=SQ}K>y!`p5_-6*aY;FVCx*+ 0,1}[k=FQbn-?VnA@rvQGiX!KYTqBQmkZ3mz+');
define('LOGGED_IN_KEY',    '5:T/N}V8]&=Yy>SV[/fzN>-5%iBz&Nw7`A^XVu]:/R)oU2T(F<<tAm~o$4*Qk+}.');
define('NONCE_KEY',        'w*UBgp<_c7$[KK]FK/BI:^_dnLy1ER!:qCfg2#K*MY5GEEkF{c<xl&RcLnBk:>E]');
define('AUTH_SALT',        '+yGrW H.op5FXAtIc*SGJ=>H$|f{zv///mY*gIBUCw-,_hJ7Azah::njGJDY-3Vq');
define('SECURE_AUTH_SALT', 'Own#?;H)}<{;(Hj$.$9/3e/;${_xBeP>S8BOqXq-*#($gR7,AZKR=X4%OVa!aGa-');
define('LOGGED_IN_SALT',   '?;5Vpq%%,ltZ6g@AW?OI*h/y=[5VCN5gVUpT}&h?Z0yD`K4Q97vUbd.tMtOw9*Dw');
define('NONCE_SALT',       'LP|<*J/lzpgs0iHU>|$AYr1pzs!Ic_w^3>dTji896h;G|sr6#y  k2**wCr)K~a/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

