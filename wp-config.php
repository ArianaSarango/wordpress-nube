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
define( 'DB_USER', 'aris_user' );

/** Database password */
define( 'DB_PASSWORD', 'aris123' );

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
define( 'AUTH_KEY',         'amKFolm}ATh$[unYvx}-g$bYr)F>wo^24Anpy*K,y<Oa?&-X@rqnPYCO]H$MR#_!' );
define( 'SECURE_AUTH_KEY',  'EK72se%n(K =Q`g$SI2<W&1D@CK{(RA*dw<mo:K}<_+; I$(t^n;+g]HcSQP>(90' );
define( 'LOGGED_IN_KEY',    '?=Cs@y|99x}k%Z}h&U8$)[FK$}j>bIS%*ZcVI*(: .OpI&lVvKN:F=sugIVZluw|' );
define( 'NONCE_KEY',        'N+wBMfpK}e5EYB^#]-0R,]1$qo=,T.o0*d<fM2Kw~WLBSYMiS9lG;#PTe`N.w]2`' );
define( 'AUTH_SALT',        'ZZV*Db)<b!|9C/(lU]M/*=C8;?bJ*s:Ab=yOP^Af<BaxE5&Sohmx<ZHujf.b$xC_' );
define( 'SECURE_AUTH_SALT', 'wJrcHUbbm]FH${ !f#w-z(+V){4*Tt&>IW0mBg#<(+aWEvFM*Yp c_1J`,/!t0qC' );
define( 'LOGGED_IN_SALT',   '&N`K=eE3&V8]*qt,hXSAxLvU>Rv[g,l41D%+y)1y[i?Ci)tqgbJD6ZY#Q-pa]c;r' );
define( 'NONCE_SALT',       '@T<=R /)~FDU*M J-|W?(Vl-tFvP8`?r<%=U0Ah85@+>.ZFN1Jk=9=3jV$_C=Q5n' );

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
