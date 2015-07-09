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
define('DB_NAME', 'FreightHubLogistics');

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
define('AUTH_KEY',         'K!1.<bVL<9(0UDp+e`r#f)v}?J#n|np-_Axc<LAJvo5,Sbi{=_<[T_+HQxc!s0Rc');
define('SECURE_AUTH_KEY',  '$ECSQ%Q{.i/nTR( mYKmbK8VHv`O.X_JTh-[LLt,S(|(X!HRQfWjc+4FnP)v)vx ');
define('LOGGED_IN_KEY',    '${w]%n^)Srp(,TL@`qV8Qb#}xQpF!H7B xv_c71mL(Cy,~?la[5%3kuu?~&@?-#9');
define('NONCE_KEY',        '~*%gSz*z**b{W;1JnzAQ:P%{QS!E1PM)]@At-bNsoY~rF++S3:F-pW;V~8-)([iq');
define('AUTH_SALT',        'n/T2tO/Ff}=^pI>Sz@-gEJ0Yz+lbI&,OPyLHZI^qb[0GGE(#%O6uP#p=?$L*#%W3');
define('SECURE_AUTH_SALT', '6<|bOA|pX0HgNgJJmY%.J/.v$w<Ew|;_Bn(IdwtH52g4ZblP<b|Y|c{e-5^|7Cje');
define('LOGGED_IN_SALT',   '{hOGUkaSdo~W MH5KK+s/:!9E}zhOBh?Dr$+MXJRe-~p+UzbN5tZkDdZU{:SvqQz');
define('NONCE_SALT',       'ds[/`V^AXY-~[W~MRg;=U3/PX `S93o{Mgk|s:(G+d~x27mzJ|`,D!OH:l,M[q,v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fhl_';

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
