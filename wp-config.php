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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'Z%#:)QToi9t^^fqcXC{>>f114$QI|eTQZ*d<a(;WV9Yp$/k1/==fo+MJp,w/k[r$' );
define( 'SECURE_AUTH_KEY',  '.v@o!ExiRvK7W-Y&AZ,r=`v:i}S-20H-QGmb>!@,wQ5~)zk&t*]&A!=SIy(|,s$K' );
define( 'LOGGED_IN_KEY',    'Qex8u`iCgq=UCn%sJ]Vl~qzsg]kCWgS+b|%eR%G@UjSP(Y1:R8aHT(qXH(ASRs6T' );
define( 'NONCE_KEY',        'ewc,q)1+p.N$M>~<ljr}K}=_Q*wXG)>vGxa~U=l*>!-.HBs?l5QTSUIXIO^![S03' );
define( 'AUTH_SALT',        '.RLw6;jlncUbKe=N&Xmri6&B3rqvm-flAR[>94(sx_aI2kI-VACxmH$i&Z*9n->K' );
define( 'SECURE_AUTH_SALT', '<OrD)r_+Gu@J.$D9`Ya[L|>XN?oTfz]^37&{}lxndv(c1b=Iwl>$k RMu0mF|u53' );
define( 'LOGGED_IN_SALT',   '-8~?W$^EXpL>7fv,b<q|CAacg+V-h ,wAFF$i:J=mjK`ch[a9S`~9)7|xX?;0wXb' );
define( 'NONCE_SALT',       '%tpo])eCJt`eJ{7cg11Vu5nIGoXLf-i@=(q$_Xau.6w~]n>Lnr]@gZFb4=7zWjw5' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
