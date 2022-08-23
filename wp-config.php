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
define( 'DB_NAME', 'wp_test_2' );

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
define( 'AUTH_KEY',         '[U:b5T~rN*P^2q~0o h,l}*1Th8#ZrXIJ[k)hhG!-m,D<Au:^R7X<#h)9g4!_[M2' );
define( 'SECURE_AUTH_KEY',  '#W/3<S$<| `5~2^;Qp5#QL/eb]DG_y$3kHN_y87]Y;ozQnN%nUu^X]gn<eQ>q|pe' );
define( 'LOGGED_IN_KEY',    '<X?7)q$UR:N5`91b1/Ko]g&JLb3R29~(k|$wa=|g&,I8.WRU/O964}M13O9jV7xF' );
define( 'NONCE_KEY',        '>[f=}lnwS2HD{owF~JI7@GuD*kYESmo%Uw4e-(MpIcGMIWw4-&0.(65jo=9nk1*~' );
define( 'AUTH_SALT',        '=/;(hP)E#mn(`!2DLTd4^tJju4|.Z4{X!bM%U^V3DDM;{GlIu+1xrkW;^40.)#rk' );
define( 'SECURE_AUTH_SALT', '/ i*-)x}Xj^0b::FR?&)/Y#pI|qex2+!uxB?kD#LV<QIn]]QM`3M60olxZ(bY/|K' );
define( 'LOGGED_IN_SALT',   'Qu$?25m;hQSB>t=[u2m,1k;+NimHfdg<p>+X5Z$1+tJ.kzA@wB$Ux8K!Gjn|Vm|D' );
define( 'NONCE_SALT',       'C;G$4:D^.sj[cPKp#}tzlit?g?6?#n*+aA{O$L$Ew]+sI-e%r6xP&T0/uU&,0(fE' );
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
