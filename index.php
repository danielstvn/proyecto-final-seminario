

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">

    
    <title>Tu Mascota | Principal</title>
</head>
<body>

    <header class="main-header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Tu Mascota</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Compras</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Acerca de</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">SBuscar</button>
                </form>
              </div>
            </div>
          </nav>
        
    </header>

    <main>
        <div class="container-slider">
            <div class="slider" id="slider">
                <div class="slider-section">
                    <img src="img/1.jpg" alt="imagen perro">
                    <p>Tu mejor amigo</p>
                </div>

                <div class="slider-section">
                    <img src="/img/2.jpg" alt="imagen perro">
                    <p>Tu mejor aliado</p>
                </div>

                <div class="slider-section">
                    <img src="/img/3.png" alt="imagen perro">
                    <p>La mejor compania</p>
                </div>

                <div class="slider-section">
                    <img src="/img/4.jpg" alt="imagen perro">
                    <p>Tu mascota</p>
                </div>

            </div>

            <div class="slider-btn" id="btn-right" onclick="Next()">&#62;</div>
            <div class="slider-btn" id="btn-left" onclick="Preview()">&#60;</div>
           
        </div>

        <div class="container">
            <div class="container-productos">

        <?php 

          $mascotas;
            $conexion=mysqli_connect("127.0.0.1","danielstvn","daniel123","tienda_mascotas");
                if(mysqli_connect_errno()){
                  echo "Conexion Falló:".mysqli_connect_error();
                }
                else{
                  //Seleccionar Base de Datos
                  mysqli_select_db($conexion,"tienda_mascotas") or die("No se selecciono Base de Datos");
                
                  //Consulta
                    $SQL = "SELECT * from mascotas";
                    $resultado = mysqli_query($conexion,$SQL);

                    while($mascotas = mysqli_fetch_assoc($resultado)){
                      $nombre = $mascotas['nombre'];
                      $raza =$mascotas['raza'];
                      $edad = $mascotas['edad'];
                      $precio = $mascotas['precio'];
                      $imgRuta = $mascotas['img_ruta'];
                      $razaURL = $mascotas['raza_url'];

                      ?>
                      <div class="producto">
                        <img src="'<?php echo $imgRuta;?>'" alt="imagen mascota">
                        <div class="producto-descripcion">
                            <h3 class="producto-titulo"><?php echo $nombre;?></h3>      
                            <span class="producto-precio"></span>
                        </div>
                        <button type="button" class="btn btn-primary">Detalles de la raza</button>

                        <button type="button" class="btn btn-success">Solicitar</button>
                    </div>
                    <?php
                            
                    }

                
        
                    mysqli_free_result($resultado);
                      
                  
                }
        ?>
        

            </div>
        </div>
    </main>
    
    <script src="/js/script.js"></script>
   
</body>
</html>