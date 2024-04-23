<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_36019417_wp997' );

/** Database username */
define( 'DB_USER', '36019417_1' );

/** Database password */
define( 'DB_PASSWORD', '57.Sp@dnV6' );

/** Database hostname */
define( 'DB_HOST', 'sql209.byetcluster.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pz8f25wtjbgwxdwekqhqm36ifdi47egvs1pkyotx9gkcerxcepeadsvhmgdcuisb' );
define( 'SECURE_AUTH_KEY',  'e2sn5lxaqmdbjum2alng8vxc13rer72uqdiea4j8trtk9jfg4dq4tvneem1wwgsy' );
define( 'LOGGED_IN_KEY',    'c8oij7eqmfjudgqetky3tsyjcberiooof6uzryeshz9kawt6swaix7qwiofdousk' );
define( 'NONCE_KEY',        'uy81e6fwo8svsic2boqzzwuuwsxqe5jfw0wcappcfw2jlq8chid0svx6hequmvdz' );
define( 'AUTH_SALT',        'ahhtk2tmxaacksf2fj0itvlcqgvzxh1s62pkv3gfghkib0wczzbswr7pl5sq8wac' );
define( 'SECURE_AUTH_SALT', '01v1u3d1dpmjpok0kopwoypacfl4dw9zhekgiowaukkkrsawg9hb3ycfuinddz7r' );
define( 'LOGGED_IN_SALT',   'akhwi8reyhjc11zu8p8uhj3vvlavqiaxuw2o7gsrabx5ijstvhrspo45vdlbmwt8' );
define( 'NONCE_SALT',       'j3m47u9ys70u96u4oz8wjsczbp2fa2x4ub6smfxbxcxgduxjhqk3xf5kpbcropkf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpos_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
