<?php
session_start();
if(isset($_SESSION["rutUsuario"])){
   // REMOVEMOS TODAS LAS VARIABLES DE SESION.
 session_unset(); 
 // DESTRUIMOS LA SESION... MUAHAHAHAHA !!! 
  session_destroy(); 
}

if (isset($_POST["btnIniciarSesion"])) {

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

$user = $_POST['rutUser'];
$pass =  $_POST['passUser'];

//Obtenemos el usuario
$sqlUser = "SELECT rut, clave FROM usuario WHERE rut = '$user' AND clave = '$pass'";
$resultadoUsuario = $conn->query($sqlUser);

if ($resultadoUsuario->num_rows == 1) {
  $_SESSION["rutUsuario"] = $user;

  $sqlNombres = "SELECT nombre, apellido FROM usuario WHERE rut = '$user'";
  $resultadoNombre =  $conn->query($sqlNombres);
    /* fetch object array */
    while ($row = $resultadoNombre->fetch_row()) {
      $_SESSION["nombreUsuario"] = utf8_encode($row[0]);
      $_SESSION["apellidosUsuario"] = utf8_encode($row[1]);
  }



  header('Location: http://localhost/index.php/home');

}else{
  echo "<script>alert('Rut o Password Incorrectos'); </script>";
}

$conn->close();
}

?>

<!DOCTYPE html>
<html>
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
  <title>Cine sin fronteras</title>
 </head>
 <body class="container">
   <!--HEADER-->
    <header>              
               <center><img  class="img-fluid" src="<?= base_url('images/logoconnombre.png')?>" alt="logo autentificación" width="100%"></center>
    </header>
    <!--NAV-->
    <nav>    
    </nav>
    <!--ARTICLE-->
    <article>
      <form action="logIn" method="post">
      <!--RECOLECTAMOS LA INFORMACIÓN DE USUARIO, ALGUNAS NOS SERÁ ÚTIL A FUTURO A LA HORA DE TRABAJAR CON JS. Aquí entra la información en las otras páginas saldrá.-->

        <div class="container">
           <div class="jumbotron">           
               <div class="form-group">
               <label for="rutUser"><b>RUT:</b></label>
                <input type="text" class="form-control" id="rutUser" name="rutUser" pattern="([0-9]{1,})+-([K-Kk-k0-9]{1})"  title="SE DEBE RESPETAR FORMA DEL RUT: NÚMEROS SEGUIDOS DE UN GUIÓN Y DÍGITO VERIFICADOR. Ejemplo: 1123456-5" required> 
                </div>
                <div class="form-group">
                <label for="passUser"><b>Password:</b></label>
                <input type="password" class="form-control" id="passUser" name="passUser" required>      
               </div>                                        
               <div>
                <a href="http://localhost/index.php/registrousuario" >¿Desea registrarse?</a>
              </div>  
              <br>
              <p><input type="submit" name="btnIniciarSesion" class="btn btn-info btn-block" value="Iniciar Sesión"></p>                        
           </div>  
        </div>
      </form>  
        <!--SECTION-->
        <section>


        </section>
    </article>
    <!--ASIDE-->
    <aside>
    </aside>
    <footer class="footerCine"> © 2018 Cine Sin Fronteras. Todos los derechos reservados.</footer>

    <!-- hacemos uso de los scripts -->
    <script src="<?= base_url('js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?= base_url('js/bootstrap.min.js')?>"></script>
 </body>
</html>