<?php
    class indexController{

        public function index(){
            session_start();

            // require_once('views/header.php');
            require_once('views/index.php');
            // require_once('views/footer.php');
        }
        public function institucional(){
            require_once('views/header.php');
            require_once('./views/institucional.php');
            require_once('./views/footer.php');
        }

        public function loguear(){
            echo '<h2> inciando login</h2>';
        }

        public function logout(){
            echo '<h2> Finalizando sesion</h2>';
        }

    }


?>