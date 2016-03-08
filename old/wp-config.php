<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'seminari_2014');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'seminari_4102');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '.MP8_NNm*JWa');

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
define('AUTH_KEY', 'boHf2rR2i5md)n8W|,3]:|E=6o]uLELNg)h)qG@Vfg~^KaUCk 1|x%N(CvAn`8}s'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '<&)Eq;*|lGo85;8K8DA-tG _N/28bV(fR|l!yT5#4DP//i:|7V+3+Z#1b*IF~tSe'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'qs0T$[-KUYrgzz]Z+d)(!QK~E]?9-#*2d>SmXSMn@CwSU?)Rh=Dj!(_+b$+w!VM;'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'w{1hiud)EKXc+S#Afwk*-vphT#H&ec6v;_H}d*r@Re[s$^LmsJ^&}S$!-WV~_7]$'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'OHDYDW3db=amdPDA))zAhPm;iq#r35#n,cXa>*b:OHVRp+;b/}3ZYr_+8or39l+-'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'x~TwsZ0&P!-KC+]}r#T@W.WD7Br~TriIp%8.1U%QE5[|Fdyf5Rjk+hVQrA|=xXPu'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', ':J7aQ#ZL8O]+Z54I]Ohpm!z=O~j@{+(lV|0 0,0UB)X#o%G|wJNra}>Zw.5$?L?4'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'pkzOmpFI~i(Y&ThH;>$-#8jE%mI6P;hj{ +< HD`5*{!nzE@justS&0NukvM#`BL'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'si14';

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

