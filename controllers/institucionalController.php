<?php
    class institucionalController{

        public function index(){
            session_start();

            require_once('./views/institucional.php');
        }
    

    }


?>