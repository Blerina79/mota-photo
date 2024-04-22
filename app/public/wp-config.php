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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '^KTj$7E^l=Y&Z4)3W!C}M;BnaMJc EH&BEfLUi[I:]ri*(~2hwNLa|/,GOQ#`qG[' );
define( 'SECURE_AUTH_KEY',   'n5ldry0}lPI>Zjv9MRg/m.[P{Rxy?T`mPeCA1MEORvIBn^:(/ZFN`,#QEw2@dgUd' );
define( 'LOGGED_IN_KEY',     'sWK9Xh}e(^[GT~1}[,L&k([65S-)sG-xwY-O?WF-+nUtIfd i$$p_cDeR^5rIXrV' );
define( 'NONCE_KEY',         'qzej[wECN:S=zHPIe9ojKU|_#q6zYxC8,=`B!A{5Jt7xesuM7F5K]).(b^SosRN1' );
define( 'AUTH_SALT',         'CZ.IYMdENKAAh0IAWOCg8|~ygbB,279([ PQffE4nSYxkqEJ8xyA>di>vS]aXU(&' );
define( 'SECURE_AUTH_SALT',  '`OX1nomaEXKcrD[L%iAJaJehf/uH!LY+30F@EB7$a:7#z^@@pr+w$+Z}U1SX~4_M' );
define( 'LOGGED_IN_SALT',    '|/Fqf^OL}+,<)P&ZU[U@~47=3W!0Qz%Zs1EBqAZC`4d%H%zqUgnxRi~$P.^x!)Gd' );
define( 'NONCE_SALT',        '<vt^t7MXF2&>/B%0}-E#sB+45KYS@DOT{hZZ#-y*`O1*m+#(e;1iY&$Z7dHN)yz:' );
define( 'WP_CACHE_KEY_SALT', 'E:vf+Rwb/?{;7lMa&*kG)!R0yL[_/?mII%1jLCY+B0ES=.c/Cmf =Ahb@F&/ojC~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
