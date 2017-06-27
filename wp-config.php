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
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cnapeste');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'diein2020');

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
define('AUTH_KEY',         'f?7f{428vUf$Y^]L(W<+-.RML9dszdam<L=<4;W+` |WS`B<$BNQ@9K{o-xG<V2=');
define('SECURE_AUTH_KEY',  '?+a`yge8X=GA#1;KfTs_r8r&_bE]J#Jgnp/S9 VX+:|O$1aLKmgg:c|I{v&]r3xK');
define('LOGGED_IN_KEY',    'z9*@X)`*Qr7Z3jsR[q?mgn[Ei8vvX9pW8.sZ A@S#3?Wh,;d:/%B!SD.?Pt-)a8k');
define('NONCE_KEY',        'nE.IwfXy!d]J]!5wzf /nPpgG,hT>{Vg,<~**qKpgkoUCxO:SSA=#X64#]2T0CUc');
define('AUTH_SALT',        '_;Ct0y/5@t2:.9]Hm##qCB|mTD*;6Q<%nC7(z+4_,ag7@^ =[}d!/N<D9>h#k(!/');
define('SECURE_AUTH_SALT', '?gY6%~.]Ah&=)ZZFXH<1Rit,Y7Ff3 I llur72^(k2l$~{9%pou@w0l+XdJqbX-^');
define('LOGGED_IN_SALT',   'bn!Uwk>rOJ9Fo&]rg;$2n<PzT%:rca6B/RW82Ks1h2Xt zcto5+v&yntpUD7oC*L');
define('NONCE_SALT',       'T!:HR;Iv(Xl2q+0:|>Rdr/q`stlD~EJ+T`S4c/x1Z<gjf%0GdI^opS|8nBY4T[)D');

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

