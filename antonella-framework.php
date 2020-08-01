<?php
namespace CAF;
/*
Plugin Name: Plugin de cambio de config Admin
Plugin URI:
Description: Un pugin para cambiar la configuración del administrador de WordPress.
Version: 1.6
Author: Susana Piñero Rodríguez
Author URI:
Framework: Antonella Framework for WP
Framework URI: http://antonellaframework.com
License: GPL2+
Text Domain: Carlos Herrera
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
