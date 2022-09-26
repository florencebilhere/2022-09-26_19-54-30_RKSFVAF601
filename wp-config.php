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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ezcb3403_wp858' );

/** Database username */
define( 'DB_USER', 'ezcb3403_wp858' );

/** Database password */
define( 'DB_PASSWORD', '2.t9p1RIS-' );

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
define( 'AUTH_KEY',         '0ldeoo2gols3cdn7mropdud5c7lpqiwxsjv89g4oitzxngtobuqx8fpd5ltdo5m4' );
define( 'SECURE_AUTH_KEY',  'wb3nbnkxhrmdjmwpavpcjz4miuar3dyywqsnj0ep8r4pitgsgmd2zqcrymrso8xc' );
define( 'LOGGED_IN_KEY',    'bqeea6xzgywhsotxbi459ekwmanxsio6xqo4esp1a967ga0sr6v6u6qawinabcfn' );
define( 'NONCE_KEY',        'r2r889j8oh8bxj0tdym51r6lfcannoqzgon8thojltsudjeo7cc6o3hpnaxeijas' );
define( 'AUTH_SALT',        'b0jhbfvlgagvxnfoctqdkt9gz3a3atyefnahw3gsf8443i8p4c3axheb5onxouxf' );
define( 'SECURE_AUTH_SALT', 'vozxtdjffjuyegdwljvxfvakr4vmidkwfznum2nutu5b0xqni3umy7rtlvs87krt' );
define( 'LOGGED_IN_SALT',   'kueji15rbneqhn5e1blkstiv3nw6aipqu0pzplho6mtztbswe6w3bygtnvcnvvlv' );
define( 'NONCE_SALT',       'ajaqzltqwdqjtt5nrof4hkstk9sjepzb1zo6ocog6bcfom6ghfg5zuo3n3ucj8ot' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfg_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
