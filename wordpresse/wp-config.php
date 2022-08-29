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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3307' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5r[Y6s0vq#=P*cPupj[%p`=@U~CSs)75gKgx_;K%;Zn4@biP::U21GadKl]$Q2af' );
define( 'SECURE_AUTH_KEY',  '0}/g!Eq9FvSn*K#*@S5c9~T{x,gpgGMB=IVR>os?PBm]F$E-|bT6lI}G |:X5fn}' );
define( 'LOGGED_IN_KEY',    'u~ End6D}dNhU[~dLaA(UB7?25tGJ*YEJUxc[vHsMQD=4`r,ZHJ+K]XK-V)>z}Iy' );
define( 'NONCE_KEY',        '`r),7sN0E+gJgV*#l ;GHt?[y<CquB)~+M^8/1/6gR<o-A6ejY__@D?*eF*bJWI|' );
define( 'AUTH_SALT',        'DW2&HgaM.FF/oKbA`*Jck$L]QevPm+cQ|=_/a=.;;CY1/gDLlMt_$y>H8C:gtuZd' );
define( 'SECURE_AUTH_SALT', 'qohX:xTKjo9Y7H#`m/UOESz)pB;DiF|$[h*3z=D/|jI&SP_TN}f0i2?ZmW{.+55z' );
define( 'LOGGED_IN_SALT',   'Q@CT8#i}Ui7;0Wu85q%s{dm{e8}kDq12piKaD9IOHx}C;a]ZAbFmsE|Z1G#Ha!-#' );
define( 'NONCE_SALT',       'x>_F[?}4M tJ~:oX/H|V@U*D4r}-A8d;>g}V((|}J?`vO,H468Z2mU{wlo,IMGfA' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
