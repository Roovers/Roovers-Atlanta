<?php
    require_once 'core/ConexionPDO.php';

    class UsuarioModel extends ConexionDB {
        public $email;
        public $password;
        public $nivelPermisos;
        public $nombreUsuario;
        public $fecha_nacimiento;
        public $genero;
        public $domicilio;
        public $dni;
        public $ciudad;
        public $pais;
        public $provincia;
        public $codigo_postal;
        public $telefono;
        public $img;
        public function guardar(){
            $this->setQuery("INSERT INTO usuario (email, nombre_usuario, password, nivel_permiso, fecha_nacimiento,genero,domicilio, dni, ciudad, pais, provincia, codigo_postal, telefono, foto_perfil) VALUES (:email, :nombre_usuario, :password, :nivel_permiso, :fecha_nacimiento, :genero, :domicilio, :dni, :ciudad, :pais, :provincia, :codigo_postal, :telefono, :img);");
            $this->ejecutar(array(
                ':email' => $this->email,
                ':nombre_usuario' => $this->nombreUsuario,
                ':password' => $this->password,
                ':nivel_permiso'=>$this->nivelPermisos,
                ':fecha_nacimiento'=>$this->fecha_nacimiento,
                ':genero'=>$this->genero,
                ':domicilio'=>$this->domicilio,
                ':dni'=>$this->dni,
                ':ciudad'=>$this->ciudad,
                ':pais'=>$this->pais,
                ':provincia'=>$this->provincia,
                ':codigo_postal'=>$this->codigo_postal,
                ':telefono'=>$this->telefono,
                ':img'=>$this->img));
        }
        public function actualizar($oldEmail, $newPassword, $newEmail, $nombreUsuario,$nivelPermisos, $fecha_nacimiento,$genero,$domicilio, $dni, $ciudad, $pais, $provincia, $codigo_postal, $telefono,$foto){
            $this->setQuery("UPDATE  usuario SET email = :email,nombre_usuario = :nombre_usuario,  password = :password, fecha_nacimiento = :fecha_nacimiento,
                            genero = :genero, domicilio = :domicilio, dni = :dni, ciudad = :ciudad, pais = :pais,
                            provincia = :provincia, codigo_postal = :codigo_postal, telefono = :telefono, foto_perfil = :foto_perfil
                            WHERE email = :oldEmail;");
            $this->ejecutar(array(
                ':email' => $newEmail,
                ':nombre_usuario' => $nombreUsuario,
                ':password' => $newPassword,
                ':fecha_nacimiento'=>$fecha_nacimiento,
                ':genero'=>$genero,
                ':domicilio'=>$domicilio,
                ':dni'=>$dni,
                ':ciudad'=>$ciudad,
                ':pais'=>$pais,
                ':provincia'=>$provincia,
                ':codigo_postal'=>$codigo_postal,
                ':telefono'=>$telefono,
                ':oldEmail'=>$oldEmail,
                ':foto_perfil'=>$foto
            ));
        }
        public function eliminar(){
            $this->setQuery("DELETE FROM usuario
                             WHERE email = :email");
            
            $this->ejecutar(array(
                ':email' => $this->email,
            ));
        }

        public function registro(){
            $this->setQuery("INSERT INTO usuario(email, password, nivel_permiso)
                            VALUES(:email, :password :nivel_permiso)");
            $this->ejecutar(array(
                ':email' => $this->email,
                ':password' => $this->password,
                ':nivel_permiso'=>$this->nivelPermisos
            ));
        }

        public function login(){
            $this->setQuery("SELECT email, password, nivel_permiso, nombre_usuario
                            FROM usuario
                            WHERE email = :email AND password = :password;");
            $resultado = $this->obtenerRow(array(
                        ':email' => $this->email,
                        ':password' => $this->password
            ));

            return $resultado;
        }

        public function verPerfil($emailUser){
        
            $statement = $this->setQuery("SELECT *
            FROM usuario
            WHERE email = :email;");
            return $this->obtenerRow(array(':email'=> $emailUser));
           
        }
    }
?>