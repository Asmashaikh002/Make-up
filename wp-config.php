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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpwebsite' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '!NGSjaPto&&gnN^#mJ&lGc>|i=2XADrk-y:vX?G-6q5q4Q~|&8[5;Cet!WVkRwF[' );
define( 'SECURE_AUTH_KEY',  'g_42PX.:cE@Plm9k6<t|HwP*wV~%G4&@&4$36(*VuXDyajaILTja_I{C(~kub<s^' );
define( 'LOGGED_IN_KEY',    'Ub?0d~J*diI18AGz=ifyW?a=Xk5}N2)5%@KaG%>*iORsZs#_3TN6V47CT99ZnA=Z' );
define( 'NONCE_KEY',        'r`:w56^oQ`o{O_|#$Y-$YQF;W(x-B ,DaimPie?b-M#%d~~+^tCjdL]V?G%nqo~n' );
define( 'AUTH_SALT',        'F]/d])~_J5ESYTb]|M*Re1t6mj_X1>a6XU/~W(6Ym/H7YBmirL}s_(E.iKkUUo{]' );
define( 'SECURE_AUTH_SALT', 'Nqm5{^qbCf_zbt8SkI2Y@^YzPC]q4g e.^uga~~7Mbl&h%1|7U+7.=>~t`VO$V r' );
define( 'LOGGED_IN_SALT',   '>9gVFFz/N:aeNSJo`bOgb%:-&|$3)$2o[wW k=6)nU$1AEOI9,:[?s{o88@(-RAl' );
define( 'NONCE_SALT',       'K+o!Ql%Y^m]/_4uqx6Pc$=kFi6^lOM0#[6_5De,;7@./<4x|iSTA,@Qj6_.V0t#l' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
