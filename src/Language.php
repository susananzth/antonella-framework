<?php
namespace MCF7;
use MCF7\Config;

class Language
{
    public function __construct()
    {
        $config= new Config();
        load_plugin_textdomain($config->language_name, false, basename(basename( dirname( __FILE__ ) )) . '/languages' );
    }
}
