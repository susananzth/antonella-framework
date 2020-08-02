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

class Shortcodes
{

    public function __construct()
    {
        
    }

    public static function index()
    {
        $config= new Config;
        $filter=$config->shortcodes;
        // add_shortcode('example', array('Shortcodes','example_function'));
        if ($filter)
        {
            foreach($filter as $data)
            {
                call_user_func_array('add_shortcode',[$data[0],$data[1]]);
            }
        }


    }
    /*
    * shortcode example
    * @info: https://codex.wordpress.org/Shortcode
    * @return string
    */
    public function example_function($atts)
    {
        extract(shortcode_atts(array(
         'data1' => 1,
             'data2'   =>1
         ), $atts));
        return ("<div>$content</div>");
    }
}
