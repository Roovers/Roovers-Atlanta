<?php
    require_once 'core/ConexionPDO.php';

    class NoticiaModel extends ConexionDB {
        public $idNoticia;
        public $fecha;
        public $contenido;
       

        public function lista(){
            $this->setQuery("SELECT idNoticia, fecha,titulo,contenido
                            FROM noticia");
            $resultado = $this->obtenerRow();
            return $resultado;
        }
        public function guardar(){
            $this->setQuery("INSERT INTO noticia(fecha, contenido)
                            VALUES(:fecha, :contenido)");
            $this->ejecutar(array(
                ':fecha' => $this->fecha,
                ':contenido' => $this->contenido
            ));
        }
        public function eliminar(){
            $this->setQuery("DELETE FROM noticia
                             WHERE idNoticia = :idNoticia");
            
            $this->ejecutar(array(
                ':idNoticia' => $this->idNoticia,
            ));
        }
        public function actualizar(){
            $this->setQuery("UPDATE noticia
                            SET fecha = :fecha, contenido = :contenido
                            WHERE idNoticia = :idNoticia");
            $this->ejecutar(array(
                            ':idNoticia' => $this->idNoticia,
            ));               
        }

    }
?>