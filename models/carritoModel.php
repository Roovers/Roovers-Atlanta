<?php 
    require_once('core/ConexionPDO.php');
    class CarritoModel extends ConexionDB {





        public function VerCarrito($email){
            $this->setQuery("SELECT * FROM producto_en_carrito pc INNER JOIN carrito c ON pc.fk_carrito = c.id_carrito INNER JOIN producto p ON pc.fk_producto = p.idProducto WHERE c.fk_user = '$email';
            ");
                    $resultado = $this->obtenerRow();
                    return $resultado;
        }

        
        public function crearUnCarrito($email){
            $this->setQuery("INSERT INTO carrito(total,fk_user) VALUES (0, :email)");
            $this->ejecutar(array(
                ':email' => $email,
            ));        
        }
        
        public function encontrarIdCarrito($email){
            $this->setQuery("SELECT * FROM carrito WHERE fk_user = '$email';
            ");
                    $resultado = $this->obtenerRow();
                    return $resultado;
        }

        public function agregarAlCarrito($id_producto,$id_carrito){
            $this->setQuery("INSERT INTO producto_en_carrito(fk_producto,cantidad, fk_carrito) VALUES (:fk_producto, :cantidad, :fk_carrito)");
            $this->ejecutar(array(
                    ':fk_producto' => $id_producto,
                    ':cantidad'=> 1,
                    ':fk_carrito' => $id_carrito
            ));       
         }


        public function borrarProductoCarrito($id_producto,$id_carrito){
            $this->setQuery("DELETE FROM carrito WHERE fk_producto = :fk_producto AND fk_carrito = :fk_carrito;");
            $this->ejecutar(array(
                    ':fk_producto' => $id_producto,
                    ':fk_carrito' => $id_carrito
            ));
        }     

    }
?>