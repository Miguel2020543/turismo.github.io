<?php

    if ($_POST["mensaje"]) {
        mail("elmich843@gmail.com", "Texto de prueba",
        $_POST["Su mensaje"]. "Mensaje");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link rel="icon" href="IMG/logo_eloro.jpg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link rel="stylesheet" href="CSS/font-awesome.min.css">
    <link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css">
</head>
<body>
    <nav class="nav bg-light nav1">
        <div class="container-fluid div1">
            <img src="IMG/logo_eloro.webp" alt="">
            <img src="IMG/eloro_pueblomagico.webp" alt="">
            <img src="IMG/edomex.png" alt="">
        </div>
    </nav>
    <header class="navbar navbar-expand-md">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse navbar-nav me-auto mb-2 mb-lg-0" id="navbarText">
        <i class="fa fa-home fa-sm"> <a href="#">Inicio</a></i>
        <i class="fa fa-map"> <a href="lugares_turisticos.html">Lugares Turisticos</a></i>
        <i class="fa fa-bed"> <a href="hospedaje.html">Hospedaje</a></i>
        <i class="fa fa-cutlery" > <a href="gastronomia.html">Gastronomia</a></i>
        <i class="fa fa-user" > <a href="#">Acceder</a></i>
        <!-- <input type="search" placeholder="Buscar . . ." id="inputBusqueda"/> -->
      </div>
    </header>

    <div id="carrusel_imagenes" class="carousel carousel-light slide carrusel" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carrusel_imagenes" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carrusel_imagenes" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carrusel_imagenes" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carrusel_imagenes" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carrusel_imagenes" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner carrusel1">
          <div class="carousel-item active" data-bs-interval="4000">
            <img src="IMG/palacio_municipal.jpg" class="d-block w-100" alt="">
            <div class="carousel-caption d-block d-md-block cols-md-1">
              <h5>Palacio Municipal</h5>
              <p class="carousel-caption d-block">Imagen: Secretaria de Cultura y Turismo</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="IMG/museo_mineria.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block d-md-block">
              <h5>Museo de Mineria</h5>
              <p class="carousel-caption d-block">Imagen: Gobierno del Estado de México</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="IMG/presa_brockman.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block d-md-block">
              <h5>Presa Brockman</h5>
              <p class="carousel-caption d-block">Imagen: Secretaria de Cultura y Turismo</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="IMG/teatro_juarez.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block d-md-block">
              <h5>Teatro Juarez</h5>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img src="IMG/socavon_sanjuan.png" class="d-block w-100" alt="...">
            <div class="carousel-caption d-block d-md-block">
              <h5>Socavón San Juan</h5>
              <div class="cita">
                <p class="carousel-caption d-block">Imagen: Secretaria de Cultura y Turismo</p>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carrusel_imagenes" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carrusel_imagenes" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <div class="contenedor" data-anijs="if: scroll, on: window, do: fadeInDown animated, before: scrollReveal">
        <p>En este sitio web podras encontrar información sobre los distintos lugares turisticos
            que hay en el municipio de El Oro, Estado de México. Además de los diferentes restaurantes
            y hoteles que podras encontrar para complementar tu visita al municipio.
        </p>
    </div>

        <!-- Busqueda -->
        <div class="search" id="search">
          <table class="search-tabla" id="searchTabla">
            <thead><tr><td></td></tr></thead>
            <tbody id="tabla"></tbody>
          </table>
    </div>

    <div class="consultas">
        <h2>¿QUE DESEAS CONSULTAR?</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col" data-anijs="if: scroll, on: window, do: bounceIn animated, before: scrollReveal">
              <div class="card">
                <a href="lugares_turisticos.html"><img src="IMG/mirador.jpg" class="card-img-top" alt=""></a>
                <div class="card-body">
                  <h5 class="card-title">Lugares Turisticos</h5>
                </div>
              </div>
              <p>Imagen: Secretaria de Cultura y Turismo</p>
            </div>
            <div class="col" data-anijs="if: scroll, on: window, do: bounceIn animated, before: scrollReveal">
              <div class="card">
                <a href="hospedaje.html"><img src="IMG/hotel_gold.webp" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h5 class="card-title">Hoteles</h5>
                </div>
              </div>
              <p>Imagen: Pueblos Mágicos</p>
            </div>
            <div class="col" data-anijs="if: scroll, on: window, do: bounceIn animated, before: scrollReveal">
              <div class="card">
                <a href="gastronomia.html"><img src="IMG/restaurantes.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <h5 class="card-title">Restaurantes</h5>
                </div>
              </div>
              <p>Imagen: Pueblos Mágicos</p>
            </div>
          </div>
    </div>

    <div class="acercade" data-anijs="if: scroll, on: window, do: fadeInRight animated, before: scrollReveal">
      <h2>ACERCA DE EL ORO</h2>
      <div class="acercade1">
          <p>El pueblo mágico de El Oro es una antigua gloria minera del Estado de México.
            Su nombre se define a través de la emitología nátuatl Teocuitlapilli como "Lo que nos legaron los dioses"
            en relación al metal que se extraia, el oro. Posee un clima templado y algunos de sus tipos de arboles
            son: cedro, eucalipto, fresno, pino y roble. <br>
            Su cocina local ofrece barbacoa y carnitas, ademas de mole rojo o verde con carne de guajolote.
            Entre las artesanias que se pueden comprar destaca la ceramica, los dulces regionales, prendas,
            objetos decorativos y muebles. El municipio se integro al programa Pueblos Mágicos en el año 2011. <br>
          </p>
          <img src="IMG/municipio_eloro.jpg" alt="">
      </div>
      <p class="fuente">Fuente: Secretaria del Turismo.</p>

    </div>

    <div class="localizacion" data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal">
      <h2>¿COMO LLEGAR?</h2>
      <p>El municipio de El Oro se encuentra ubicado en la parte montañosa del estado, al noroeste con Toluca.
        Para trazar una mejor ruta, consulta el mapa en la parte de abajo.
      </p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120129.18297740286!2d-100.1355708526449!3d19.796029882275782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2eefe40bc1865%3A0x2eaa08eb157d1c10!2zRWwgT3JvLCBNw6l4Lg!5e0!3m2!1ses-419!2smx!4v1666112729982!5m2!1ses-419!2smx" width="600" height="450" style="border: 10px;;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div>
      <h1>¿Que te parecio la pagina?</h1>
      <p>Envianos tus comentarios para seguir mejorando.</p>
      <form action="index.php" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="correo">Correo electronico: </label>
        <input type="email" name="correo" id="correo">

        <label for="">Comentarios: </label>
        <textarea name="comentarios" id="" cols="30" rows="10"></textarea>

        <input type="submit" value="asd" name="asd">
      </form>
    </div>

    <footer data-anijs="if: scroll, on: window, do: fadeInUpBig animated, before: scrollReveal">
      <div class="contacto row">
        <div class="col-sm-3">
          <h5>Redes sociales</h5>
          <a href="https://es-la.facebook.com/ayuntamientoeloromexico/" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
          <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
          <a href="http://www.eloromexico.gob.mx/" target="_blank"><i class="fa fa-globe"></i> Pagina H. Ayuntamiento</a>
        </div>
        <div class="col-sm-3">
          <h5>Contacto</h5>
          <a href="#">5528602238</a>
          <a href="#">Dirección de Turismo</a>
          <a href="#">h_ayuntamiento@eloromexico.gob.mx</a>
        </div>
        <div class="col-sm-5">
          <p>Todos los derechos reservados &copy. H. Ayuntamiento de El Oro. 2022</p>
        </div>
      </div>
      
    </footer>
    <script src="JS/buscador.js"></script>
    <script src="JS/DataTables/datatables.min.js"></script>
    <script src="JS/jquery-3.6.0.min.js"></script>
    <script src="JS/load.js"></script>
    <script src="anijs-master/dist/anijs-min.js"></script>
    <script src="anijs-master/dist/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
</body>
</html>