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
define( 'DB_NAME', 'mdn1office' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=;#TE>V2NN{n*Jw<$L*),flHqbJ-/$k+<~C-YS]FZ&!VE~d$.r$q {xDT5WDT,,|' );
define( 'SECURE_AUTH_KEY',  'xa5e]AwyAg?paSq^u9ORuv$~@f^r@^PJ8bp]F7f_C~-]X=ogWEW^s9M360ln ;E*' );
define( 'LOGGED_IN_KEY',    '<dy+GH+g]P78?4D3kcjLbSgn:<]@!m@Sp:?zIf*xjZyIrBx@W%x<MH(qnKkb>K!Z' );
define( 'NONCE_KEY',        ']IUQv3x4aCz$>^*`E!H4s%8XO)S;OUUn.x!UEODk%=0/,cKcch,:ZLzF~`KHJ>c5' );
define( 'AUTH_SALT',        'jmfCH0>Jb;d:O^^zFvW]fEL@5FJ9BXY?KB@>!DIJ%-/43ufG1yr;@%D2W!Hbr_*^' );
define( 'SECURE_AUTH_SALT', 'p?3qRsU5ZK14J2h>G)r|I~GDw(-!Y]}B~@oyV:$}xyB[xmmeH>,;Vi;q5K4Z{LCK' );
define( 'LOGGED_IN_SALT',   'iGFc,/y_Q>3c/6OJyJo}zc,UZos#%ctHRW/tph^ZX^>?O;Za(|R::j<fs<UJSs!1' );
define( 'NONCE_SALT',       '}Bg~:3Id(d#*.@W9aag2.S2i7HPy0,_;ZbT=SXnF#nJ@+v*]Z3P(}$uFjD+C%Ou!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1office_';

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
define( 'WP_DEBUG', true );
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
