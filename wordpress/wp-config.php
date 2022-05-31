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
define('DB_NAME', 'chanwhi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'autoset');

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
define('AUTH_KEY',         'u#Zk?tak)P(&@qusX@y,e|f:gtFhw;,X1G!%_2BAMsTk]h/V0D*;2SPfv6L)o:uX');
define('SECURE_AUTH_KEY',  'I+LPy~YN`+R.^H%iq,}/Yb:CRt8,?4~8xgo>(53l`sp9N8!w#5[[/RsgBG6ut84E');
define('LOGGED_IN_KEY',    '=x&1&%E~KnN}Gma`z|B(<VY,bK{F`fh$sS}(q,p{j]uoL:qtKQMJQ~I*eZNq0esa');
define('NONCE_KEY',        '$5(^k<Kqa%,+9ufLV51($[yW%vY;P!Kl77:^;Ktu&|2NfpBuuPD-$?@yc9@f#akj');
define('AUTH_SALT',        '3gbE#lD(K<4a]D -  r.b[5Ot*,`FVp;-_}>0_%N_pz.=q=Kpi@[|j?T<uUZVZ?:');
define('SECURE_AUTH_SALT', 'dp$D~e37|g?#N-8*Q]?waHNZBNQ>pfS/[c##ins-y?o[sI$ozLCNgws0Unf|~@S;');
define('LOGGED_IN_SALT',   'd?+RvMQ#:V(3RWP=I/+D!`e)1FV}a/YC>,hi/HFB#C>IA[aQg%bURX0jgc8y1Q<q');
define('NONCE_SALT',       'kb2$A:Q@efxhMhx]=^Q152FWhJa9vT_1D~;*1K&h%QG^sM{3R_&>AN0HQX*R_tl ');

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
