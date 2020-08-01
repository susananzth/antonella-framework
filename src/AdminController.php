<?php
    namespace CAF;

    class AdminController
    {

        public function __construct()
        {

        }
        public static function index()
        {
          // Función para llamar al formulario
          $html = '<form method="POST">
          <input type="text" name="cambiar_fuente" value=="'.get_option('cambiar_fuente').'"/>
          </form>';
          echo $html;
        }
        public static function guardar()
        {
          // función para guarda datos datos del formulario
          update_option('cambiar_fuente',$_POST['cambiar_fuente']);
        }
        public static function mostrar()
        {
          if(get_option('cambiar_fuente')=='si')
          {
            $html = '<style> @import url("https://fonts.googleapis.com/css2?family=Parisienne&display=swap");
            html *{font-family: "Parisienne", cursive;}
            </style>';
            echo $html;
          }
        }
    }
