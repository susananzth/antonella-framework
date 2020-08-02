<?php
/**
* No modify this file !!!
*/
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

class Request
{
    public $post_data=array();
    public $get_data=array();

    public function __construct()
    {
        $config=new Config();
        $this->process($config->post,'post');
        $this->process($config->get,'get');
    }


    public function  process($datas,$from)
    {
       foreach ($datas as $key => $data)
       {
           if (isset($_REQUEST[$key]))
           {
            call_user_func_array($data,$_REQUEST);
           }
           else
           {
            continue;
           }
       }
    }


}
