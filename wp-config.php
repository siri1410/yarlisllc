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
define('DB_NAME', 'yalis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1tseckarach1');

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
define('AUTH_KEY',         'w#^#)dF54DreQ7;h*NVT+9p;k?{F0V(t-MNh4Ly^;TUW@*~A%ZEJ~ O Q)e]r}GD');
define('SECURE_AUTH_KEY',  'xJ5SBPa77f]+b{/kZY`1Ry3c8@hzT2Y^dS47r7JtDo&NVOc&f]R2GDpr0%uYkqkG');
define('LOGGED_IN_KEY',    'x%Uq(Jk4j)$L!G<jyEWR+VKbZX1x)y9NuXj]`RP1yM,@y]EK8 PDys (G5#dC=DA');
define('NONCE_KEY',        'PAKcQ1}4jRL+uRBnvdtksrCF(^:p3H#&V%3zY=vJ}zOb=1()(P+p,~*`H+^p;]_)');
define('AUTH_SALT',        'pcH)>A?~2xg&8+9LtACh8!I#3y[<EGJQ!6!z-=@3xJIjm[HUsu53Vy}5gxj:hns$');
define('SECURE_AUTH_SALT', 'v!E;kDQY#C%H@S}!bhbH863|VQ}U=0v-O[X~{kEEaz;Mz^dr9glw.V/;L.dC-JSz');
define('LOGGED_IN_SALT',   's7r2fo%rvPThd6euBm|:!op=|5,$w1<jT]a*AlhvZp>C!9Itj9Ua;5<mgr9uYJQ3');
define('NONCE_SALT',       'Ny+[U^/{>CPlOOC{R.@*h!VC2Q,BpC(|k8aD.%m}*$S=Tr2Kd v}PoR%.$;F{WW!');

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
