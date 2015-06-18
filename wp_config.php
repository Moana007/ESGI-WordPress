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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '%Hxs:t)|mri1J4Y(=%5*.-n{#|r_v1$rr9<d,$r.;wPYUT|fyFZBN=H:3&{-AVGI');
define('SECURE_AUTH_KEY',  'v;,bfR[Qj}wb%}uFu .S|[0)4|x#^hC?T/fkKKP9`s#3jw~@|rd^|0WZ`/VytF)(');
define('LOGGED_IN_KEY',    'uR+aJIi=U1%:^S=]-u28tH@k<Q<VZPn&HH+9gq}:w+sK<HxrSGq*7lQ;Ch|Zjb:t');
define('NONCE_KEY',        '(Tsknm5J`5ff]u~fc`-AKr,S?)$b|tIc;I_X!p=p-/qE}),f-lm$z>l$wTd!av9T');
define('AUTH_SALT',        'P{ZNW2n:VysA{L;$ogZ<.X-:P#$4dks`8{]-;;<K+&U#^Q6=o!zm.^:3~>Zp7$-~');
define('SECURE_AUTH_SALT', 'hZp=}Inx!U[LNvSX]?vnRy$}zuu9HrZAp&?p3p!kg=P0U b&,Hj+}u7`5r#?E|+n');
define('LOGGED_IN_SALT',   'KASGL@AbNkm$QM-8>m*7o?l8~@NQ!L.%CU-(jKx _-Hz1w3v,.}@T;),mSjX]T([');
define('NONCE_SALT',       ' )<{}n6S|8;RgOU[_O`0B1bP|*tbc397i A>?#Q=<_yypw;,j{dg[;e^BlA0@j^z');
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
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');