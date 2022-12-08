
    <!DOCTYPE html>
    <html lang="en">
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
        <title>$nombre_prod</title>
    </head>
    <body>
    <?php
                    foreach ($productoArr as $producto) {
                        
                        $id_producto = $producto['idProducto'];
                        $nombre_prod = $producto['nombre_producto'];
                        $precio = $producto['Precio'];
                        $img = $producto['Img'];
                        $stock = $producto['Stock'];
                        $desc = $producto['Descripcion'];
                
                    echo "<div class='container '>
                            <div class='row d-flex justify-content-center'>
                                <div class='col-lg-2'></div>
                                <div class='col-lg-6 mt-3'>
                                    <h1 class='text-center text-white mb-3'>$nombre_prod</h1>
                                    <img class='img-fluid mb-3' src='../$img'>
                                    <h4 class='text-white'>Descripcion: $desc</h4>
                                    <h4 class='text-white'>Precio: $$precio ARS</h4>
                                    <h4 class='text-white'>Stock: $stock</h4>
                                    <div class='row'>
                                    <a class='btn btn-success btn-block mt-3'>Agregar al carrito</a>
                                    <a class='btn btn-primary btn-block mt-3' href='../tienda?cat=todos'>Volver a la tienda</a>
                                    </div>
                                <h3 class='text-center text-white mt-2 mb-3' >Opiniones del producto</h3>
                                
                                <form action='./addComentario?prod=$id_producto' method='POST'>
                                <div class='row '>
                                    <div class='col-lg-8'>
                                        <input type='text' class='form-control form-control-lg' name='comentario' placeholder='Ingresa una opinion del producto'>
                                    </div>
                                    <div class='col-lg-8'>
                                        <label for='customRange2' class='form-label text-white'>Califica este Producto(1 a 10):</label>
                                        <input type='range' class='form-range' min=''max='10' id='customRange2' name='calificacion'>
                                    </div>
                                    <div class='col-lg-4 d-flex justify-content-center'>
                                        <button class='btn btn-md btn-secondary ' >Agregar Opinion</button>
                                    </div>
                                    </div> 
                                </form>
                                <div class='list-group mt-4 mb-5'>";       
                    }               
                    foreach ($comentarios as $comentario) {
                
                            $id_comentario = $comentario['id_comentario'];
                            $contenido = $comentario['contenido'];
                            $dia = $comentario['dia'];
                            $mes = $comentario['mes'];
                            $anio = $comentario['anio'];
                            $hora = $comentario['hora'];
                            $calificacion = $comentario['calificacion'];
                            echo "
                            <a href='#' class='list-group-item list-group-item-action mb-2' aria-current='true'>
                              <div class='d-flex w-100 justify-content-between'>
                                <h6 class='mb-1'>$contenido</h6>
                                <h6 class='mb-1'>Puntuación: $calificacion</h6>
                                <small>$dia/$mes/$anio</small>
                              </div>
                              <small>$hora</small>
                            </a>";                    
                    }
                    ?>
                    </div>
                    </div>
                                <div class='col-lg-2'></div>

                            </div>
                          </div>";
                    </div>
    </body>
    </html>
    
                   
          



