<?php 
<<<<<<< HEAD
<<<<<<< HEAD
namespace SU\Admin;

use SU\Config;
=======
namespace PPT\Admin;

use PPT\Config;
>>>>>>> Cambiando namespace con php antonella namespace PPT
=======
namespace PPT\Admin;

use PPT\Config;
>>>>>>> 45919e4231ece65d56f4b3e9652286899fba90ee

class Dashboard
{
    var $array_dashboard;
    var $files_dashboard;
    public function __construct()
    {
        $config= new Config();
        $this->array_dashboard= $config->dashboard;
        $this->files_dashboard= $config->files_dashboard;
    }

    public static function index()
    {
        $dashboard= new Dashboard;
        $datas=$dashboard->array_dashboard;
        if (count($datas)>0&&$datas[0]['name']<>'')
        {
            foreach($datas as $data)
            {
                wp_add_dashboard_widget($data['slug'],$data['name'],$data['function'],$data['callback'],$data['args']);
            }
        }
    }

    public function scripts($hook)
    {
        
        if( 'index.php' != $hook ) {
            return;
        }
        $datas=$this->files_dashboard;
        foreach($datas as $data)
        {
             wp_enqueue_style( 'dashboard-widget-styles', plugins_url( '', __FILE__ ) . $data );
        }
	   
    }
}