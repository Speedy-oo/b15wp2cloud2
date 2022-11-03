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

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wpuser' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'motdepasse' );

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
define( 'AUTH_KEY',         '#ru5P$@AXNXQxY2EAV%6_RG2K@LdQ0:yGq-7.nRlvk1O:>RFfNlKncTjS5!m(Fg@' );
define( 'SECURE_AUTH_KEY',  ')4QBThf9&)]l4*w5Y]`A-#3b1-U7XQLHKesg}e<m5%+:SETa|I^Y~3[gWLj2J$kL' );
define( 'LOGGED_IN_KEY',    'PS-QZA?=6({Z0!/]s[fV!B74?JIg$z&u-0aJ7nc<nKPT(k`;XLW|jw%W_ORxTOU[' );
define( 'NONCE_KEY',        '?qFJVEs5`y0My|w[/2k<S&@h6t{4D*}cYgDmynC@})@>{^^GcgNfNkA%Y4t>B[a?' );
define( 'AUTH_SALT',        'GabZde=`K^E(t;ahj(hKvCO(uN/{fThNqolV-ECk0pr7#pA$ewZ.KnE`P.4d6`3$' );
define( 'SECURE_AUTH_SALT', 'myu0v!z3,=~IJA$;G }Jq=k^}v82$v;KI!,-1FRul`fg$LDW45`S5~tueK~!T)<y' );
define( 'LOGGED_IN_SALT',   '$t&( $;$7My``5vuWSZba;Iq{ %(:iZL!wixum+<>~HLh>GE0StL/:FtsJUB1u[)' );
define( 'NONCE_SALT',       'GUwe^Y-3{|+P+UlcyKJL%?qbwAR[b(17XE}_v(dqn}iTvk*>-Z <x$~hm(RjmZ1*' );
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
