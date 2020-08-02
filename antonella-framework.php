<?php
namespace PCF;
/*
Plugin Name: Plugin de Custom Fields
Plugin URI:
Description: Un plugin para tener campos predeterminados.
Version: 1.6
Author: Susana Piñero Rodríduez
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
$cmb2 = require_once __DIR__ . '/vendor/cmb2/cmb2/init.php';
$antonella= new Start;


?>
