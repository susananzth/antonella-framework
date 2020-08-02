<?php
    namespace MCF7;

    class ContactController
    {

        public function __construct()
        {

        }
        public static function guardar()
        { // Doc: https://developer.wordpress.org/reference/functions/wp_insert_post/
          // Create post object
          $args = [
            'post_title'    => $_POST['your-name'].' | '.$_POST['your-subject'],
            'post_content'  => $_POST['your-message'],
            'post_type'     => 'contacto',
            'post_date'     => $_POST['Y-m-d'],
            'post_status'   =>'draft',
            'meta_input'    =>[
                                'nombre'  => $_POST['your-name'],
                                'email'   => $_POST['your-email'],
                              ]
          ];
          // Insert the post into the database
          wp_insert_post($args);
        }
        function TablaColumnas($defaults)
        {
          unset($defaults['taxonomy-categoría']);
          unset($defaults['comments']);

          //Agregando nuestras columnas
          $defaults['nombre']   = "Nombre";
          $defaults['email']    = "Correo";
          return $defaults;
        }
        function TablaColumnasContenido($column_name, $post_id)
        {
          if($column_name == 'nombre')
          {
            echo get_post_meta($post_id, 'nombre', true);
          }
          if($column_name == 'email')
          {
            echo get_post_meta($post_id, 'email', true);
          }
          if($column_name == 'date')
          {
            echo get_post_meta($post_id, 'date', true);
          }
        }
    }
