CREATE TABLE mascotas 
(id integer auto_increment primary key,
nombre varchar(50),
raza varchar(50),
edad varchar(30),
precio double,
img_ruta varchar(100),
raza_url varchar(300)
);

CREATE TABLE clientes
(id integer auto_increment primary key,
nombre varchar(100),
telefono varchar(10),
correo varchar(50)
);

CREATE TABLE ofertas
(id_comprador integer primary key,
id_mascota integer,
precio varchar(30)    
);



INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Zeus','Akita Americano','11 Meses','250000','/img/mascotas/zeus.jpg','https://es.wikipedia.org/wiki/Akita_Americano');


INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Nala','Labrador retriever','6 Meses','250000','/img/mascotas/nala.jpg','https://es.wikipedia.org/wiki/Labrador_retriever');


INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Toby','Rottweiler','3 Meses','250000','/img/mascotas/toby.jpg','https://es.wikipedia.org/wiki/Akita_Americano');


INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Guardian','Pitbull American Stanford','2 Meses','250000','/img/mascotas/guardian.jpeg','250000','https://americanstanford.com/perro/tipos-de-american-stanford-y-otros-pitbull/');

INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Pecas','Dálmata ','2 Meses','250000','/img/mascotas/pecas.jpg','https://es.wikipedia.org/wiki/D%C3%A1lmata_(perro)');


INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Macarena','Pastor Alemán Belga','1 Año','250000','/img/mascotas/macarena.jpg','https://www.hillspet.es/dog-care/dog-breeds/belgian-malinois');


INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Lobo','Husky siberiano','18 Meses','250000','/img/mascotas/lobo.jpg','https://es.wikipedia.org/wiki/Husky_siberiano');

INSERT INTO mascotas (nombre,raza,edad,precio,img_ruta,raza_url) 
VALUES ('Lukas','Boyero de Berna','2 Años','250000','/img/mascotas/lukas.jpg','https://es.wikipedia.org/wiki/Boyero_de_Berna');

<?php 
    $conexion=mysqli_connect("127.0.0.1","danielstvn","daniel123","tienda_mascotas");
        if(mysqli_connect_errno()){
          echo "Conexion Falló:".mysqli_connect_error();
        }
        else{
          //Seleccionar Base de Datos
          mysqli_select_db($conexion,"udenar") or die("No se selecciono Base de Datos");
        
          //Consulta
            $SQL = "SELECT * from mascotas";
            $resultado = mysqli_query($conexion,$SQL);
          
            while($mascotas = mysqli_fech)_array($result){

            }
        }
        ?>


