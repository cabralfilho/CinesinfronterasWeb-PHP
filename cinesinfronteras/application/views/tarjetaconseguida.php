<?php
  session_start();
  if(!isset($_SESSION["rutUsuario"])){
  // REMOVEMOS TODAS LAS VARIABLES DE SESION.
   session_unset(); 
  // DESTRUIMOS LA SESION... MUAHAHAHAHA !!! 
   session_destroy(); 
   header('Location: http://localhost/index.php/logIn');
  }
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cinesinfronterasdb";
  
  // Creamos la conexión
  $conn = new mysqli($servername, $username, $password, $dbname);
  // revisamos la conexión
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $todobien = false;

  $rut = $_SESSION["rutUsuario"];

  $sqlCorreo = "SELECT  correo FROM correo WHERE rut = '$rut'";
  $resultadoCorreo =  $conn->query($sqlCorreo);
    /* fetch object array */
    while ($row = $resultadoCorreo->fetch_row()) {
      $correo = utf8_encode($row[0]);    
  }

  $sqltarjeta = "INSERT INTO tarjeta (correo)
  VALUES ('$correo')";

if ($conn->query($sqltarjeta) === TRUE) {
    $todobien = true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if(!$todobien){
  header('Location: http://localhost/index.php/home');
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
  <br>
  <div class="jumbotron">
    <h1 class="display-4">¡Tarjeta conseguida!</h1>
    <p class="lead"><img class="img-fluid" src="<?= base_url('images/felices.jpg')?>" alt="felices" width="60%" /></p>
    <hr class="my-4">
    <b><p>Esperamos que disfrute de la película.</p></b>
    <p class="lead">
    </p>
  </div>
  <br>
  <footer class="footerCine"> © 2018 Cine Sin Fronteras. Todos los derechos reservados.</footer>
  <!-- hacemos uso de los scripts -->
  <script src="<?= base_url('js/jcinecine.js')?>"></script>
    <script src="<?= base_url('js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
</body>

</html>