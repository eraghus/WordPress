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
define( 'DB_NAME', 'heroku_95c1b5b3a124329' );

/** Database username */
define( 'DB_USER', 'b53ae12976b71a' );

/** Database password */
define( 'DB_PASSWORD', '194846c3' );

/** Database hostname */
define( 'DB_HOST', 'us-cdbr-east-06.cleardb.net' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ')}#+*xsatb*9l@[8=YZW6J-t%TT2D?vb:BX-*gaU,Mg>$sOh1VS=*Tr>L?lCN^w,');
define('SECURE_AUTH_KEY',  '`P#:F)uQsfVY2OXPZ.OCoGSkY3N|?^o[+NWBFa!0{e~R-o &WAOgAMS[:v kLP48');
define('LOGGED_IN_KEY',    '9DQ?]~KnB<Vi]4>E:8(N_pP2,S%.e|qWe6DFUei&&;l}7R-QG#W?)#3WEn/|Xbs{');
define('NONCE_KEY',        '8<|yme@_(LfKP_@fGd=q]FiI-c!~f 1z3]X#|4L-F8B??hI8s+[tL01Iy-l+H l_');
define('AUTH_SALT',        '`G Q4ZCGKx[G0*97m>6!N:bkc>2N-uP+,:]bF}PqJ#K.B4PCo1z}&KiV!3F-YG)x');
define('SECURE_AUTH_SALT', '<@R@rt!.XxEX%gbP/i|0L+qz8>eE^[a1vU?2L- rZ/=VGrD|3JX*(f/rmIXO_uBe');
define('LOGGED_IN_SALT',   'cX2%xPm70QCL-e/)~O||ide-%tc*`-Ct(TVq(`E?BeU9S+a9Z|+.)B|&k0`fx.:^');
define('NONCE_SALT',       'Hky}gka)Q0a2A+|gW:k&+P-=L>(KYD4IDf_zIHp2;g.fCdxrmp%jm@}^4bW)t{|!');

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

//Begin Really Simple SSL Server variable fix
   $_SERVER["HTTPS"] = "on";
//END Really Simple SSL 
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
