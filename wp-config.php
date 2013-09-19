<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'jorgew7_plgwp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'jorgew7_plgwp');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'prueba123');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
//estas son las secret keys, las cuales son usadas por las cookies para validar el dominio<
define('AUTH_KEY',         'JKe|P~QG5?^/_(%b6+?,R`QQe4JhOCcD`hdT}q|$E]{gKbBad|a>2fO6GuoAS zJ');
define('SECURE_AUTH_KEY',  ' !ZFb?i[iS!|3L!p5iyZgZ`f *3Q[CL-94tr_|}fy`_<9Brs!NH)^P.blL]+Tq:&');
define('LOGGED_IN_KEY',    'N TC==ThB*w[AOJu@D>#EBg$R_Q!qAfh&A-|J-v5[=j`EHpZv703C`|hL%^W<T:b');
define('NONCE_KEY',        '78]>pNH)]8a{d]ow+-Z,LR+g;&wKXbDi2G4X$xWe.Ko!iRbey5Wu$%s0xaoFzy@ ');
define('AUTH_SALT',        '1OT:[kyR22t$?r(Ji8JE%K)AdZsR>0h2Cyty#}<U[%~mtY0fb*GW:U+MQ+x2(I[U');
define('SECURE_AUTH_SALT', '$bDj.|1:qACtGygk9TP-^`4}((-+,fX||$vTUb,;<3KaKyc^g-ZfzUJEYQGc-YCZ');
define('LOGGED_IN_SALT',   'fy=7aC)LRu#&I-cBik`Sf5E<`gy@1<{$*RU/~Ce53z2g:waiA:gaGd~shym0B_QS');
define('NONCE_SALT',       'uZyjFCTP=,V-uDjn5Z~S+0LwTW}U^|9|S=$gc!Z_O|Zk{-_X9n%2Nb&L#_+};[V-');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

