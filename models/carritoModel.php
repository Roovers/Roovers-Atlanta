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

        public function verSiExisteEnCarrito($id_producto, $id_carrito){
            $this->setQuery("SELECT fk_producto FROM producto_en_carrito pc INNER JOIN carrito c ON pc.fk_carrito = c.id_carrito INNER JOIN producto p ON pc.fk_producto = p.idProducto WHERE pc.fk_producto = $id_producto AND c.id_carrito = $id_carrito;
            ");
                    $resultado = $this->obtenerRow();
                    return $resultado;
        }

        public function agregarAlCarrito($id_producto,$id_carrito){


               $existe =  $this->verSiExisteEnCarrito($id_producto, $id_carrito);
                if(empty($existe)){
                    $this->setQuery("INSERT INTO producto_en_carrito(fk_producto,cantidad, fk_carrito) VALUES (:fk_producto, :cantidad, :fk_carrito)");
                    $this->ejecutar(array(
                            ':fk_producto' => $id_producto,
                            ':cantidad'=> 1,
                            ':fk_carrito' => $id_carrito
                    )); 
                } else{
                    $this->setQuery("UPDATE producto_en_carrito SET cantidad = cantidad + 1 WHERE  fk_producto = :fk_producto AND fk_carrito = :fk_carrito;");
                    $this->ejecutar(array(
                            ':fk_producto' => $id_producto,
                            ':fk_carrito' => $id_carrito
                    ));
                }
         }

        public function borrarProductoCarrito($id_producto,$id_carrito){

            $this->setQuery("DELETE FROM producto_en_carrito WHERE fk_producto = :fk_producto AND fk_carrito = :fk_carrito;");
            $this->ejecutar(array(
                    ':fk_producto' => $id_producto,
                    ':fk_carrito' => $id_carrito
            ));
        }     

    }
?>