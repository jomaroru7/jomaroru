<?php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db-name' );

/** Database username */
define( 'DB_USER', 'db-user' );

/** Database password */
define( 'DB_PASSWORD', 'db-password' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '%_M)_-.>/@&bS+}RlV:O5IYQXS`O2A$!BnRtckA`:1[.5#3${%qhB1^oM9{S;(`E');
define('SECURE_AUTH_KEY',  'NjCd<N+kGb@R6daH;a1ilFB+xx|lz46h/IW)|)9KAGE@ROzhHm;ov8#Q_r~*r@N5');
define('LOGGED_IN_KEY',    't/^x2f6n*:q(3dV1j,Py;a1J82=(9{F+- +?$k)/FY!I1-1ncB]JW<FyL,0-c9fi');
define('NONCE_KEY',        'V8YyR:1R5{jc#1U@;1Q6a6MJ[zr[lJ$[<G`;iiAD<10A#I-TM6S:cLfz3%$I=Q8`');
define('AUTH_SALT',        'EEL+w@J-;HG)k/fPH<f#H`v@&#JF_qQ9b0/Ul-%22Q,^JI#_|&h{JCt7m`&A2,kV');
define('SECURE_AUTH_SALT', 'C!Kri14VVogW9UR8+pDA-J}YzG(+e(8hWc,VnGd|[`Z]*mTW (t5)xN== +QG-1A');
define('LOGGED_IN_SALT',   '~M.6b6(MtphepnC-aC^n,&R>w`||b1q.z&Y;}S!?i,u_FWKb>|(0=4EO.r8AC0O|');
define('NONCE_SALT',       'WBO61=gAV-yGQQJ#-q3Io-+Rb=+aUsp /|NQ<,q|y#~H`>IMpR_tLp$x->yN46|Y');
