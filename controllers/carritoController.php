<?php
    require_once('models/carritoModel.php');

    class carritoController{

        public function ver(){
            session_start();

            $model = new CarritoModel();
            $email = $_SESSION['email'];
            $carrito = $model->VerCarrito($email);
        
            require_once('views/carritoView.php');
        }
        
        public function agregar(){
            $idProducto = $_GET['id'];
            $email = $_GET['email'];
            $model = new CarritoModel();
            $carritos = $model->encontrarIdCarrito($email);
            $idCarrito = "";
            foreach ($carritos as $carrito) {
                $idCarrito= $carrito['id_carrito'];
            }
            $model->agregarAlCarrito($idProducto, $idCarrito );
            header("Location:./ver");
        }
    }


?>