<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

define('WP_DEFAULT_THEME', 'learntwentytwentyone');

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_doranco' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#(4SFI1K1Fd1uBqn|t_``={Dr<_WH{`A+aHEwGt~&fm2c(jN0aPPI6YS>v*7KB(G' );
define( 'SECURE_AUTH_KEY',  '4Jr+Q8S`GO#t*:52iz<XO~!ncnzd2Xvh|(xPMp1{8bA7X;H0A`/94a$I.CsH9YD*' );
define( 'LOGGED_IN_KEY',    'kP!C{=7qzJ,aqJe.z-7,E!aM@4DAzFc?SK7%E]4y=G:V R6*w_.5Md51*DVh|S>G' );
define( 'NONCE_KEY',        '6pa%_AiQxR{6aUL_Id)_*$cu${cBgz*[En>g|;x^%%!PU]E+Re:`C hDD)&kXyT~' );
define( 'AUTH_SALT',        '9(y_,v3yz)JalUC)#G4Th3W5iKYe$}JWg<nHW3ncjShvlzJlQ-mp#jG.S95/H/]7' );
define( 'SECURE_AUTH_SALT', 'XyIOpWgd#x2iJ2X?9?Rmr,xTC6r;kS?wm8$o<scZv#mZD1JSnn@!g1|:bTE1T3GP' );
define( 'LOGGED_IN_SALT',   'a@j2[=2FB_&Nj`WSq [V0oNig}=i*?G(Ue>E~)K+]L60]1cDAcW!Yh/4zO@;VL0J' );
define( 'NONCE_SALT',       'qq  USXw+MFNQN W~J}~!:hD,U&m7&Y#amO]p0/{NbxRtUkI:_W42/GJbdLXy{L3' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'dwp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
