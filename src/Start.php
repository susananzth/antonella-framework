<?php
/**
* No modify this file !!!
*/
<<<<<<< HEAD
<<<<<<< HEAD
namespace SU;

/*
* Class Start
* @package SU\Start
=======
namespace PPT;

/*
* Class Start
* @package PPT\Start
>>>>>>> Cambiando namespace con php antonella namespace PPT
=======
namespace PPT;

/*
* Class Start
* @package PPT\Start
>>>>>>> 45919e4231ece65d56f4b3e9652286899fba90ee
*/
class Start
{
    /*
    * You can add start functions for start the plugin
    * @return void
    */
    public function __construct()
    {
        $language   = new Language();
        $hooks      = new Hooks();
        $request    = new Request();
    }
}
