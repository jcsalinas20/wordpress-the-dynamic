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

// ** MySQL settings - You can get this info from your web host ** //
define( 'FS_METHOD', 'direct' );

/** The name of the database for WordPress */
define( 'DB_NAME', 'dynamic' );

/** MySQL database username */
define( 'DB_USER', 'wp-dynamic' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Th3-dynamic.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'p-o8@w(;iudsLR|0>sseH`v^~w(|sSyw|qceUfsl$3rzr e#&}^vBJfAyiotZAWa' );
define( 'SECURE_AUTH_KEY',  'cf1DOL+:=l5#mFsP]?!|@D-(DBn.xz7nQhDk`Rai^{ZaOKe?C$+5P<W,UnPXJ9Np' );
define( 'LOGGED_IN_KEY',    'rP6V5E30`D5}(u@MC{]sSQ{a?C#?7(?MWpTdlC7d@0~XqxL%W@6bNz/xYy%QLI2k' );
define( 'NONCE_KEY',        'd~``g$P`YYw[r_zU8th m{9d@uL1om.q)uW=}JIWGr4i%v}B]H<GozXGJR1C>F$6' );
define( 'AUTH_SALT',        'vV;NKOo%@%zUgZfz4|#}OM4(qWN^P2I;f?9.YQ:U81bw[ Z<=vt{Nc:rEt!;j; v' );
define( 'SECURE_AUTH_SALT', '?Ii]TAiPK)y=vRch+aw*q3NVh4!Ko>0g#V1<n|^&`rhfGB|)pw8g]_JNzi{Kt##c' );
define( 'LOGGED_IN_SALT',   '5Uc@-b$COQtuW[V&Dc}lTA21.Mji!|zxY9Zn2pAYMQ6OvxrmhIIr. ^57ON>dCA#' );
define( 'NONCE_SALT',       'GJ}oR)L5Wk$j2@m!KMT@eiKuT$kNUjLykn|tfg>oY65eZv->zJDVd[o:%@.^B9;x' );

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
