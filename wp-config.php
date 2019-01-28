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
define('DB_NAME', 'whiteboard');

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
define('AUTH_KEY',         'B8k)7b@&A3-HnWI.KW$s?$P^D;R_9/aZg`9DX:uM8#k.h3Pq}uH=NMyiqLd-MP&t');
define('SECURE_AUTH_KEY',  '1<Yd-4n(Xu RfBPw2KFcbaV S5Xy<Uw+f!@+?hNIr(ebiSF#2s]bWHi#9D)[,LdX');
define('LOGGED_IN_KEY',    '<u|bN,s}@Vu%Mhx)q*_YumUxoBBD>weq@I&J~),(2zgNX]Is|cIEI!_R6_$~qY[T');
define('NONCE_KEY',        '%r+9b> dp>ni{Ox@m[>7/q)G<{1A3v:jD&p~1lEZg}<>PaBcx0!.QslLgTfQ8fok');
define('AUTH_SALT',        ')}TVfj$P#Ne?2)d>&y6.&NLgI]qMg[zW,SUVbG=&hpY92qT7&L^Vtw&zd>!aJMu,');
define('SECURE_AUTH_SALT', 'cTFr55_#y/>:N$^|j~/F>hq9O.CUOwO8Al8/yRKh~I jL*B~ZJ4Djz|f~dmNKOwK');
define('LOGGED_IN_SALT',   ': Y@{;p&2)*KG@#8|J_vMDQGS*>l^AM%0fuR?4{2#|#+wLT@T^?=B#%abpa1yA(6');
define('NONCE_SALT',       'Rc OrF7>Mrcn[<vAy=nQAkGKA_-7e;o,Q2|#/qg7bCzbnbvu.yD1)gzq~BG521O7');

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
