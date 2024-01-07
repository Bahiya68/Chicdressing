<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'chic_dressing_p7' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Bahiya' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Bahija6884' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'LgQ*Q&P`2lst|B!a~Vw zt/zac4~CtE=CVqN,,SYD}N/<W%QZ;l`/IjDmb=~VI&N' );
define( 'SECURE_AUTH_KEY',  '9>*%$TDZ-8FY.||#|B}~jAY)r0 9j{(R>H|f[9 FLpMnXJ-7$cnu1XrZDtg?=Gxt' );
define( 'LOGGED_IN_KEY',    '&I7)GC>`O)g<+;W3h3]f~+8! TyYe%%3%xCW! w2i>W &XocgB%m7.)myDPhMy3Z' );
define( 'NONCE_KEY',        'H#5{1#o]PF0L+99aS;e/)p !WL2n#k$<Z8ckNxKzXwAt+8..`W28o^%/m<WOUicM' );
define( 'AUTH_SALT',        'e;t<i_,vDrOTr1w4bF$D#XA5)>i3UPS>BJytzrG~p1/8k.wuHJG*q{.l.%j/}8FP' );
define( 'SECURE_AUTH_SALT', 'A}P8<M8m:Z#k0Ssl8CV!$g#jI_RYQyRC3pkkh}.AS0f#T.,GMZj.4SR`3{zGYw%i' );
define( 'LOGGED_IN_SALT',   'c^0%MO)f_6c.QTh>&x2U5a bue?5*e3Yj0FngG[C@ST40*o:, 9PDbWgt6PCDMO4' );
define( 'NONCE_SALT',       'S7BUEi0L0n;* ja4o[-;d7t>eu_Wvp+x$*~OFZ]G/,O4!2QBl~NYRJ>2saJySL/s' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
