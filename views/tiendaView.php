<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Atlanta Site</title>
</head>
<body>
      <div class="container  mt-3 mb-5 d-flex justify-content-center">
      <div class="col-lg-12">
        <h1 class="title text-center text-white">Bienvenido a la tienda bohemia</h1>
        <h2 class=" text-center text-white"> <?php echo $email ?></h2>
        <div class="row">
          <div class="col-lg-12 ">
            <form action="./tienda" class="d-flex justify-content-center text-center" method="get">
            <!-- <p class="text-white">Filtrar Por:</p> -->
            <select name="cat" class="form-select" style="width:200px;"  id="selectCategoria">
              <option value="todos">Todos</option>
              <option value="pantalones">Pantalones</option>
              <option value="remeras">Remeras</option>
              <option value="accesorios">Accesorios</option>
            </select>
            <input type="submit" class="btn btn-success ml-3" value="Filtrar">
            </form>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
        <?php
        // if(count($listaProductos < 1)){
        //   echo "<h1 class='text-white'>Lo lamentamos, no tenemos productos de esta categoria.</h1>";
        // }
        foreach ($listaProductos as $producto) {
            $id_producto = $producto['idProducto'];
            $nombre_prod = $producto['nombre_producto'];
            $precio = $producto['Precio'];
            $img = $producto['img'];
            $stock = $producto['Stock'];
            $desc = $producto['Descripcion'];
            // $arrLength = sizeof($listaProductos);
            echo "<div class='card mt-5 p-card' style='width: 18rem;'>
            <a href='tienda/ver?id=$id_producto'><img src='$img' class='card-img-top' alt='...'></a>
            <div class='card-body p-card-body'>
              <h5 class='card-title'>$nombre_prod</h5>
              <p class='card-title'>$$precio</p>
              <p class='card-title'>Stock: $stock</p>
              <a href='./carrito/agregar?id=$id_producto&email=$email' class='btn btn-primary mr-2' style='border: #ecbe00 1px solid;'>AGREGAR AL CARRITO<i class='fa-solid fa-cart-plus p-1'></i></a>
              </div>
          </div>";
        }
    ?>     
        </div>
      </div>
    </div>
</body>
</html>