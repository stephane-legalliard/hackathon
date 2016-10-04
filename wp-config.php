<?php
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
define('DB_NAME', 'slackaton');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'facesimplon');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');



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
define('AUTH_KEY',         'Dk0UlAUXD0~H-sG8_lzPvXCTJ$MC.rt80<>DN0sK!].c;2GP({5p&Wf}56!~Vq+M');
define('SECURE_AUTH_KEY',  '8i$Mg|Of=#QMSlO~!PV=`mK$p:xW#%[CGT~c:DZ!zH#t3^?@}LY$$~}KPT,auBZ3');
define('LOGGED_IN_KEY',    'o}=8#!cZemRM/#3J^#CIavV.p#WZSnfu57bsaVqjGtUv(>ofu)?#]ji)O}T`Hh^+');
define('NONCE_KEY',        '=5ZqKAKSm@oK+iecX~Bm&+G#m]~>?xLHRLJtpSH/WEkJG H]bPy_a4]-AFLX/Qm~');
define('AUTH_SALT',        '[?eazClbzX1^O+?1P&{4Z/Hi!L`JpisNktqWn2Z `.~4G&-6w $]Y%EGlw3dXsu2');
define('SECURE_AUTH_SALT', 'r6Iaj%(M$$9PYu@E*GmWy?0B mk9|m |.M|AN->.`QG:T`q8cCh7S}b+qJvL]f*M');
define('LOGGED_IN_SALT',   '%_^PV0rK3F/I_:MV9;}V1:hE^!]u1dLD#`{T1y>+R2P#7jo}+>#.M_mO+bga%7C1');
define('NONCE_SALT',       '=X?I?Xe}Sm8?_]j(@pP,:A~4VL9oB6tR)1Yn+NJ##4cT0^Bf!F9P5%5_UT@D.t@H');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');