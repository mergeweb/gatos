<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gatos');

/** MySQL database username */
define('DB_USER', 'droopal');

/** MySQL database password */
define('DB_PASSWORD', 'Mdr00p4l');

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
define('AUTH_KEY',         't952-&8;-0BgD9brhy-/9s]k+BdaSl41QIm.B4$~|qb&(3+2}kXiq+)1p6an;z4a');
define('SECURE_AUTH_KEY',  'A@B+qG^||x131-3C3_N6e.r||J!2j|]Quwm;Ie8I:ohZy`7T,mcaa:JVBCI[_U>/');
define('LOGGED_IN_KEY',    ';xnaXVx%F:,TI+XJV@6eC]X:Sfl%?>BW9V-PFQKpH*|Q36fd/bSDGsVGL0;n/)P_');
define('NONCE_KEY',        'W|^BcC]|._e_(ua-:5wo/a^B44jt+<V|zRe-V,0| j,a0cc.Qql}e-$ip{U*&~ht');
define('AUTH_SALT',        'TCLk:4w |pp+Tqip[PI/X)_w-rBip>1d XlB=Xr~u0|iRaM7zp++d`<{rm-Q0RdD');
define('SECURE_AUTH_SALT', '@0^y=s~kb/aw@9%^FLF*%m!E#&3xF~3(l4fL%;4KF6uI3X=^C4?t|W~_[;<-c:;.');
define('LOGGED_IN_SALT',   'exu#>,-ZhI|R-V9iw r=nUY`(o,],Hx,yYw>FXOjy]o<wI(R`4|6i+(KnDPf0V_z');
define('NONCE_SALT',       'osu.+2Z=BzEz3K 9E/{+W(|c~k3czHx&UL&]=IX4&IUVYlR1lrdzz+c#Qvnr?So4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
