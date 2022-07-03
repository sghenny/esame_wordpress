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
define( 'DB_NAME', 'esame_wordpress' );

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
define( 'AUTH_KEY',         '(LA$AGc9=rM1kIehD/Bud8%fT3JKBU$EwCFN12v:9Nsl32fzG/;MqMY]$aD%ltF5' );
define( 'SECURE_AUTH_KEY',  'fROlACBCQhSNg~L2h%~%aNc.fMnVY2BsSPZ39.ileM, wFJdf`ybmtC9p3R}{`sd' );
define( 'LOGGED_IN_KEY',    'ox@<{k|0bk+;}]WO-V?gR~JFvj- r)#7SdP!BWt2CQdksmlyz1PVN[Vd!8U^buM:' );
define( 'NONCE_KEY',        'huokWTWU2QmX@m!3xv@Z#gfn?JA3F20+1)m<x[ZR |.M`Yh`jumifh/c^S{JF5X ' );
define( 'AUTH_SALT',        'Dp<y5>D`&A~0Wv4h0;%;Q |N|49]c%a-sCU1rk&fahxx!%9?NrygyS8JA04uF8*u' );
define( 'SECURE_AUTH_SALT', 'jif6^I~9}{O<#%)MovaL;EP..5h;; SJPEt &cP*d2@?HnWL(DG)~*UN9?>dJWON' );
define( 'LOGGED_IN_SALT',   'ZMMnmQC{ESfPtCGRo8(15{MYuuSvIKf6qFC(!fk mVYxuOga{3vLBN}i)5C+_ Kw' );
define( 'NONCE_SALT',       '=sTNjw.FJ3u|hXw*Qka$,mk}VTLb(uny0yo,d<<!P:ma92Gd]fs<~ePHmHS>hcs$' );

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
