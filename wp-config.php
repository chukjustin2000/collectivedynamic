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
define('DB_NAME', 'collectivedynamic');

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
define('AUTH_KEY',         '/diS~VP!:n>2>n/tv a{pV>=X0OmAXPyGp!}GI|h@`EaSq5N[(Byd$J kBTbw}0A');
define('SECURE_AUTH_KEY',  'mHiy/@%rVBX}r6T gM_Sxyps_8mg*87x8.`%IAVJ;^tVKBm-y[_ylpJv:@x;%n)J');
define('LOGGED_IN_KEY',    '!b%]tAZB5V(7YN.1G+5k0NpSVWb^6+z306-kq1RWvsv`1<w#]WuUg|)E;bO6op=m');
define('NONCE_KEY',        'IjAuwptpyX/wpt$MWHAXP0t35nquv~>,23(F8bHov87I,64 OD()ck`|Iy` bOS^');
define('AUTH_SALT',        '/~I zy9PBCI Wm)B7w}K;f>0A{7wYz91*BW<fD[8&,s4[R1$$(k*sUDE5p?{h>0/');
define('SECURE_AUTH_SALT', '}DAYs@wn2K2]q|KIJ{hLr2plhUo0[IK_act]Yy]({l^QYC{fiJz6)U}ZVV7kN|]V');
define('LOGGED_IN_SALT',   ' ,W9Iw8]rX;0/N9gE<8m?J TE?#n|BuYbts<zJ~VgscP!4^}x6I;~Phg?XLDTp{!');
define('NONCE_SALT',       '#4:p;=o|xA``;iwD|ax/St%yY`_|teZvhkub!u)YP%?u!Av+QkNI+vUy,Eo,XV?Q');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wfp_';

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
