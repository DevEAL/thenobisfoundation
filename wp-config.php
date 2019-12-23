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
define( 'DB_NAME', 'rxpjfcmy_nobis' );

/** MySQL database username */
define( 'DB_USER', 'rxpjfcmy_nobis' );

/** MySQL database password */
define( 'DB_PASSWORD', 'a@SM9p(925' );

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
define( 'AUTH_KEY',         'lvdrbjjvhrppzvgwfo37o8pp52j6ogxpf8uifwcr9emnnqarmlpgcbqay3mv7lzj' );
define( 'SECURE_AUTH_KEY',  'ptxji5ho8iyieb3pnces37ymljl4osmcawmgrleaowusom9dlw4fuzdf1omt2vl1' );
define( 'LOGGED_IN_KEY',    'g1xnassbszv6h8ngwpjhgfjc3kv2qfgx9it1aznb1qpaznnedbnqzykhmbna2nld' );
define( 'NONCE_KEY',        'i4tsihmbjznwrghkosbwbzexzephtddvlcadzeadxdzwouqdwzywxtyrpglcvaya' );
define( 'AUTH_SALT',        'd2i12fps8em34psahjeyacp1kzjoyg64htnzhvebglrpvnf21mioozauyxdjchh7' );
define( 'SECURE_AUTH_SALT', 'vip8jufdl2gwrd35esxjsiqtkr5naz9ixaol0mgdafcvofs0b2dm1gnpghyfrcsy' );
define( 'LOGGED_IN_SALT',   'nvgo44mlhhp7tbh5hw6o6kfqppswlenopplokdcvanjnqizxvhhgm1exlbpq9ltd' );
define( 'NONCE_SALT',       'vdolckb4fxnoqzejxqfzh8aofbobpmhubtrbgfyklieqdvl67e7hfeekr8qpsfiy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnobis_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
