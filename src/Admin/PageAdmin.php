<?php

<<<<<<< HEAD
<<<<<<< HEAD
namespace SU\Admin;
=======
namespace PPT\Admin;
>>>>>>> Cambiando namespace con php antonella namespace PPT
=======
namespace PPT\Admin;
>>>>>>> 45919e4231ece65d56f4b3e9652286899fba90ee
use Jenssegers\Blade\Blade;

class PageAdmin extends Admin
{
    public static function index()
    {
       //  return view('index', ['name' => 'John Doe']);
    }

    public static function DashboardExample($post, $callback_args)
    {
        echo "Hello World, this is my first Dashboard Widget!";
    }

}
