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
define('DB_NAME', 'wordpress_dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'abcdabcd');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')htm~b1e4@&rV}ws8t.C1DO40xdySuA<Vue9ZuP$%g8gZQR@!,><s_rSwWF3 <W&');
define('SECURE_AUTH_KEY',  'A`zJ-HY :lPhx.iT[^x6G7&UI%N8^]O>_eO(: KXx1Jgi+Wo%B$fu{72$St;L6fG');
define('LOGGED_IN_KEY',    '617x#Mw&87f`wAe>HL>Q{q7AHa_f<Bcy)b55XbfVfK9YFkcp0XD }k11dPH} f[v');
define('NONCE_KEY',        'JL-p!q}>DLk9.::{)5riq}P:0k6ak%%,rVSbz.U0}owcS}EDK5/l8gM=N0qV=m!j');
define('AUTH_SALT',        'w%&)cLt*4fi4|l,]t8K2bds&LU`{uARK<~>+&,x)RF(P7}P;q=#YB]i7(o^7hWt*');
define('SECURE_AUTH_SALT', '&Wg,huBkr[Us93criEt:^},pB5!q(U{R/u0(|B26y1G.}bS@vPDVyg$sEQl5MF4y');
define('LOGGED_IN_SALT',   'C*)U!co.!O*B47%M7f#^s|0ZJbH7$*h2NknL`dh2eWES^86 s3ZE,((I(zxCx($;');
define('NONCE_SALT',       'W=.nRB^q/mZTk>0M7FJ_ins@|#}HQDqY={!kO9%M)t+N*WMe&C/vFCWmEhr$(@1/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
