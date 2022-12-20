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
  <link rel="stylesheet" href="assets/css/estilos.css">
  <!-- <link rel="stylesheet" href="../assets/css/ceck.css">
  <link rel="stylesheet" href="../assets/css/registerr.css">
  <link rel="stylesheet" href="../assets/css/ceck.css"> -->
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
                <a class="nav-link text-white" href="./institucional">INSTITUCIONAL</a>
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
                    <a href="./carrito/ver" class="nav-link text-white"><i class="fa-solid fa-cart-shopping"></i><span class="badge bg-success"><?php echo $cantidad;?></span></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
         <!-- // aca termina header -->

      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/slide1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>EL PLANTEL QUIERE EL TITULO</h5>
              <p>" LA IDEA DEL EQUIPO ES SUMAR DE A 3 PUNTOS Y LLEGAR BIEN AL FINAL DE LA TEMPORADA . ".</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/slide2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>SE CIERRAN NUEVOS SPONSORS</h5>
              <p>EL CLUB SIGUE CRECIENDO DE LA MANO DE LOS NUEVOS SPONSORS Y VAMOS POR MAS .</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/slide3.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>EMOCION Y ORGULLO , OTRO TITULO PARA ELLAS</h5>
              <p>UNA VEZ MAS EL EQUIPO FEMENINO LOGRA SU TITULO A COSTA DE MUCHO ESFUERZO DEDICACION Y PURA PASION POR EL FUTBOL.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="row-cards">
        <div class="card" style="width: 18rem;">
          <img src="assets/img/card1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white">Emplazada desde 1979 en la plaza ubicada en 9 de Julio y Av. Independencia, durante los últimos días, y en el marco del día internacional del hincha de Atlanta, se restauró la placa fundacional del club a cargo de la […]</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="assets/img/card2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white">La Reserva derrotó a Brown (A) por 2-1 con goles de Bordón y Medina.  Formación: 1 I Bessone2 R Herrera3 I Franco4 S Erviti6 T Rojas7 N Medina8 T Terrazas9 D Bordon10 F Bisanz11 C Cuenca SuplentesT CapdevilaS PasiniF MezaM […]</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="assets/img/card3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white">Femenino Atlanta se puso al día en el campeonato Este miércoles, Las Bohemias y Almirante Brown terminaron de jugar el partido correspondiente a la fecha 10. Finalizó en empate 2-2 , " Hicimos todo para ganar pero no pudimos " […]</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="assets/img/card4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white">Nicolas Medina firmó su primer contrato con la institución.  El juvenil de Monte Grande tendrá contrato con Atlanta hasta diciembre de 2026. Nico, nacido el 5 de marzo de 2003, lleva 7 partidos en la primera de Atlanta, totalizando 232 […]</p>
          </div>
        </div>
        <div class="card" style="width: 18rem;">
          <img src="assets/img/card5.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-white">Las nuevas camisetas titular y alternativa toman la estética del frente del estadio y se mezclan con detalles y estilos de clásicas casacas antiguas. Ambas lucen detalles relativos al 100 aniversario del club en el barrio.</p>
          </div>
        </div>
      </div>

      <div class="row-pp">
        <div class="col-lg-6">
          <div class="container-hs">
            <h2 id="headline">Proximo Partido</h2>
            <div id=" row countdown">
              <ul>
                <li><span id="days"></span>dias</li>
                <li><span id="hours"></span>Horas</li>
                <li><span id="minutes"></span>Minutos</li>
                <li><span id="seconds"></span>Segundos</li>
              </ul>
            </div>
            <div class="row next-match">
              <div class="col-lg-2 team">
                <img src="assets/img/iso-star.png" width="100px" height="100px" alt="logo de club atletico atlanta">
                <p>ATLANTA<i class="fa-solid fa-house "></i></p>
              </div>
              <div class="col-lg-1">VS</div>
              <div class="col-lg-2 team">
                <img src="assets/img/chaca.png" alt="logo de chacarita jrs" width="100px" height="100px">
                <p >CHACARITA JRS<i class="fa-solid fa-bus"></i></p>
              </div>
            </div>
             
           
          </div>

         
        </div>
        
        <div class="row-tablapos text-center">
          <h2 class="text-white">Tabla de Posiciones</h2>
          <table cellspacing="0" cellpadding="0">
            <tr class="destacado">
              <td>Escudo</td>
              <td>Nombre</td>
              <td>PG</td>
              <td>PP</td>
              <td>PE</td>
              <td>GF</td>
              <td>GC</td>
              <td>POS</td>
              <td>PTS</td>
            </tr>
            <tr>
              <td>
                <img height="30" width="30" src="https://th.bing.com/th/id/R.ec73b45673d8680d0053f783021b338d?rik=PTgfLIHuXTpT7Q&riu=http%3a%2f%2fargenpop.com.ar%2fImagenes%2fESCUDOS+DE+CLUBES%2fATLANTA.png&ehk=XKtyxYXK93Wm%2fy0wBd%2fv0wqYn4k5wWs%2fgFDOMD87FJ8%3d&risl=&pid=ImgRaw&r=0" alt="" />
              </td>
              <td>Atlanta
              </td>
              <td>20</td>
              <td>7</td>
              <td>3</td>
              <td>21</td>
              <td>12</td>
              <td>1</td>
              <td>60</td>
            </tr>
            <tr>
              <td>
              <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_39yl9nw2nhhulyjssa497c758.png" alt="" />
              </td>
              <td>San Martin Tucuman</td>
              <td>15</td>
              <td>10</td>
              <td>5</td>
              <td>16</td>
              <td>6</td>
              <td>2</td>
              <td>45</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_2zjoq67ogz8lmaoesxkubxhp6.png" alt="" />
              </td>
              <td>Instituto</td>
              <td>12</td>
              <td>8</td>
              <td>4</td>
              <td>24</td>
              <td>9</td>
              <td>3</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_9vph9w7uflam4cks28dfp98h4.png" alt="">
              </td>
              <td>Gimnasia Mendoza</td>
              <td>11</td>
              <td>2</td>
              <td>3</td>
              <td>23</td>
              <td>10</td>
              <td>4</td>
              <td>33</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_3xz3k7mpw3ttsnb0odu0kfepx.png" alt="">
              </td>
              <td>All Boys</td>
              <td>10</td>
              <td>2</td>
              <td>6</td>
              <td>33</td>
              <td>11</td>
              <td>5</td>
              <td>30</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_693gcfr20m03571ihcw6vy2i1.png" alt="">
              </td>
              <td>Chaco For Ever</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_8inprqnxjps9ckiamn3cfoo8v.png" alt="">
              </td>
              <td>Independiente Rivadavia</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_6jrn904p94yfyn6s5b6ij0jw8.png" alt="">
              </td>
              <td>Defensores De Belgrano</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_40t5qm271m6s8i8r6hdlqdzv5.png" alt="">
              </td>
              <td>Estudiantes De Rio Cuarto</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_2lhnnnznvg2eqxnsxjw5zk9m7.png" alt="">
              </td>
              <td>Estudiantes De Caceros</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_bppyw6lsfd4nwshsk2oprxlmy.png" alt="">
              </td>
              <td>Almagro</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_c4f6hp1oyal1ispkv638ipumk.png" alt="">
              </td>
              <td>San Martin San Juan</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
            <tr>
              <td>
                <img src="https://secure.cache.images.core.optasports.com/soccer/teams/30x30/uuid_7gcwwr8m5docs6jqrn2stilie.png" alt="">
              </td>
              <td>Deportivo Riestra</td>
              <td>12</td>
              <td>7</td>
              <td>6</td>
              <td>12</td>
              <td>10</td>
              <td>6</td>
              <td>36</td>
            </tr>
          </table>
        </div>
  
      </div>


          <div class="tech-slideshow">
            <div class="mover-1"></div>
          </div>

          <div class="tech-marcas">
            <div class="mover-1"></div>
          </div>
          
          

      <div class="row sponsors">
        <img src="assets/img/banner marcas.png" class="sponsors-img" height="300px" alt="">
      </div>
      
      </div>
               <!-- // aca empieza footer -->

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
    <li style="--clr:#1da1f2" class="logo"><a href="https://twitter.com/atlantaoficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter logo-img" aria-hidden="true"></i></a></li>
    <li style="--clr:#dd2a7b" class="logo"><a href="https://www.instagram.com/clubatlantaoficial/?hl=es" target="_blank"><i class="fa fa-instagram logo-img" aria-hidden="true"></i></a></li>
    <li style="--clr:#3b5998" class="logo"><a href="https://www.facebook.com/ClubAtleticoAtlantaOficial/" target="_blank"><i class="fa fa-facebook-official logo-img" aria-hidden="true"></i></a></li>
    <li style="--clr:#ff0000" class="logo"><a href="https://www.youtube.com/@atlantatvoficial" target="_blank"><i class="fa fa-youtube-play logo-img" aria-hidden="true"></i></a></li>
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

      <script>(function () {
        const second = 1000,
              minute = second * 60,
              hour = minute * 60,
              day = hour * 24;
      
  
        let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            nextYear = yyyy + 1,
            dayMonth = "09/30/",
            birthday = dayMonth + yyyy;
        
        today = mm + "/" + dd + "/" + yyyy;
        if (today > birthday) {
          birthday = dayMonth + nextYear;
        }
        const countDown = new Date(birthday).getTime(),
            x = setInterval(function() {    
      
              const now = new Date().getTime(),
                    distance = countDown - now;
      
              document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
      
              //do something later when date is reached
              if (distance < 0) {
                document.getElementById("headline").innerText = "It's my birthday!";
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
              }
              //seconds
            }, 0)
        }());</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
