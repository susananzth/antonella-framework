<?php
namespace MCF7;
/*
Plugin Name: Mi Contact Form 7 personalizado
Plugin URI:
Description: Creando un plugin integrando el Contact Form 7
Version: 1.6
Author: Susana Piñero Rodríguez
Author URI:
Framework: Antonella Framework for WP
Framework URI: http://antonellaframework.com
License: GPL2+
Text Domain: Susana Piñero Rodríguez
Domain Path: /languages
*/

defined( 'ABSPATH' ) or die( __('Lo siento por aqui no puedes pasar :)') );

/*
* Class Caller.
* cuando una clase es llamada hace un include
* al archivo con su mismo nombre
* se respeta mayusculas y minusculas
*
* @return null
*/
define('NELLA_URL',__FILE__);
$loader = require __DIR__ . '/vendor/autoload.php';
$antonella= new Start;


?>
