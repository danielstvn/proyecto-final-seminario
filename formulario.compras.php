<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tu Mascota | Compras</title>
</head>
<body>

<div class="container">

<div class="formulario-titulo">
            <h1>Formulario de Compra</h1>
    </div>

    <div class="container-productos-compras">

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
                    
                    $id =($_GET['id']);
                    $SQL = "SELECT * from mascotas where id=$id";
                    $resultado = mysqli_query($conexion,$SQL);
                    
                    $mascotas = mysqli_fetch_assoc($resultado);
                        $nombre = $mascotas['nombre'];
                        $raza =$mascotas['raza'];
                        $edad = $mascotas['edad'];
                        $precio = $mascotas['precio'];
                        $imgRuta = $mascotas['img_ruta'];
                        $razaURL = $mascotas['raza_url'];
                        $id = $mascotas['id'];
                   

                      ?>
                      <div class="producto">
                        
                        <?php 
                           echo "<img src='".$imgRuta."'>";
                        ?>

                        <div class="producto-descripcion">
                            <h1 class="mascota-raza"><?php echo $raza;?></h1>
                            <h3 class="mascota-nombre">Nombre: <?php echo $nombre;?></h3>
                            <h3 class="mascota-edad">Edad: <?php echo $edad;?></h3>
                            
                            <h1 class="mascota-precio">$ <?php echo $precio;?></h1>
                            <span > </span>
                        </div>
                    
                        
                    </div>
                    <?php
                            
        
                      
                  
                }
        ?>
        
    </div>

    <div class="formulario-titulo">
            <h1>Datos de contacto</h1>
    </div>

    
    <div class="formulario-compra">
        <form>
            

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  placeholder="Escriba su nombre y apellido">
                
            </div>
    
            <div class="form-group">
                <label for="email">Correo Electronico</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Ingrese su correo">
                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos su correo electrónico con nadie más..</small>
            </div>
    
            <div class="form-group">
                <label for="exampleInputPassword1">Telefono</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su numero de telefono">
            </div>
    
            <div class="form-button">
                <button type="button" class="btn btn-success">Realizar compra</button>
        
                <a href="index.php">
                <button type="button" class="btn btn-info">Volver a la Tienda</button>
                </a>
            </div>
        </form>
    </div>

   

    </div>
    
</body>
</html>
