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
define( 'DB_NAME', 'taktuk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DMR4Wdqfadrp9KtETWDn4P10WMJ6OVu8swluGdkdRv4g04bUgtPm4MPHRLQxQKvf' );
define( 'SECURE_AUTH_KEY',  '25RM8Nr2UPKFO1ifNkfIgODxpw0ruHjsS5KVHMNIsLCz1cHNIAm0Htp1nOxa2FFD' );
define( 'LOGGED_IN_KEY',    'FMInwrhDjklzic1O9c7ef5lkDqNcFWc6E7im7a4McrwXW1HAymsZBNOMIyJKLCiw' );
define( 'NONCE_KEY',        'WOSWNfRbpB3QEZFy7AaQVKLjGtT5mtpwFg5Bu01FQM3LXU1d6BFpjwBjvHhmYtjn' );
define( 'AUTH_SALT',        'x9sd3xRQ4rE6HXFwz3K04b4QpSMIA2hdPhS1PwTKwGKi9t641kmz9ShoKa3S4zbx' );
define( 'SECURE_AUTH_SALT', 'eX4HuMp0Res85AmmoI1zDd7XDH270a06dLjXlJmccE3wzlMfIC1aHj2xJWELcPdz' );
define( 'LOGGED_IN_SALT',   '8KIBkS1HYZCJ5wsXUPAd7vHcRkWYsy3i69X1fyZnTLrcuMKa5ZxBJWTObjYnsqzn' );
define( 'NONCE_SALT',       '8SJNMAY7jllI9lv3fzmk9iESKwY0zJApBtq8J0n3AjV06icyaMFWp1wvBpMatUtG' );

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
