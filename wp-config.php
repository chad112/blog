<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '|D,-=J*@%+xUVF`pxnt0h{b+faewo#5f{mH@?f1UgR2~?7<>fL[Y@6rQ62gAkU*]');
define('SECURE_AUTH_KEY',  '(.i-$ykX33-;N]qU~UN=jLRmlR4lqQiv+kV3oK!`6f I@_u Qs#8yv1l7oYpBgDO');
define('LOGGED_IN_KEY',    ' !=+`pvksBmY3IjZXHh.0)=9;3zp!||lk.BMO$.{MT48|1(dwq?K]vZN5[B5kA^O');
define('NONCE_KEY',        'OeEa)bRF /J4^&gg!?Yftd6gQ$F|SA-OQp({P`v.`xeC[(St1oX5`X^hT-|DPX~s');
define('AUTH_SALT',        'DKq|c,|).iek0{&lg&8NPmU7La[Q*-OPzo!iMA]]TV(oKW>D^QX;lmpA_+;xC3~1');
define('SECURE_AUTH_SALT', '3aOc)T?2Z!atc4tgMXSq7VuuKg3wDc?Ju.6b>ZY]mMfJhtHS($3e&/XMWR|V]y|7');
define('LOGGED_IN_SALT',   'ZgEQ[9ImE||mQ8_e8EqUl>`FlnB+dAqxMKjXty_9|n71&!$Jc,|3A`SGW+9PJ!?V');
define('NONCE_SALT',       '@aH/6|s<G?Dy67E@/n`wG%tGT`_}HxKJOCJH(v,~+IH6g=++c|<e@q<C>6]ghNZ{');

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
