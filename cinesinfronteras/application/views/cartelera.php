<?php
  session_start();
  if(!isset($_SESSION["rutUsuario"])){
  // REMOVEMOS TODAS LAS VARIABLES DE SESION.
   session_unset(); 
  // DESTRUIMOS LA SESION... MUAHAHAHAHA !!! 
   session_destroy(); 
   header('Location: http://localhost/index.php/logIn');
  }

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!--META DE BOOTSTRAP-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Hacemos uso del css dentro de bootstrap -->
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css')?>">
  <!-- Hacemos uso del css PROPIO -->
  <link rel="stylesheet" href="<?= base_url('css/csscinecine.css')?>">
  <!-- link del icono -->
  <link rel="icon" href="<?= base_url('images/icongavi.png')?>">
  <title>Cine Sin Fronteras</title>
</head>

<body class="container">
  <!--HEADER-->
  <header>
    <h1>
      <img src="<?= base_url('images/logoprincipal.png')?>" alt="logo del cine" width="35%" /> Cine Sin Fronteras.</h1>
  </header>
  <!--NAV-->
  <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
    <a class="navbar-brand">CINE</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/index.php/home">Inicio</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link">Cartelera</a>
      </li>
    </ul>
    <button class="btn btn-danger" onclick="window.location.href='http://localhost/index.php/login'">CERRAR SESIÓN</button>
  </nav>
  <!--ARTICLE-->
  <br>
  <article>
    <div>
      <h2>Bienvenido a la Cartelera</h2>
      <b>
        <p>INSTRUCCIONES</p>
      </b>
      <p>Seleccione uno de los botones que están abajo para así desplegar su función.</p>
      <p>Cada botón tiene el nombre de la película.</p>
      <p>Una vez presionado se desplegará su información y la opción de solicitar la tarjeta para ir a la función.</p>
    </div>
    <button type="button" id="btnUno" class="btn btn-secondary" onclick="SeleccionarUno()">Godzilla</button>
    <button type="button" id="btnDos" class="btn btn-secondary" onclick="SeleccionarDos()">Mi Vecino Totoro</button>
    <button type="button" id="btnTres" class="btn btn-secondary" onclick="SeleccionarTres()">Django</button>
    <button type="button" id="btnCuatro" class="btn btn-secondary" onclick="SeleccionarCuatro()">Dragon Ball Super</button>
    <button type="button" id="btnCinco" class="btn btn-secondary" onclick="SeleccionarCinco()">Star Wars Episodio 1 (3D)</button>



    <section id="form1" style="display: none;">
      <div class="row">
        <div class="col-sm-7">
          <h1>Godzilla</h1>
          <p>Godzilla (ゴジラ Gojira?), conocida en España como Godzilla, Japón bajo el terror del monstruo,​ es una película japonesa
            de ciencia ficción de 1954, producida y distribuida por Toho Company Ltd. Fue dirigida por Ishiro Honda, con
            efectos especiales a cargo de Eiji Tsuburaya. Fue la primera de muchas películas de “monstruo gigante” (conocidas
            como kaiju) que se producirán en Japón, en muchas de las cuales el protagonista es Godzilla.</p>
          <img class="img-fluid" src="<?= base_url('images/gojira.jpg')?>" alt="gojira" width="40%" />
          <p>
            <strong>Fuente:</strong>
            <a href="https://es.wikipedia.org/wiki/Godzilla_(pel%C3%ADcula_de_1954)">Wikipedia.</a>
          </p>
        </div>
        <div class="col-sm-5">
          <br>
          <p>
            <strong>Horarios:</strong> Lunes a Viernes 19:00 p.m.</p>
          <p>
            <strong>Sala:</strong> The Fear [5-C]</p>
          <p>
            <strong>Recuerde:</strong> Los asientos son por orden de llegada.</p>
          <button type="button" id="btnSolicitar" class="btn btn-warning" onclick="window.location.href='http://localhost/index.php/tarjetaconseguida'">IR A LA FUNCIÓN</button>
        </div>
      </div>
    </section>

    <section id="form2" style="display: none;">
      <div class="row">
        <div class="col-sm-7">
          <h1>Mi Vecino Totoro</h1>
          <p>Mi vecino Totoro (となりのトトロ Tonari no Totoro?) es una película de animación japonesa escrita y dirigida por Hayao
            Miyazaki y producida por Studio Ghibli. El filme —protagonizado por los actores Noriko Hidaka, Chika Sakamoto
            y Hitoshi Takagi— cuenta la historia de una familia y sus interacciones con un espíritu del bosque al que llaman
            "Totoro", en un Japón de la posguerra. Mi vecino Totoro ganó el premio Anime Grand Prix de Animage, el Mainichi
            Film Award y el Kinema Junpo Award en la categoría de "Mejor película" en 1988. También recibió un premio especial
            en los Blue Ribbon Awards de ese mismo año. Es el cuarto largometraje realizado por Studio Ghibli, del cual Totoro
            es su logotipo. Fue elegida por la revista británica Time Out como la mejor película de animación de la historia.</p>
          <img class="img-fluid" src="<?= base_url('images/totoro.jpeg')?>" alt="logo de totoro" width="40%" />
          <p>
            <strong>Fuente:</strong>
            <a href="https://es.wikipedia.org/wiki/Mi_vecino_Totoro">Wikipedia.</a>
          </p>
        </div>
        <div class="col-sm-5">
          <br>
          <p>
            <strong>Horarios:</strong> Lunes a Viernes 17:00 p.m.</p>
          <p>
            <strong>Sala:</strong> The Boss [7-D]</p>
          <p>
            <strong>Recuerde:</strong> Los asientos son por orden de llegada.</p>
          <button type="button" id="btnSolicitar" class="btn btn-warning" onclick="window.location.href='http://localhost/index.php/tarjetaconseguida'">IR A LA FUNCIÓN</button>
        </div>
      </div>
    </section>

    <section id="form3" style="display: none;">
      <div class="row">
        <div class="col-sm-7">
          <h1>Django</h1>
          <p>En un desértico paisaje de la frontera mexicana, una joven mujer, María (Loredana Nusciak) es azotada por un grupo
            de hombres. Aparece un extraño personaje que arrastra un ataúd y dice llamarse Django (Franco Nero). Django rescata
            a María y descubre que en la zona se enfrentan dos bandas rivales que luchan entre sí para obtener la supremacía
            de la comarca: la del mayor Jackson (Eduardo Fajardo), un estadounidense, fanático racista cercano al Ku Klux
            Klan; y la del general Hugo Rodríguez (José Bódalo), mexicano y revolucionario.</p>
          <img class="img-fluid" src="<?= base_url('images/django.jpg')?>" alt="logo de django" width="40%" />
          <p>
            <strong>Fuente:</strong>
            <a href="https://es.wikipedia.org/wiki/Django_(pel%C3%ADcula_de_1966)">Wikipedia.</a>
          </p>
        </div>
        <div class="col-sm-5">
          <br>
          <p>
            <strong>Horarios:</strong> Lunes a Viernes 14:00 p.m.</p>
          <p>
            <strong>Sala:</strong> The End [2-C]</p>
          <p>
            <strong>Recuerde:</strong> Los asientos son por orden de llegada.</p>
          <button type="button" id="btnSolicitar" class="btn btn-warning" onclick="window.location.href='http://localhost/index.php/tarjetaconseguida'">IR A LA FUNCIÓN</button>
        </div>
      </div>
    </section>

    <section id="form4" style="display: none;">
      <div class="row">
        <div class="col-sm-7">
          <h1>Dragon Ball Super: Broly</h1>
          <p>La trama central de la película envuelve el origen de la raza guerrera y de su gente, y también que se centrará
            en el origen de la fuerza de los Saiyajins y lo que significa ser uno. Los sucesos de la película ocurren posteriormente
            a los eventos del final de Dragon Ball Super con el Torneo del Poder.</p>
          <img class="img-fluid" src="<?= base_url('images/Dragonball.jpg')?>" alt="logo de dragon ball" width="40%" />
          <p>
            <strong>Fuente:</strong>
            <a href="https://es.wikipedia.org/wiki/Dragon_Ball_Super:_Broly">Wikipedia.</a>
          </p>
        </div>
        <div class="col-sm-5">
          <br>
          <p>
            <strong>Horarios:</strong> Sábados 16:00 p.m.</p>
          <p>
            <strong>Sala:</strong> Snake [5-A]</p>
          <p>
            <strong>Recuerde:</strong> Los asientos son por orden de llegada.</p>
          <button type="button" id="btnSolicitar" class="btn btn-warning" onclick="window.location.href='http://localhost/index.php/tarjetaconseguida'">IR A LA FUNCIÓN</button>
        </div>
      </div>
    </section>

    <section id="form5" style="display: none;">
      <div class="row">
        <div class="col-sm-7">
          <h1> Star Wars: Episodio I - La amenaza fantasma 3D</h1>
          <p>Star Wars: Episode I - The Phantom Menace - conocida en español como Star Wars: Episodio I - La amenaza fantasma,
            en menor medida como La guerra de las galaxias: Episodio I - La amenaza fantasma y de forma más abreviada como
            La amenaza fantasma— es una película de ópera espacial​ de 1999, escrita y dirigida por el director de cine estadounidense
            George Lucas. Es la cuarta entrega de la saga Star Wars y la primera en el orden cronológico de la misma, después
            de un paréntesis de veintidós años del lanzamiento de Una nueva esperanza. La trama describe la historia del
            maestro jedi Qui-Gon Jinn y de su aprendiz Obi-Wan Kenobi, que escoltan y protegen a la Reina Amidala desde su
            planeta Naboo hasta Coruscant con la esperanza de encontrar una salida pacífica a un conflicto comercial interplanetario
            a gran escala. También trata del joven Anakin Skywalker antes de convertirse en Jedi, presentado como un esclavo
            con un potencial de la Fuerza inusualmente fuerte, y debe lidiar con el misterioso regreso de los Sith. Esta
            película cuenta con un 3D Jamás antes visto en la historia de la humanidad. Las criticas dicen que es como si
            pudieses tocar a C3PO.</p>
          <img class="img-fluid" src="<?= base_url('images/starwars1.jpg')?>" alt="logo de Star Wars 1" width="40%" />
          <p>
            <strong>Fuente:</strong>
            <a href="https://es.wikipedia.org/wiki/Star_Wars:_Episode_I_-_The_Phantom_Menace">Wikipedia.</a>
          </p>
        </div>
        <div class="col-sm-5">
          <br>
          <p>
            <strong>Horarios:</strong> Lunes, Martes y Viernes 10:00 a.m.</p>
          <p>
            <strong>Sala:</strong> Raiden [2-B]</p>
          <p>
            <strong>Recuerde:</strong> Los asientos son por orden de llegada.</p>
          <button type="button" id="btnSolicitar" class="btn btn-warning" onclick="window.location.href='http://localhost/index.php/tarjetaconseguida'">IR A LA FUNCIÓN</button>
        </div>
      </div>

    </section>



    <br>
    <footer class="footerCine"> © 2018 Cine Sin Fronteras. Todos los derechos reservados.</footer>
    <!-- hacemos uso de los scripts -->
    <script src="<?= base_url('js/jcinecine.js')?>"></script>
    <script src="<?= base_url('js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
</body>

</html>