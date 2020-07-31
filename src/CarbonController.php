<?php
    namespace SU;
    use Carbon\Carbon; // Llamado de carbon
          
    class CarbonController
    {
    
        public function index()
        {
            $fecha = Carbon::now()->locale("es_ES")->add(1, "day")->isoformat('dddd D');
            $output = "Mañana será: $fecha";
            return $output;
    
        }
    }