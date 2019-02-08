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
define('DB_NAME', 'wordpressquiz2');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '+MNyHO+#mNoDfhRETR:/*iy*n:tr5=&,7EEviw@QrjKL*g#;hA9ISw;Xw[`;(KUt');
define('SECURE_AUTH_KEY',  'O9daS:rqhM_)#{^FJhx6,Z`bQ7 9r`:hE2&z?iHfKyv7vzTgc`}g+QDN|NVQA#IJ');
define('LOGGED_IN_KEY',    '23xk)f_rON{sIYSxu9cqbbOhCm%9 TN8>4DG> [1nTN$u:K_%=zvL$3O&)&Xp7,$');
define('NONCE_KEY',        'RgFY4Ya?YLQC6<wFxxXyK)qyk6O7$(g;Ksx,h(,U<+fr2|yP#hgu4~=uiu1%Uszm');
define('AUTH_SALT',        'S7@HDk`u!0hdUF7B+*.9mr{y)}>5;[7TYcHS3x1w;h|Z-2UM<Lo#m)R,+kqJ(2IE');
define('SECURE_AUTH_SALT', 'i`0vl$ZW)4P;D}dR-JRHs;k5p5qk8L%E$r00,Gi&V@B<`o<Cn9,Zwt|Iwi9j)Bu#');
define('LOGGED_IN_SALT',   '#7giK]>1%Ex2`@YTFH9~G]=7;+VzI)]IGwRp/S>]DLw,a>?xB$Vm1,%R[u0.eveH');
define('NONCE_SALT',       'u{*{1jb08Jc7p8`AY07M0]DqDl@y>OVMXD^3S@bF^=<!lCf,0:R+8Pj1u%baXg>]');

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
