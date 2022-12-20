<?php

    require_once('models/noticiaModel.php');

    class NoticiaController{
        public $nombre;
        public $idCategoria;


        public function index( $parametros = array() ){
            session_start();
            $noticia = new NoticiaModel();
            $listaNoticias = $noticia->lista();
            // require_once('views/header.php');           
            require_once('models/carritoModel.php');
            $model = new CarritoModel();
            $email = $_SESSION['email'];
            $carrito = $model->VerCarrito($email);
            $cantidad = $model->contarCarrito($email);
            require_once('views/noticiasView.php');

        }

        public function crear( $parametros = array() ){
            // Recibo las variables por POST
            print_r( $parametros  );
            echo 'Crear usuario';

            // Intancio el modelo 

            // Ejecuto las querys
        }

        public function actualizar($parametros = array()){
            print_r( $parametros  );
            echo 'Actulizando';
        }

        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }

?>