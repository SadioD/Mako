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
define('DB_NAME', 'makoims');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '?ssmL&u[]NP,kt;JzjcLw3fg0j*S[(lnq-;Pw=&AD%K~|=e6pvZ&uIL:B|2ZKE^P');
define('SECURE_AUTH_KEY',  '/@ESpDsaB6y/*1t~?-?@Hyf,aXf9: (kBp#;xAQU6t/LN!>@}&ky^ @o7AARLQ<*');
define('LOGGED_IN_KEY',    '.Y:WB_sg!XggustQ3|Cu3|19)N<|-1`-!p[gQ|aURedKIEA]Qc+i{h?HER@oH&bo');
define('NONCE_KEY',        'bW-|1msK%Fi~E@`1825,A++GnN <-9d*-lYh]pko~zR$x*@r>;ob *4P|4wWo}H8');
define('AUTH_SALT',        '|v.kWlQ!4A^JA-ndvrhIATB-KzzH_Y3:HHJqz~{Io1mB];sy_k<<q,A_4_Gq~tW^');
define('SECURE_AUTH_SALT', '&^+0|{eD6c57oD5Kp!%ewl%,8|@v. /W?y&$H`cp$z1=59Gm]k !|Xn4K?WPXO+#');
define('LOGGED_IN_SALT',   '..ZX~q*X44k?a/@WtE2I!9$I|@nT7v<mL@CN]%~M <xk@n.G5r*O cr)CHnmTG.e');
define('NONCE_SALT',       'uHOa@]Wsj`6;*4$ {ot#-!0Q1A~,1oU1yHNAMiU:al}rof!aPfFSR`:z5jG0CDi}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ims_';

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