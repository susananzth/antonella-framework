<?php
<<<<<<< HEAD
namespace SU;
use SU\Config;
=======
namespace PPT;
use PPT\Config;
>>>>>>> Cambiando namespace con php antonella namespace PPT

class Language
{
    public function __construct()
    {
        $config= new Config();
        load_plugin_textdomain($config->language_name, false, basename(basename( dirname( __FILE__ ) )) . '/languages' );
    }
}
