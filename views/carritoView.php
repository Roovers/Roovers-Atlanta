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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Atlanta Shop</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-secondary bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand text-black" href="#" ><img src="../assets/img/iso-star.png" alt="Logo de el club atlanta" width="100px" height="100px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="index">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="../noticia">NOTICIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="../tienda?cat=todos">TIENDA</a>
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

        <div class="container">
            <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h1 class="text-center text-white">Ver Carrito</h1>
                <div class="row mt-4 mb-5">


                    <?php 
                        foreach($carrito as $producto){


                            $img = $producto['Img'];
                            $nombre = $producto['nombre_producto'];
                            $precio = $producto['Precio'];
                            $descripcion = $producto['Descripcion'];
                            echo "
                            <div class='row mb-3'>
                            <div class='col'>
                            <img src='../$img' style='width: 160px; height: 150px;'>  
                            </div>
                            <div class='col'>
                            <h5 class='text-white'>$nombre</h5>
                            <p  style='color:#D8D8D8;'>$descripcion</p>
                            </div>
                            <div class='col'>
                            <h5 class='text-white'>$$precio</h5>
                            </div>
                            </div>
                                                 
                            ";
                        }


                        $total = 0;
                        
                        foreach ($carrito as $producto) {
                            $precio = $producto['Precio'];
                            $total = $total + $precio;
                        }

                        echo "
                        <div class='row'>
                        <div class='col d-flex justify-content-end'>
                        <h3 class='text-white'>TOTAL: $$total</h3>
                        </div>
                        </div>   
                        "
                    ?>
                    <button class="btn btn-success btn-block mb-3">Finalizar compra</button>
                    <a class="btn btn-danger btn-block mb-3" href="../tienda?cat=todos">Volver a la tienda</a>
                </div>
            </div>
            <div class="col-lg-2"></div>
            </div>
        </div>







      <div class="container-fluid footer " >

<div class="row footer-row">
  <div class="col-lg-4 ">
    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4060446348776!2d-58.44908378433159!3d-34.593892580462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4aaa2050037d7f%3A0xe875c1520516320d!2sClub%20Atl%C3%A9tico%20Atlanta!5e0!3m2!1ses-419!2sar!4v1663208888576!5m2!1ses-419!2sar" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-lg-4 text-ce logonter redes-sociales ">
    <div class="row">
      <img src="../assets/img/iso-star.png" class="logo-footer" alt="">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>


