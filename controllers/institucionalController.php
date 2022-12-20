<?php
    class institucionalController{

        public function index(){
            session_start();

            require_once('models/carritoModel.php');
            $model = new CarritoModel();
            $email = $_SESSION['email'];
            $carrito = $model->VerCarrito($email);
            $cantidad = $model->contarCarrito($email);
            require_once('views/institucional.php');
        }
    

    }


?>