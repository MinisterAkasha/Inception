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
define( 'DB_NAME', SED_DB_NAME );

/** MySQL database username */
define( 'DB_USER', SED_DB_ROOT );

/** MySQL database password */
define( 'DB_PASSWORD', SED_DB_PASSWORD );

/** MySQL hostname */
define( 'DB_HOST', SED_DB_HOST_NAME );
define( 'WP_HOME', 'https://SED_DOMAIN_NAME/' );
define( 'WP_SITEURL', 'https://SED_DOMAIN_NAME/' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_unicode_ci' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'T2gZ63i3+1O%k`,OeovG3y0_F)keIiMeA=#91lT*QqQ?;Q^ia%CpgQ4ZcdE6QC:=' );
define( 'SECURE_AUTH_KEY',  '3/GbQ6J{&eemwyQ;>ug*kt?6.$`KgV@)6Qsrbk6NK$yhRJ.ieZsE-~sp>?Bp:=s7' );
define( 'LOGGED_IN_KEY',    'I{G4kRDGLgu)l8KQTzCxprJm^HONcrf!#gIH1p(U}HcdS3+?aSRVa5RmNdA;Dqw5' );
define( 'NONCE_KEY',        'P+v#~^uohf5b+Edhp+|s9[O#CE&r_`,km>=Up!PMFBp]RYy6|zG]%QHWe0S}u.Sd' );
define( 'AUTH_SALT',        'ibq;PbR*BSK.7 oqDV*+Q0yj&KfsdC~~b|P,OJt&jc1VBp6fqe{0_U4zy!Z-d!T#' );
define( 'SECURE_AUTH_SALT', '7AiKtIFL|cG#t;c2_iLTOMO_(Q?1nt39IDQ*@?C!AqJ CiQ`9CKF`[*%B/} KnH.' );
define( 'LOGGED_IN_SALT',   'w8@qZ??wbwFMpfrXf8pGmH%Yand5#=M4dUUEtv7?Kt]E,EGQK$4@nY|>$i9ALLIC' );
define( 'NONCE_SALT',       'RdvL~q8<:#nCCle(:rH#izJ;ZU;wi2%2rO~IAs1wKv`BmKYJ-zb&yY3d_SN!|h],' );

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