<?php
if (isset($_POST["btnRegistrar"])) {

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

  $rut = $_POST['txtRut'];
  $nombre = $_POST['txtNombre'];
  $apellidos = $_POST['txtApellido'];
  $fechaNacimiento = $_POST['txtFecha'];
  $email = $_POST['txtEmail'];
  $password = $_POST['passUser'];
  $listo = false;


  $sqlusuario = "INSERT INTO usuario (rut, nombre, apellido, fechadenacimiento, clave)
  VALUES ('$rut', '$nombre', '$apellidos', '$fechaNacimiento' , '$password')";

if ($conn->query($sqlusuario) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sqlcorreo = "INSERT INTO correo (correo, rut)
VALUES ('$email','$rut')";

if ($conn->query($sqlcorreo) === TRUE) {
    echo "New record created successfully";
    $listo = true;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

if($listo){
    header('Location: http://localhost/index.php/login');
}else{
    echo "<script>alert('Puede que el rut esté ya registrado.'); </script>";
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
               <center><img  class="img-fluid" src="<?= base_url('images/registrocine.jpg')?>" alt="logo registro" width="100%"></center>
    </header>
    <!--NAV-->
    <nav>    
    </nav>
    <!--ARTICLE-->
    <article>
      <form action="registrousuario" method="post">
      <!--RECOLECTAMOS LA INFORMACIÓN DE USUARIO, ALGUNAS NOS SERÁ ÚTIL A FUTURO A LA HORA DE TRABAJAR CON JS. Aquí entra la información en las otras páginas saldrá.-->

        <div class="container">
           <div class="jumbotron">           
               <div class="form-group">
               <label for="rutUser"><b>RUT:</b></label>
                <input type="text" class="form-control" id="txtRut" name="txtRut" pattern="([0-9]{1,})+-([K-Kk-k0-9]{1})"  title="SE DEBE RESPETAR FORMA DEL RUT: NÚMEROS SEGUIDOS DE UN GUIÓN Y DÍGITO VERIFICADOR. Ejemplo: 1123456-5" required> 
                </div>
                <div class="form-group">
                <label for="txtNombre"><b>Nombre:</b></label>
                <input class="form-control" type="text" name="txtNombre" id="txtNombre" required/>
                </div>
                <div class="form-group">
                <label for="txtApellido"><b>Apellido:</b></label>
                <input class="form-control" type="text" name="txtApellido" id="txtApellido" required/>
                </div>
                <div class="form-group">
                <label for="txtFecha"><b>Fecha Nacimiento:</b></label>
                <input class="form-control" type="date" name="txtFecha" id="txtFecha" placeholder="DD/DD/DDD" required pattern="[0-9]{2}/[0-9]{2}/[0-9]{4}"/>
                </div>
                <div class="form-group">
                <label for="txtEmail"><b>Email:</b></label>
                <input class="form-control" type="email" name="txtEmail" id="txtEmail" required/>
                </div>
                <div class="form-group">
                <label for="passUser"><b>Password:</b></label>
                <input type="password" class="form-control" id="passUser" name="passUser" required>      
               </div>   
              <br>
              <p><input type="submit" name="btnRegistrar" class="btn btn-info btn-block" value="Registrarse"></p>  
              <p><input type="submit" name="btnVolver" class="btn btn-danger btn-block" onclick="window.location.href='http://localhost/index.php/login'" value="Volver al LogIn"></p>                                   
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