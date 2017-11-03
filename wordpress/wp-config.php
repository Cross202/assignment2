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
define('DB_NAME', 'assignment2');

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
define('AUTH_KEY',         'K&{/+$Q5 +!0)V#Mh1@6N@d5@6$?~d1F5&p$<ZjdE&{;8a%hr4/5^Uk~e#*R|ivW');
define('SECURE_AUTH_KEY',  'f0g%%*[,b]LY7KjD;|SuZRL/$c)6Z|IbfaIIN}WGWs7>ZU/08p[,~?&GwKtFkr7C');
define('LOGGED_IN_KEY',    '~wcy@PWc:Y?I`NCFi 31AS~B2?Uhm_c!LWC&,fTzfvMu1W4cW_^KJ%[{ Jp$iL=H');
define('NONCE_KEY',        '{r4T>Xipz0n}82}FWZC5L;d+t|MFWmrT4:KT9r%+q|KZ~*Y)<4?B$W1/_(h(mE7/');
define('AUTH_SALT',        '!/[f1%x{~Y>3_(pYX;|vs26Jea=K=<W,2EUmnDB b{Fn-5w]]xuG^{(~t9Xx4Pyy');
define('SECURE_AUTH_SALT', 'Cho%@_J<,8PXD1J?>Bu<ULR5zjlk#}F:HF:&mMB,~)3v?PCV~)2*.lzj0~=~gxtq');
define('LOGGED_IN_SALT',   'TI+nX6&b#ZDu=3A2GvAJzscZbxl{&@,df3f^0L4d}:XU3(Bk5id`0j*t9KU~D*cX');
define('NONCE_SALT',       'F&rn_L:Z:#K``;roF/[PT}Xb8`@hCu.)X@?OVf/cT!o_zcf*lWQ6v`T_8VU_U~p ');

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
