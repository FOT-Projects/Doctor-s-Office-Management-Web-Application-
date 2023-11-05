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
define( 'DB_NAME', 'borclaia_wp353' );

/** Database username */
define( 'DB_USER', 'borclaia_wp353' );

/** Database password */
define( 'DB_PASSWORD', '@OtS9!D@pi)e.Q48' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'rg1owzdx5pwmprkm55n25aau7mbiufd3h8tjohvjcoejjzpccisfafnocma3gznc' );
define( 'SECURE_AUTH_KEY',  'aarukyiflunbl89bcyseykm0zw1tsags5n901yshegznov1jtr3nvlxebjtd7xb9' );
define( 'LOGGED_IN_KEY',    'ntyhgs913uyacsccbxsek0mle1cybbhlwvwjs5gsrtanaplwzoq1ykcxcagufzap' );
define( 'NONCE_KEY',        'rlngzznumyjs3al0ic7zwwe60sr7gtsbrae3yxbfs4xzmwthts6fydnh0pyhscxl' );
define( 'AUTH_SALT',        '6z6v168rcaenxfrdgxnyf9svjcyfkchoewbmkx2gqg8kr58usi7ri2hduvtdr8fu' );
define( 'SECURE_AUTH_SALT', '14r7xpwqafmwamffn3wkuwcxpqghpa08bew2x5l0g2zp3ymvscutx7hxvxouo8ao' );
define( 'LOGGED_IN_SALT',   'jq9lk0gd9gh9eshaf01seofqh6wqmt12u7zc3gfbmug41gdueeeqm5atn9zzwoze' );
define( 'NONCE_SALT',       'tpzfaktiruayueajvvz0fhiodkph42mqs2t9jpea9co09urzjprqh3jxnbrjsm5i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp06_';

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
