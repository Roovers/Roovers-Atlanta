<?php
    require_once('models/carritoModel.php');

    class indexController{

        public function index(){
            session_start();
            if(isset($_SESSION['email'])){
            require_once('models/carritoModel.php');
            $model = new CarritoModel();
            $email = $_SESSION['email'];
            $carrito = $model->VerCarrito($email);
            $cantidad = $model->contarCarrito($email);
            // require_once('views/header.php');
            require_once('views/index.php');
            } else {
                header("Location:./usuario");
            }
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