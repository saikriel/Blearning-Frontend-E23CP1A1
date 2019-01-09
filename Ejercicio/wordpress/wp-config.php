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
define('DB_NAME', 'sem12act1');

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
define('AUTH_KEY',         'E$w#q;zK-vB;7L}G>Qb3@=p1guw2CrkPoNs)_3cx3X{5KvEA>(%#[o+Dv~C@bq~F');
define('SECURE_AUTH_KEY',  '<^ap6^t,<h;=IJBo]&2O6-1Jv8XpW5Mq0qymrk=Zj>jSFaX[AuriUtodNkq$gvH+');
define('LOGGED_IN_KEY',    '%e2$:Bhc5KRT_t(/8#.55t2xq`r9}ZzOEhMjFK?-{a[iI`d@^xme1B`|i`ibq:fO');
define('NONCE_KEY',        'xPGAlbM abreYbh<;Bq-()|ZIT,g }QQqf-;^guS?<yfC@]1wiTgZ[1(w MB@Rfp');
define('AUTH_SALT',        '3QhEcHS5I(.L,uHnO|r^i1q?o3iKS3kqU?S?-(1HxNzjQM[J(E-zC_03j^.`cq1$');
define('SECURE_AUTH_SALT', '#4jp]Ya0;3a|P{yMmBpM[p Ec0c`W z[88eNqZ&PG|p?|,#`0U&>YkbIiLLxI8o,');
define('LOGGED_IN_SALT',   '%ILa8^YUqmMq?!pvaq<./v#=&j+0a!T#`+jz|XazIzW1-E(batz1S.m>9j!!8)2v');
define('NONCE_SALT',       'E{G@]CgDQE,#jb9_SGfO_RGVPf1NHK3+];|w+{mS>Eao=f&C^I{;uD=#N2Qov-+)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dl';

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
