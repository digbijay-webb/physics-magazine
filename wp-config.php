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
define( 'DB_NAME', 'physicsmagazine-db' );

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
define( 'AUTH_KEY',         'LiX1gswDnw&@l_8qT[KNy??Yb4v{!,?02urJ45|mP]dQ[ltQ@2dVU],>BaHpgoSO' );
define( 'SECURE_AUTH_KEY',  'QjZ_O2$ j#lTY6-;k-`4F?I~G=6a6a/0pn|9MYWD!|%o=^XH-]t,GplG!S9jh7h}' );
define( 'LOGGED_IN_KEY',    '~OGaKW]z[x8+VI00HIP.$iN67FEp>_S2jcdU-.O1yFdwn?2~xU]}M53K?ot`0]sL' );
define( 'NONCE_KEY',        '?/B)@z5e$T~(vvjxI2G=Y3Z@O:r5UT;ZNqj7ooUK$JQun{N?EH#P?C~&bpne=eMQ' );
define( 'AUTH_SALT',        '&/9]iR@9&>49fJ<l{V%UC{g7h}P8Pac=thD1M+qmf2+ow<|m}4Nj)L$yJwn6p^aa' );
define( 'SECURE_AUTH_SALT', '7AUun*)&@$i.@>@2ynzB`$I`(:$GPYh|PglbJ}OOCpSDSY}q3Lmm2~pLoUEXzk|E' );
define( 'LOGGED_IN_SALT',   'C]vgR{,@US)Lb@5*#1=XOjBQlne:qWCd@|:;q[9*3Vf{gd.U,n+QkqszdgV9.9Hg' );
define( 'NONCE_SALT',       'cVw7wdL=DKdzZ)]&HqAIK;86{f|_.p{2?!E?K^s$,f6>TD0=R3axK4~HL#Ht7/#L' );

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
