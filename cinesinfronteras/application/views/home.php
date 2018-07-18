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
   <meta charset="UTF-8">

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
      <h1><img class="img-fluid" src="<?= base_url('images/logoprincipal.png')?>" alt="logo del cine" width="35%"/> Cine sin fronteras.</h1>
    </header>
    <!--NAV-->
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e3f2fd;">
      <a class="navbar-brand">CINE</a>   
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
           <a class="nav-link">Inicio</a>
        </li>  
        <li class="nav-item">
           <a class="nav-link" href="http://localhost/index.php/cartelera">Cartelera</a>
        </li>       
      </ul>
      <button class="btn btn-danger"  onclick="window.location.href='http://localhost/index.php/login'">CERRAR SESIÓN</button>
    </nav>
    <div class="row">
        <div class="col-sm-7">
              <br>
             <h1>Bienvenido a Cine sin fronteras estimado:<?php echo " " . $_SESSION["nombreUsuario"] . " " . $_SESSION["apellidosUsuario"] ?>.</h1> 
             <br>                          
             <h2><p>Información sobre Barra de navegación:</p></h2>
             <b><p>Inicio:</b> Es la página que estás viendo actualmente.</p>
             <b><p>Cartelera:</b> Permite ver la cartelera y solicitar las tarjetas para las películas.</p>
          </div>    
          <div class="col-sm-5">
          <img class="img-fluid" src="<?= base_url('images/bienvenidacine.png')?>" alt="logo de bienvenida" width="100%"/>
          </div>    
  </div>
    <!--ARTICLE-->
    <br>
    <article>    
    <!--SECTION-->
    <section id="" style="display: none;">         
    </section>       
    </article>
    <!--ASIDE-->
    <aside>
    </aside>
    <br>
    <footer class="footerCine"> © 2018 Cine Sin Fronteras. Todos los derechos reservados.</footer>
    <!-- hacemos uso de los scripts -->
    <script src="<?= base_url('js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
 </body>
</html>