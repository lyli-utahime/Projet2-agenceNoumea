<?php

define('WP_CACHE', true);
define( 'WPCACHEHOME', '/homepages/29/d796018631/htdocs/clickandbuilds/Nouma/wp-content/plugins/wp-super-cache/' );
define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'db797072716' );

/** MySQL database username */
define( 'DB_USER', 'dbo797072716' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nzWVTSioVtICQGfxuupq' );

/** MySQL hostname */
define( 'DB_HOST', 'db797072716.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'WDcAK PgA7Fv,cVRCB4Gw5?<-eEk5Lg<feIz?ikWARNmlG;pt<bLfMs,GS8ZEq<c' );
define( 'SECURE_AUTH_KEY',   'Bj1 c?uG`1B}kCv&osj4}zK!uLc=,+qlI}f|iGU**FM5Z$6;Xa5PVyaGX9|]9&FA' );
define( 'LOGGED_IN_KEY',     'I)qm}zIt|bp1;KVbgnz[^p6(+sEYUcP[cU$*MkS`e;y(7+$@CAX.Zfog-D}BC/ky' );
define( 'NONCE_KEY',         'TPQE3vQE+qoj0ktmTg49SlBdewSm/V2w8ZJ-~qgTT3}k% .#g!WB)$X=(}FgAn3i' );
define( 'AUTH_SALT',         'aDl8FIs2(NKVQ+yG4,R(Dc)1i%FbGh5ui(Wc_Kw6kR+~Wp0@o_e2FW=Hn4z7&F:E' );
define( 'SECURE_AUTH_SALT',  '-?Z*+%rp<1Xl%4VP;v(~Lv*D9|#{e.[fN^%D,w|n:mz:2J<1Q(v]tf08.X4%OM<$' );
define( 'LOGGED_IN_SALT',    '8~{rYYiO%RYp #B_BdW,Llle5|//S$8*5gj1|~HUC/`rk*+R)?fX(9^~`RFf=c_I' );
define( 'NONCE_SALT',        '_gjYvc$Q(#6IG=fAcO:XFg5n;HY^Pw}JWi:R^N[NAi~ub5Mbz&;CoOSS`Gcdn9};' );
define( 'WP_CACHE_KEY_SALT', '>(jm%`8C#0F&;tZY~;yz(OaR^,^NGT;xjJ}-gOc+{{&|z!e1-DI3I7aut (M%I0l' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wEXxMZYT';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
