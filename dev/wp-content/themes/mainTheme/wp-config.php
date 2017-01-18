<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



define ( 'WP_MEMORY_LIMIT' , '64M' ) ;
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'mathieuczimucht');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'mathieuczimucht');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ajnX4462');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mathieuczimucht.mysql.db');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'k]JkNv%1f!s 0|&=aT:?*%Din$e8!qnAER1WGjC{ 2Rrk^]jQ,o7]oK5^nsIbzB;');
define('SECURE_AUTH_KEY',  '&MLWR&ViINk=(`qgR:hNux+@~3nkH)qg7M~Br@y(F{o1%xTYF@#xiCbT=%Ek wfh');
define('LOGGED_IN_KEY',    '?P]@Pq23kKb8*~Mac]CtB=0V9CSlFO6#o#gBIG J<9I#C]px<#zR51qhjN%D{yp2');
define('NONCE_KEY',        'b=$Fb}gA0C$69=q:xx*:jq-mu`=GK+c:/M]M(]BQ|-_Q|^V:>~39vaS@~&f6n$=?');
define('AUTH_SALT',        '&zyG1Sh=z/0Dpq+RT0/Ue|CoG=LNP!Wyn{LCXVNSOHE2Wj#yc[a|KP^ihl|AbLQy');
define('SECURE_AUTH_SALT', 'K`aPY`Ck$7O$_p7)_%L.Ld|;iDcv&%G^eA*5&N&nw 0)|tS[g1f|ADjPv<j1Ybp;');
define('LOGGED_IN_SALT',   'jrY=(a1=$AeysM-aM:/z{53,]dLsijRH0:(m1(9J8shN<=_I93^z Mb+.|Qw9p^w');
define('NONCE_SALT',       '$9M.apCiG-d4xOha%3N8Y|:@=pnQ^i s*khQ^A=I5NA!Y_?UCR2{s#uM^<Q}lHS`');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'pf_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
//define('WP_DEBUG', false);
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );
@ ini_set( 'display_errors', 0 );


/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
