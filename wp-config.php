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
define('DB_NAME', 'webonaryMultisite');

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
define('AUTH_KEY',         'H_B~M&4!%x|@r6?oQ&/{FE~[ wS@u;`mq7O+W:&R8AiSEpI8JbR9r-$Lw4a[V3[u');
define('SECURE_AUTH_KEY',  'TX[%#-H|]zoP>a+yv}D[V1fAKN0^Fc)y-3}=/(K_bw3a^:17+mj7gA=?`;*wU%`Q');
define('LOGGED_IN_KEY',    'S7yD(1+%4:R-r r+q_A?BO0FmC6r3U96Uq|1:fwi%:RQ(U#8PgR>Vj d?hd|swD~');
define('NONCE_KEY',        '?y1P.E>||rkm6$G(k419+IaJ@gzRhUB3c[^Q!=%^-RS$#+>YOo(vW;q|PGSF^fzT');
define('AUTH_SALT',        ';mW5YmL>gh7Ft>: wd-XL|k&RTG#mZSOol>=L*N)^13O/-(W+-Y~_J5:ijtR|z|5');
define('SECURE_AUTH_SALT', 'woLk`gC__=w_dt2aT)rLKc%@mT`+P_Ke5%+d>ZF5KHRyIO_{TVefK#gFwRQJVeBu');
define('LOGGED_IN_SALT',   '6 v;,![%Oj xsiyi%R?9TDVb-(ryiAE+#wR3y}Q&xa#[_z97ituU)QS$a8mZv+>u');
define('NONCE_SALT',       '$`z!2H9%jEXiZpw/8w++.Rla@B!nD#$`U#I}6Nyis+}zQL)JWK)Y#V=Sn^j, >WH');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/webonaryM/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
