<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only --> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../assets/css/estilos.css">
        <link rel="stylesheet" href="../assets/css/ceck.css">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Perfil</title>
    </head>
    <body>
        <div class="container-fluid mt-5 mb-5">

            <div class="row d-flex justify-content-center">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-6">
                <h1 class=" text-center text-white">Perfil de Usuario</h1>
                <form action="./actualizar" method="post" enctype="multipart/form-data">
                <?php 


foreach ($arrDatosUsuario as $usuario ) {
            $email = $usuario['email'];
            $password = $usuario['password'];
            $nombreUsuario = $usuario['nombre_usuario'];
            $fecha_nacimiento = $usuario['fecha_nacimiento'];
            $genero = $usuario['genero'];
            $domicilio = $usuario['domicilio'];
            $dni = $usuario['dni'];
            $ciudad = $usuario['ciudad'];
            $pais = $usuario['pais'];
            $provincia = $usuario['provincia'];
            $codigo_postal = $usuario['codigo_postal'];
            $telefono = $usuario['telefono'];
            $img = $usuario['foto_perfil'];
   echo "
   <div class='perfil'>
   <div class='row carnet mx-auto'>
    <div class='col-lg-4 imagen'> 
        <img src='../$img' alt='LOGO DE UN USUARIO'  class='mx-auto d-block img-perfil'>    
    </div>
    <div class='col-lg-7'>
        <h4>Carnet de Socio</h4>
        <h5>DNI: $dni</h5>
        <h5>Nombre Completo: $nombreUsuario</h5>
        <h5>Genero: $genero</h5>
        <h5>Fecha de Nacimiento: $fecha_nacimiento</h5>
        <h5>Activo Desde: 15/04/22</h5>
        <h5>Vencimiento: 31/12/23</h5>
    </div>
    </div> 
   </div>
   <div class='form-group mt-3'>
   <label for='email' class='form-label text-white' >Email:</label>
   <input type='email' class='form-control' name='email' id='email' value='$email' placeholder='juanperez@mail.com'>
   </div>
   ";
}
?>                
                    <input type="hidden" name="oldEmail" value="<?php echo $email?>">
                    <div class="form-group mt-3 ">
                        <label for="newPassword" class="form-label text-white">Password:</label>
                        <input type="password" name="password" class="form-control" id="newPassword" value="<?php echo $password?>" placeholder="Ingrese su nueva password">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="nombreDeUsuario" class="form-label text-white">Nombre de Usuario:</label>
                        <input type="text" name="nombreUsuario" class="form-control" id="nombreDeUsuario" value="<?php echo $nombreUsuario?>" placeholder="Ingrese su nueva password">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="foto" class="form-label text-white">Foto de Perfil:</label>
                        <input type="file" name="foto" class="form-control" id="foto"  enctype="">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="fechaDeNacimiento" class="form-label text-white">Fecha de Nacimiento:</label>
                        <input type="date" name="fechaDeNacimiento" class="form-control" id="fechaDeNacimiento" value="<?php echo $fecha_nacimiento?>" placeholder="Ingrese su nueva password">
                    </div>
                    <div class="form-group mt-3 row">
                        <label for="genero" class="form-label text-white">Genero:</label>
                        <div class=" d-flex justify-content-start">
                        <div class="col-lg-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="genero" value="masculino" checked>
                            <label class="form-check-label text-white" for="genero">
                                Masculino
                            </label>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="genero" value="femenino">
                            <label class="form-check-label text-white" for="genero">
                                Femenino
                            </label>
                        </div>
                        </div>
                        <div class="col-lg-2">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="genero" id="genero" value="otro">
                            <label class="form-check-label text-white" for="genero">
                                Otro
                            </label>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="domicilio" class="form-label text-white">Domicilio:</label>
                        <input type="text" name="domicilio" class="form-control" id="domicilio"  value="<?php echo $domicilio?>" placeholder="Ingrese su domicilio">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="dni" class="form-label text-white">DNI:</label>
                        <input type="text" name="dni" class="form-control" id="dni" value="<?php echo $dni ?>" placeholder="Ingrese su DNI">
                    </div>
                    <div class="form-group mt-3 ">
                    <label for="pais" class="form-label text-white">Pais:</label>
                    <select required class="form-select" id="pais" name="pais">
                        <option value="AR">Argentina</option>
                        <option value="BO">Bolivia</option>
                        <option value="BR">Brasil</option>
                        <option value="CL">Chile</option>
                        <option value="CO">Colombia</option>
                        <option value="EC">Ecuador</option>
                        <option value="PY">Paraguay</option>
                        <option value="PE">Peru</option>
                        <option value="UY">Uruguay</option>
                        <option value="VE">Venezuela</option>
                    </select>
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="provincia" class="form-label text-white">Provincia:</label>
                        <input type="text" name="provincia" class="form-control" id="provincia" value="<?php echo $provincia?>" placeholder="Ingrese su Provincia:">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="ciudad" class="form-label text-white">Ciudad:</label>
                        <input type="text" name="ciudad" class="form-control" id="ciudad" value="<?php echo $ciudad?>" placeholder="Ingrese su Provincia:">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="codigoPostal" class="form-label text-white">Codigo Postal:</label>
                        <input type="text" name="codigoPostal" class="form-control" id="codigo_postal" value="<?php echo $codigo_postal?>" placeholder="Ingrese su CP:">
                    </div>
                    <div class="form-group mt-3 ">
                        <label for="telefono" class="form-label text-white">Telefono:</label>
                        <input type="text" name="telefono" class="form-control" id="telefono" value="<?php echo $telefono?>" placeholder="Ingrese su telefono">
                    </div>
                     <div class="row d-flex justify-content-center mt-4">
                    <div class="col-lg-3">
                        <a href="../tienda?cat=todos" class="btn btn-danger btn-block mr-3">Volver a la tienda</a>
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" class="btn btn-success btn-block btnSubmit" value="Guardar Cambios">
                    </div>
                    </div>
                </form>
                </div>
                <div class="col-lg-2">
                </div>
            </div>

        </div>

        <!-- <script src="../assets/perfilForm.js"></script> -->
    </body>
    </html>
    
                   
          




