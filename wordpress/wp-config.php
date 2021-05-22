<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('FS_METHOD','direct');
define('DB_NAME', 'readingarden_com');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*x12{asli~Jk?~9+Q70#}27%NAbw/$-cBa:,9~3Xw;8QH;Z$0R|F{v,eqU3ad(XX');
define('SECURE_AUTH_KEY',  ' */ytvyyHn^k<3{+jf-J?0TaP2l{VKoEBw[R*Aj}SoDnR9VWL33o>c86vKHP6ctp');
define('LOGGED_IN_KEY',    'oq _q`VRTIiV3*#L1ib j<{;uK5gB0H4M8WQOMC]ll(CvN|uQi&qb|F7)=iV4(>J');
define('NONCE_KEY',        'Tq%.Ryz5)25Zllj!IZM@JRr?W1jHacq(Qj;+3tT-v^%=Wj(uVyD2^!m9J~D-E1{%');
define('AUTH_SALT',        ']1y)L!2b<z>Zwex^WM)4a0i@JIA&[V@p5~$8HCl[Uj3s;1KHM3~<%}uVqT$gO88R');
define('SECURE_AUTH_SALT', 'wUGjg[@s>)SA-3O),PVL]<q1rVnM3fh<;pM+iC;|Z>1V|4Pd)UBu<T#+4|a0ve,2');
define('LOGGED_IN_SALT',   'Z+IsY0|:tLwc@-sfP_bA2iQCl:CYH&zi3a$l#^]]@?aRX@`:57NDM:0Snr*{pmwD');
define('NONCE_SALT',       'sIjJHBUI{tkh8F2PlMvJc2@wA]zIUFrdx3enLsc|;?qJncJ2#/X#jf$pM;&ffT#-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
