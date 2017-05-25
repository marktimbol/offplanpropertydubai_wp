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
define('DB_NAME', 'offplanpropertydubai');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '1Q]}lvo3MSl4fbW;Pm:TeRW7^iG+EwX>2 ~Z)p-!P$f,jFQCLC{$,ER]BLQKw:VJ');
define('SECURE_AUTH_KEY',  'e=DW`}>Q^ DMfu3|e`}W69u0?Q5Dkh>B77lckAJfaIvPGuYZ2[-hw!NHq+R.Cjj{');
define('LOGGED_IN_KEY',    'L7PiVv.pUo@4oP?D Ed7c[QO|]m.x[]yo`L}X9K{D@?4=@PSYB<zg%0cw=;eVHf@');
define('NONCE_KEY',        'o&&>o]l?5M<H)1.[gvV@R=Sh h,;ynhQTe pyzfS}w}</.sX,<C`KVjciCPq8P[<');
define('AUTH_SALT',        'E385H8r??n<7cssI JIpp%3@s9ZGY5N6#>O`v!A:h OrA<d)ylPeEeA`C<2}qs4!');
define('SECURE_AUTH_SALT', 'O@J/=ZEbv{HgzmSnSBeG*~XLaOXW fLZ6J+sfpIAL4Jjs 1/UgR00>8!{%9`$81;');
define('LOGGED_IN_SALT',   'T!iY>1CvY=s=hRuHVRzSh.Ze:r424;8EE5Xnx0;Iy&%*Rw-**s( %vQa11E~lh^}');
define('NONCE_SALT',       '`0`ACL(wJ{6z-wT4f-Lc3~;(e y^dU:9r sy;ReUVe/Y7SIn6$ S}qn3}uZ,DhI`');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
