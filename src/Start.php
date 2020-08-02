<?php
/**
* No modify this file !!!
*/
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
