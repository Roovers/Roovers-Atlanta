<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="../assets/css/estilos.css"> -->
   <link rel="stylesheet" href="assets/css/registerr.css">
   <link rel="stylesheet" href="assets/css/login.css">
   <link rel="stylesheet" href="assets/css/ceck.css">

  <title>Atlanta Site</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    
    
<body>
  <!-- // aca empieza header -->
    <nav class="navbar navbar-expand-lg navbar-secondary bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand text-black" href="#" ><img src="assets/img/iso-star.png" alt="Logo de el club atlanta" width="100px" height="100px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="index">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./noticia">NOTICIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./tienda?cat=todos">TIENDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="../views/institucional.php">INSTITUCIONAL</a>
              </li>
              </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <!-- <a class="nav-link active text-white" aria-current="page" href="usuario"><i class="fa-solid fa-user"></i></a> -->
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li style="width: 10px !important;"><a class="dropdown-item" href="usuario/perfil?email=<?php echo $_SESSION['email']?>">Editar Perfil</a></li>
                    <li><a class="dropdown-item" href="usuario/logout">Cerrar Sesion</a></li>
                  </ul>
                </div>
              </li>
                <li class="nav-item">
                    <a href="" class="nav-link text-white"><i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>

<div class="containerr">

<div class="contentt">

  <form action="./usuario/login" method="post">
   
    <div class="title">L O G U E A R </div>

    <div class="user-details">
      
      <div class="input-box">
        <span class="details">EMAIL:</span>
        <input type="text" name="email" placeholder="escribe tu Email" required>
      </div>

      <div class="input-box">
        <span class="details">CONTRASEÑA</span>
        <input type="password" name="password" placeholder="escribe tu Contraseña" required>
      </div>
    </div>

    <div class="button">
      <input type="submit" value="L O G U E A R">
    </div>
    

  </form>
</div>
</div>



<div class="container">

<div class="content">

  <form action="./usuario/registro" method="post" enctype="multipart/form-data">
   
    <div class="title">H A C E T E   </div>
    <div class="title">S O C I O </div>

    <div class="user-details">
      
      <div class="input-box">
        <span class="details">NOMBRE:</span>
        <input type="text" placeholder="escribe tu nombre" required name="nombre">
      </div>

      <div class="input-box">
        <span class="details">APELLIDO:</span>
        <input type="text" placeholder="escribe tu apellido" required name="apellido">
      </div>

      <div class="input-box">
        <span class="details">NOMBRE DE USUARIO:</span>
        <input type="text" placeholder="escribe tu nombre" required name="nombreUsuario">
      </div>
      <div class="input-box">
        <span class="details">FOTO DE PERFIL:</span>
        <input type="file" required name="foto" enctype="">
      </div>
      <div class="input-box">
        <span class="details">D.N.I</span>
        <input type="text" placeholder="escribe tu dni" required name="dni">
      </div>
      
      <div class="input-box">
        <span class="details">FECHA DE NACIMIENTO</span>
        <input type="date"  required name="fechaDeNacimiento">
      </div>

      


      <div class="input-box">
        <span class="details">GENERO</span>
        <div class="wrapper">
          <input type="radio" name="genero" value="masculino" id="option-1" checked>
          <input type="radio" name="genero" value="femenino" id="option-2">
          <input type="radio" name="genero" value="otro" id="option-3">
            <label for="option-1" class="option option-1">
              <div class="dot"></div>
               <span>Masc</span>
               </label>
            <label for="option-2" class="option option-2">
              <div class="dot"></div>
               <span>Fem</span>
            </label>
            <label for="option-3" class="option option-3">
              <div class="dot"></div>
               <span>Otro</span>
            </label>
         </div>

      </div>

      

      <div class="input-box">
        <span class="details">EMAIL:</span>
        <input type="text" placeholder="escribe tu Email" required name="email" >
      </div>

      <div class="input-box">
        <span class="details">DOMICILIO:</span>
        <input type="text" placeholder="escribe tu Domicilio" required name="domicilio">
      </div>

      <div class="input-box">
        <span class="details">CIUDAD:</span>
        <input type="text" placeholder="escribe tu Ciudad" required name="ciudad">
      </div>

      <div class="input-box">
        <span class="details">PROVINCIA:</span>
        <input type="text" placeholder="escribe tu Provincia" required name="provincia">
      </div>

      <div class="input-box">
        <span class="details">CODIGO POSTAL</span>
        <input type="text" placeholder="escribe tu Codigo Postal" required name="codigoPostal">
      </div>

      <div class="input-box">
        <span class="details">PAIS DE RESIDENCIA</span>
        <select required name="pais">
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
      <div class="input-box">
        <span class="details">TELEFONO</span>
        <input type="text" placeholder="Telefono" name="telefono" required>
      </div>
     
      <div class="input-box">
        <span class="details">CONTRASEÑA</span>
        <input type="password" placeholder="escribe tu Contraseña" name="password" required>
      </div>
     
      <div class="input-box">
        <span class="details">CONFIRME CONTRASEÑA</span>
        <input type="password" placeholder="escribe tu Contraseña" name="passwordConfirm" required>
      </div>
    </div>
   


    
  
    <div class="button">
      <input type="submit" value="R E G I S T R A R M E">
    </div>
    <div class="title">C O N D I C I O N E S</div>
    <div class="condiciones"><p>Todos aquellos usuarios que se asocien por medio de este sitio web oficial aceptan someterse al Estatuto del Club Atlético Platense y a la legislación de la República Argentina.
      La aceptación de la presente está sujeta a la verificación de los registros de socios de la administración y aprobación de la Honorable Comisión Directiva,
       que se reserva el derecho de admisión y por el término de (15) quince días, conforme con el Art. 15 del Estatuto del Club.
     <br><br>
     HE LEÍDO ESTAS CONDICIONES DE ACUERDO Y ACEPTO TODAS LAS DISPOSICIONES INCLUIDAS.</p>
     <div class="grid-container">
      <div class="box">
        <div class="item">
          <div class="checkbox-rect">
            <input type="checkbox" id="checkbox-rect1" name="check">
            <label for="checkbox-rect1">Acepto los terminos y Condiciones.</label>
          </div>
        </div>
      </div>
     </div>
    </div>
  </form>
