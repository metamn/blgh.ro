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
define('DB_NAME', 'blghro');

/** MySQL database username */
define('DB_USER', 'blghro');

/** MySQL database password */
define('DB_PASSWORD', 'zEroBlRHV4EQNHuz');

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
define('AUTH_KEY',         '5W*2s=7C?y%gS)?oJR oR`2^69MIEEBja]}tp:,Ft]=}E3x/<Mv*6d/+>XD8z[>M');
define('SECURE_AUTH_KEY',  '!&.DGXS+ADdm0M%&)X-_p?=nXAgJ~5!#=&6YJ[I8(gzx!!>5(Z6}?`rtE(=vu%pA');
define('LOGGED_IN_KEY',    'vg?S$8m)^2!IEf#-MK= UahB4Nq1&=SYc;Dwcec+) OUF`Q:ysTXlxQIjC1QMX3!');
define('NONCE_KEY',        'vt)yd(h]s?};78Gcxa2?Jm_X1J#^/V 75MLPS6Adq3nTW!?J5RP3f>Cm.~EXbq{0');
define('AUTH_SALT',        'd)5i]4q/E^ufUj~dTHr#;CigVR!{rlcsS[|,la7W;C XbCVBZ8bi+uzb1v1* 4aC');
define('SECURE_AUTH_SALT', '6l;aHl]7Q6N~X,?7?~D0h-[~[/?1?kV=0%jTVg[CZDlSM*#C]FB-1h-^_vgUAG(q');
define('LOGGED_IN_SALT',   '^R3/9wA>Ut+u) 8X0,>N zeL=^XaPN!rr :NU2%k%BsS#j9=;A=ucd*,aHO(KhY1');
define('NONCE_SALT',       '7Oma{VqC9Nl{#|i,ia(Y7wvpY:^Y^G>AOo/jqAXiVmU}93y,)5unpI~m6xXK[z46');

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
