<?php
<<<<<<< HEAD
<<<<<<< HEAD
namespace SU;
use SU\Config;
=======
namespace PPT;
use PPT\Config;
>>>>>>> Cambiando namespace con php antonella namespace PPT
=======
namespace PPT;
use PPT\Config;
>>>>>>> 45919e4231ece65d56f4b3e9652286899fba90ee

class Language
{
    public function __construct()
    {
        $config= new Config();
        load_plugin_textdomain($config->language_name, false, basename(basename( dirname( __FILE__ ) )) . '/languages' );
    }
}
