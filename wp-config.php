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
define( 'DB_NAME', 'midterm2phamthithuha' );

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
define( 'AUTH_KEY',         'VZTS~)C*6<3K5cU^dkf&Q0^6f^mgW]i6u64,eiwXhty8T#O1$EYXwQ81+/Y<jxi]' );
define( 'SECURE_AUTH_KEY',  'H5Fj+B/bMTLN{Nt0@|r-1QFvBFl>4 `<:?}w2cR L)w#+m8>hA|k}khv>KkUI=8[' );
define( 'LOGGED_IN_KEY',    '$ePNn13Tt0(aeNo$, kCzNBpJQy~KXbvv5E,I/~;J[#pStzZCGBgwhjJK0Sna5ae' );
define( 'NONCE_KEY',        'P<jWf)S=#|co?#;iwVO97>)fp}ooY:OQ^Yob%b8d-!h:o%CBhv1-EVJB/JE_t|!k' );
define( 'AUTH_SALT',        'I6Y5{TenOf|@ac335<FyW]%`W5ih-2B*zU%s5]D#&m3LFzvzLM[!R}RoM9mUu%)k' );
define( 'SECURE_AUTH_SALT', 'khUhSjV9iELs?tr`$V9uzl&`AzJ_}O6R!t<$O$:~9tN1yRP/M+x?%g{^<E)C9qm?' );
define( 'LOGGED_IN_SALT',   'p!;Hq}2Mm n4Zx-4lzcR>F%aq`>t8cdl]~^%h2[/$B0)jm1~Q0s.Y[I)y0-q2RsO' );
define( 'NONCE_SALT',       ')MqDS]]a0$UyUz6G#w|ji:u:7yIBbvYWrHis^&pxi{%16`eaA}%R+Khg3y$kkq:M' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
