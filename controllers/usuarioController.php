<?php
    require_once('models/usuarioModel.php' );
    require_once('models/carritoModel.php' );

    class UsuarioController{
        public $nombre;
        public $apellido;
        public $password;
        public $email;

        public function index( $parametros = array() ){
  
            require_once('views/registerView.php');
        }
        public function loguear($parametros = array()){
            require_once('views/registerView.php');
        }


        public function socios(){
            require_once('views/header.php');
            require_once('socios.php');
            require_once('views/footer.php');

        }

        public function login( $parametros = array() ){
            if( !isset( $_POST['email'] )  && !isset( $_POST['password']) ){
                return;
            }
            // Recibo las variables por POST
            $email = $_POST['email'];
            $password = $_POST['password'];
            // Intancio el modelo 
            $usuario = new UsuarioModel();
            $usuario->email = $email;
            $usuario->password =  $password  ;
            //echo (  sha1('admin') );
            // Ejecuto el method del modelo
            $resultado = $usuario->login();
            print_r($resultado[1]);
            //print_r($usuario);

            if( count( $resultado ) > 0  ) {
                echo 'Datos validos';
                session_start();
                $_SESSION['email'] = $resultado[0]['email'];
                $_SESSION['nivel_permiso'] = $resultado[0]['nivel_permiso'];
                header('Location: ../tienda?cat=todos');
            } else {
                echo 'Usuario o contraseña invalidos';
            }

        }
        public function logout( $parametros = array() ){
            session_start();
            unset( $_SESSION['email'] );
            unset( $_SESSION['nivel_permiso'] );
            session_unset();
            session_destroy();
            echo('<meta http-equiv="refresh" content="3; url=../usuario">');
            echo( '<h2> Sesion cerrada, en 3 segundo...</h2>');

        }


        public function registro( $parametros = array() ){

            if( !isset( $_POST['email'] )  && !isset( $_POST['password'])){
                return;
            }
            // Recibo las variables por POST
            $email = $_POST['email'];
            $password = $_POST['password'];
            $nombreUsuario = $_POST['nombreUsuario'];
            $fecha_nacimiento = $_POST['fechaDeNacimiento'];
            $dateToFormat = date_create($fecha_nacimiento);
            $dateFormated = date_format($dateToFormat, "Y-m-d");
            $nombre_imagen = $_FILES['foto']['name'];
                $temporal = $_FILES['foto']['tmp_name']; 
                $carpeta = 'assets/img';
                $ruta = $carpeta.'/'.$nombre_imagen;
                move_uploaded_file($temporal,$ruta);
            $genero = $_POST['genero'];
            $domicilio = $_POST['domicilio'];
            $dni = $_POST['dni'];
            $ciudad = $_POST['ciudad'];
            $pais = $_POST['pais'];
            $provincia = $_POST['provincia'];
            $codigo_postal = $_POST['codigoPostal'];
            $telefono = $_POST['telefono'];

            // Intancio el modelo 
            $usuario = new UsuarioModel();
            $usuario->email = $email;
            $usuario->nombreUsuario = $nombreUsuario;
            $usuario->password =  $password  ;
            $usuario->nivelPermisos = 0;
            $usuario->fecha_nacimiento = $fecha_nacimiento;
            $usuario->genero = $genero;
            $usuario->domicilio = $domicilio;
            $usuario->dni = $dni;
            $usuario->ciudad = $ciudad;
            $usuario->pais = $pais;
            $usuario->provincia = $provincia;
            $usuario->codigo_postal = $codigo_postal;
            $usuario->telefono = $telefono;
            $usuario->img = $ruta;
            $usuario->guardar();
            $carrito =  new CarritoModel();
            $carrito-> crearUnCarrito($email);
            
            // Voy al login

            header('Location: ./loguear');
            
            header('Location: ../usuario');

        }
        public function perfil(){
            $email = $_GET['email'];
            $model =  new UsuarioModel();     
            $arrDatosUsuario = $model->verPerfil($email);
            require_once('views/perfil.php');
        }
        public function actualizar(){
            $oldEmail = $_POST['oldEmail'];
            $newEmail = $_POST['email'];
            $newPassword = $_POST['password'];
            $nombreUsuario = $_POST['nombreUsuario'];
            $fecha_nacimiento = $_POST['fechaDeNacimiento'];
            $genero = $_POST['genero'];
            $domicilio = $_POST['domicilio'];
            $dni = $_POST['dni'];
            $ciudad = $_POST['ciudad'];
            $pais = $_POST['pais'];
            $provincia = $_POST['provincia'];
            $codigo_postal = $_POST['codigoPostal'];
            $telefono = $_POST['telefono'];
            $nombre_imagen = $_FILES['foto']['name'];
            $temporal = $_FILES['foto']['tmp_name']; 
            $carpeta = 'assets/img';
            $ruta = $carpeta.'/'.$nombre_imagen;
            move_uploaded_file($temporal,$ruta);
            $nivelPermisos = 0;
            $model = new UsuarioModel();
            $model->actualizar($oldEmail, $newPassword, $newEmail, $nombreUsuario,$nivelPermisos, $fecha_nacimiento,$genero,$domicilio, $dni, $ciudad, $pais, $provincia, $codigo_postal, $telefono, $ruta);
            header('Location: ../tienda?cat=todos');
        }
        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }

?>