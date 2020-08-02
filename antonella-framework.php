<?php
<<<<<<< HEAD
<<<<<<< HEAD
namespace SU;
=======
namespace PPT;
>>>>>>> Cambiando namespace con php antonella namespace PPT
/*
Plugin Name: Mi-Pugin
=======
namespace PPT;
/*
Plugin Name: Plugin de post_type
>>>>>>> 45919e4231ece65d56f4b3e9652286899fba90ee
Plugin URI:
Description: Un plugin para agregar un post_type utilizando Antonella Framework.
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
