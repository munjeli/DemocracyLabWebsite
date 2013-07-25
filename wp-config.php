<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hackDlab');

/** MySQL database username */
define('DB_USER', 'hackerDlab');

/** MySQL database password */
define('DB_PASSWORD', 'mboBuvc9258o');

/** MySQL hostname */
define('DB_HOST', 'elemunjeli.com');

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
define('AUTH_KEY',         'UTPkEPcc4A(H6@v@@5zfI,*=$w!v<zgy{yhs_;jYPO9~P{+|pPJM#Q+6J#F/QACr');
define('SECURE_AUTH_KEY',  '^@G09al7FQCk+1,uO0+6GQ|)e{>f?J,C~rc7+>^:i]UHK3X>iz_Y++oy#74,+3j8');
define('LOGGED_IN_KEY',    'X}dn(aTbXx0V4e/+~V-{+aCg_psR,so`7ewo*4],r#Nx5J;J<4HsM,p]|Etr*7Ex');
define('NONCE_KEY',        'TSRk_KX/zxH&UVmTU+SyQ`53~)$>4/yPZdj*;K9/)A|c-ZM=35`->[V[RyHYmJT|');
define('AUTH_SALT',        'SEtq~Y;W6#N 1G)kbkJshsC])~|dmE-Fh;6+1|rGw0SM7p8jaUDX2y9R+Tie)4Q=');
define('SECURE_AUTH_SALT', '#KuZS5p#%v.{eti]|x E{|h#@6U8U}I*>e$GKAPq>N9smH@Uvyw~7.&;JFHxyGy>');
define('LOGGED_IN_SALT',   'NycS@PD`qw|&XJPq6>OQnrgMg/{1l2|-lE$=L-r?/zyU||IVZot3XFy*UbxY-Zz&');
define('NONCE_SALT',       '~T?XNIA7+MuR5~N0Z/p0+An8LubZoU7^ovtwq+^+ACxZ2@A`=jfW)pOX?A#.bD`R');

/**#@-*/


#define('WP_HOME','http://democracylab.org');
#define('WP_SITEURL','http://democracylab.org');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
