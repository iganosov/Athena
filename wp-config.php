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
define('DB_NAME', 'key2market');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'HicZYqTx {b);L>}JH+/[/Xn-q2$-$LGQSa&sD|gFgQ_/+YB]wBu+aC`K$bNN!8~');
define('SECURE_AUTH_KEY',  'L5Ra3-dD3gH%;xD4`x^%Qe|}~jw6-=Cx-~NR},vnz(+F3-Ws^a.0>QFyYQ1SVdK=');
define('LOGGED_IN_KEY',    'ms68@Wh]U85iXQ/$O;&S.3xiUlAi&Hy |iG^O+|Q;qels~}#y}+[;sE-+~ElJl5A');
define('NONCE_KEY',        'im$wos:j1HV9D6RelzJ-`+;+g9H=2$|-j E);jwH(Ai,|^HJ,10@+i/NYg[PU_TK');
define('AUTH_SALT',        'KWt,ld{|7-Z}]Y~Le)_b[WAH+[,Jf!d% ]zob&DYsCzSS:q6DnTOvZ%cuAFb&^8B');
define('SECURE_AUTH_SALT', 's xlSwB-%SKs}6y5~kq+?xW<J2?}e-uyas{2/y#)}<WeYz2m$4QKy| yR+}V.X| ');
define('LOGGED_IN_SALT',   'j@{~WC:`.?_6M|.+Vi+zC^|2v>Xqr&6+K,tr!HF-qjyG5jzaQ~8b%;/zY6f_|AtJ');
define('NONCE_SALT',       '].tT)`@fg(6It- q)@v!uFX/?+:U)qUUCV/VPz@un0%jR`mlNv [,h&M+>+S14w ');
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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
