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
define('DB_NAME', 'apliancesinformer');

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
define('AUTH_KEY',         'tl{ysNAN@r- *0EG7al=95WO{Qn7RT}<N1M*.@o-GGZwB= j)+9Pi75kk94c<}3A');
define('SECURE_AUTH_KEY',  '/L=?S;oXd`}Jr|{i$Le^EKn_qe8Qg#N[v#&=c3Ub,VOAqzL`2{}}cx2bM@PpcX7T');
define('LOGGED_IN_KEY',    '#w Zvt>Oc[&s$&mB-KY 4<&>mZiFZKLCX% 6orxs_H0@)#e^8I#-`Rh.@IPUP@W[');
define('NONCE_KEY',        '|hGr q9b5<`c!U->)m}4A$B3d&S0!!/<|Ed&)OB]Nh3P5;T^P;<2wrbfC,H/0skZ');
define('AUTH_SALT',        '=H#oqT1>1d;]o:^^kL 0Ftx}[Mu5etds-Uj`n%oXL[voBF.#~WQ456WF,pKO0@eG');
define('SECURE_AUTH_SALT', 'wB_w=q&Z_556S%$m;:{gq,#f@gio=k_LV:g_#Y1eDfmjcx|?]d(u/>s=m}@tS5$/');
define('LOGGED_IN_SALT',   'X7PSEzrcmORq/FU{^KVOec+Xh]KI$NmA@;x#Ga_N Ac;R&fFy*7)YM`UZ1?y8Z+[');
define('NONCE_SALT',       'mv9*%0xkAoq<G|hM/]&mah;Qd[V;@:X5V`QfLSWG3diG?{O1Kd#jV?kx0,u| C2S');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ai_';

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