</div>
</div>
<div class="container-fluid footer " >

        <div class="row footer-row">
          <div class="col-lg-4 ">
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4060446348776!2d-58.44908378433159!3d-34.593892580462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4aaa2050037d7f%3A0xe875c1520516320d!2sClub%20Atl%C3%A9tico%20Atlanta!5e0!3m2!1ses-419!2sar!4v1663208888576!5m2!1ses-419!2sar" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-lg-4 text-ce logonter redes-sociales ">
            <div class="row">
              <img src="assets/img/iso-star.png" class="logo-footer" alt="">
            </div>
          <ul class="logo-container">
            <li style="--clr:#1da1f2" class="logo"><i class="fa fa-twitter logo-img" aria-hidden="true"></i></li>
            <li style="--clr:#dd2a7b" class="logo"><i class="fa fa-instagram logo-img" aria-hidden="true"></i></li>
            <li style="--clr:#3b5998" class="logo"><i class="fa fa-facebook-official logo-img" aria-hidden="true"></i></li>
            <li style="--clr:#ff0000" class="logo"><i class="fa fa-youtube-play logo-img" aria-hidden="true"></i></li>
          </ul>
        
          </div>
          
            <hr class="aside">
          
          <div class="col-lg-3 text-center ">
            <div class="row">
              <p class="info-title" >Sede Social "Ezequiel Kristal"</p>
              <p class="info">Humboldt 540 - Ciudad de Buenos Aires - Pcia de Bs As</p>
              <p class="info">Tel.(54-11)4856-5999</p>
            </div>
            <hr>
            <div class="row">
              <p class="info-title">Centro de Formación y Alto Rendimiento “Antonio Carbone”</p>
              <p class="info">Avenida San Martín  7281 - Villa Madero</p>
              <p class="info">Tel.(54-11)4462-7590</p>
            </div>
            <hr>
            <div class="row">
              <p class="info-title">Complejo Open Dorrego</p>
              <p class="info">Avenida Dorrego 457 - CABA - Pcia de Bs As</p>
              <p class="info">Tel.(54-11)4856-7252</p>
            </div>
          </div>
        </div>
        <div class="row text-center">
          
          <div class="col-lg-12 text-center">
            <hr>
            <p class="copyright">Todos los derechos reservados Grupo 1 © 2022</p>
          </div>
        </div>
      </div>
               <!-- // aca termina footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>



