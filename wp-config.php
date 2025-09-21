<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You can also configure WordPress to work locally:
 */
define('WP_HOME','http://localhost:8080/wordpress');
define('WP_SITEURL','http://localhost:8080/wordpress');

/**
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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'mb8Gvubyqi=?0pZcdC+buS|gI1C-A*PU=<#w^J_bP1jE?)@${B]nLb2,dsvIk-[');
define('SECURE_AUTH_KEY',  'v?o*Sr.tS?;J[[eXJ$v7c~#e&]jEi6!!TK2-X]RPe/cBRn-&J8,(4Zf/v1~0`ON');
define('LOGGED_IN_KEY',    'qmJnV~94{p,jzHh-o{{k7B}4tLlP=02<6q||5O$gX6-x4IP+$L:[oyMoKJiP5-He');
define('NONCE_KEY',        'U;Cg2FdBXb[^G{bd:|O~5E=nBp:_v&EwshA!?o|ltW8x^6r`4$heKm0+cNW7heF');
define('AUTH_SALT',        '(K==DLc&M70wA:V_c_](w?ZTlrJ{ske=Ru;pNV8HVw)0R>|adx=*:+k(K:0,[|V');
define('SECURE_AUTH_SALT', '|A<@xL[g/)}yL=fWPe[#R@t`-dyi&a@rY5-(aDgpQ(n=q>:]zDb}5:8=q!}xC$j');
define('LOGGED_IN_SALT',   '8ENr]R Gemj;rFL DMt]7}6z5~+#T5I|Z(^k;cRrqe<+b2yh8DB?hFI!SjRr~KV');
define('NONCE_SALT',       '3If$AKGG5C$?h|0x_(IaW%;.{sE*>G+^2hikp1&Vw-cO>(Gu;-0Oa TeZ(/nz{q`');

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

// Security Settings
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', true );
define( 'WP_POST_REVISIONS', 3 );
define( 'AUTOMATIC_UPDATER_DISABLED', false );

// Local development configuration is already set at the top of this file
// ngrok configuration can be enabled when needed by commenting out the local URLs above

// Handle ngrok SSL termination when using ngrok
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// Disable SSL admin for local development
define( 'FORCE_SSL_ADMIN', false );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
