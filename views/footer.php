<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="stylesheet" href="assets/css/ceck.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" 
    crossorigin="anonymous"></script>