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
define( 'DB_NAME', 'mikewattsdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Gq fgLt~0H8&8**@-nO /z;w,V/&Em$_F#UhVG[&Sx)AswKW;p`{[4@*K12Ba;BK' );
define( 'SECURE_AUTH_KEY',  'U:pr6E_+;3B$C|Ud<5]u)SUcZUkX0)Q0mLK1[w~3&$k%Z%N?@M}(MQ28{e|)B,qO' );
define( 'LOGGED_IN_KEY',    '!!JrZ3+A5H&H*U+v76kk6Mr=;I8TSm7ihXl~PCOw/:bFFbtaJ4~)EH=J@nQ`Ba0-' );
define( 'NONCE_KEY',        'x:Te>432gkw4Bry{vNsa]y.isOl4}NO6a3i[Mvm+z%d8*e&5L`aYctVZutWSH`??' );
define( 'AUTH_SALT',        'zP0[O<)!,nQ5pILL]&}K|^ti;%lRzak2J*4#L*9akX[m*<}pe3-vCmWWIol QO(/' );
define( 'SECURE_AUTH_SALT', '#Nh[XDQkMSXyt0;?x?0z+S=iBmr#+tml0Wi]]7En]J2{Lc/h>~V0_plj:_pOP+>/' );
define( 'LOGGED_IN_SALT',   'l1GmimdC-dPA?QZ<6Re=|.BqhpT5SY?F>/m2}0Bff#W*3e$txtU$7[ZPG!uAD(?G' );
define( 'NONCE_SALT',       'Z&4s;xf-oWDDjgV)(_P-pPhDOUD1m@$mQ1] g<fAv#@jyC L~IRZ3L*+rq_(pe6y' );

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
