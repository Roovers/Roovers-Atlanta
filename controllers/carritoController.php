<?php
    require_once('models/carritoModel.php');

    class carritoController{

        public function ver(){
            session_start();

            $model = new CarritoModel();
            $email = $_SESSION['email'];
            $carrito = $model->VerCarrito($email);
            $cantidad = $model->contarCarrito($email);
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

        public function borrar(){
        $idProducto = $_GET['id'];
        $carrito =  $_GET['carrito'];
        $model = new CarritoModel();
        $model->borrarProductoCarrito($idProducto, $carrito);
        header("Location:./ver");
        }
        public function vaciar(){
            $email = $_GET['email'];
            $model = new CarritoModel();

            $model->vaciarCarrito($email);
            header("Location:./ver");

        }
    }

  


?>