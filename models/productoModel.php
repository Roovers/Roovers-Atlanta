<?php
    require_once 'core/ConexionPDO.php';

    class ProductoModel extends ConexionDB {
        public $idProducto;
        public $descripcion;
        public $precio;
        public $stock;
        public $img;
        public $nombre_producto;

                public function listarProductos($categoria){
                    if(strcmp($categoria, 'todos') === 0){
                        $this->setQuery("SELECT idProducto,nombre_producto,Precio,img,Descripcion,Stock, categoria 
                                     FROM producto;");
                    }
                    else {
                        $this->setQuery("SELECT idProducto,nombre_producto,Precio,img,Descripcion,Stock, categoria 
                                     FROM producto WHERE categoria = '$categoria';");
                    }

                    
                    return $this->obtenerRow();                     
                }

                public function ver($id){
                    $stament = $this->setQuery("SELECT * FROM producto where idProducto = $id limit 1;");
                    return $this->obtenerRow();
                }

                
                public function addComentario($contenido,$calificacion, $id_producto ){
                     $this->setQuery("INSERT INTO comentario(contenido,calificacion, fk_producto) VALUES (:contenido, :calificacion, :fk_producto)");
                        $this->ejecutar(array(
                                ':contenido' => $contenido,
                                ':calificacion'=> $calificacion,
                                ':fk_producto' => $id_producto
                        ));
                }


                public function comentariosPorProducto($id){
                    $this->setQuery("SELECT id_comentario, contenido, YEAR(fecha_comentario) AS anio, DAY(fecha_comentario) AS dia, MONTH(fecha_comentario) AS mes, TIME(fecha_comentario) AS hora, calificacion FROM comentario WHERE fk_producto = $id;
                    ");
                    $resultado = $this->obtenerRow();
                    return $resultado;
                }
               
         
        

    }
?>