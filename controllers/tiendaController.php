<?php

   
    require_once('models/productoModel.php');
    require_once('models/carritoModel.php');


    class TiendaController{
        
        public function index( $parametros = array() ){
            session_start();
            $categoria= $_GET['cat'];


            if ( isset( $_SESSION['email'] )) {

                $tiendaModel = new  ProductoModel();
                $carritoModel= new CarritoModel();

                $listaProductos = $tiendaModel->listarProductos($categoria);
        
                $email = $_SESSION['email'];
                $cantidadEnCarrito = $carritoModel->contarCarrito($email);
                
                require_once('views/header.php');

                require_once('views/tiendaView.php');

            } else {

                require_once('views/accesoRestringidoView.php');

            }
            require_once('views/footer.php');
        }
        
        public function addComentario(){

            $model = new ProductoModel();
            $fk_producto = $_GET['prod'];
            $contenido = $_POST['comentario'];
            $calificacion = $_POST['calificacion'];
            $model->addComentario($contenido, $calificacion, $fk_producto);
            header("Location:../tienda/ver?id=$fk_producto");
            
        }

        public function ver(){
             $id = $_GET['id'];
             $model =new  ProductoModel();
             $productoArr = $model->ver($id);
             $comentarios = $model->comentariosPorProducto($id);
             require_once('views/detalle.php');
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