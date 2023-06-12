
<?php
session_start();

include_once "conexion.php";
if(isset($_POST['login'])){

    $usr = $_POST['username'];
    $pass = $_POST['password'];
    $sqlLogin = "SELECT id_alumno, nombre FROM Alumno Where password= :password and  email = :username";
    

    $statementLogin = $ObjetConection->prepare($sqlLogin);
    $true = $statementLogin->execute(array(':password' => $pass, ':username' => $usr));
    if($true){
        
        $row = $statementLogin->fetch(PDO::FETCH_ASSOC);
        //Me va a salir un solo registro
        $id_alumno = $row['id_alumno'];
        $nom_alumno = $row['nombre'];

        
        if(!isset($_SESSION['idUsuario'])){
          
          $_SESSION['idUsuario'] = $id_alumno;

      }
        if(!isset($_SESSION['username'])){
            
            $_SESSION['username'] = $nom_alumno;

        }
        if($id_alumno<>0){
          echo "
            <script> alert('Hola  $nom_alumno, volvamos al carrito'); </script>
            ";
          echo "<script>window.location.href = 'carrito.php';</script>";
        }else{
          echo "<script> alert('No te encontramos. !Registrate¡'); </script>";
        }

        
        
    }else{
        $code=$statementLogin->errorInfo();
        $err=$statementLogin->errorCode();
        echo $code."------".$err;
    }

    $statementLogin->closeCursor();
    $ObjetConection = null;

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/comun.css" />
  <link rel="stylesheet" href="../css/login.css">
  <title>Login</title>
</head>
<body>
    <!--BARRA DE NAVEGACION-->
<nav class="navegacion">
      <ul>
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../quienessomos.html">Nosotros</a></li>
        <li><a href="cusrsos.php">Cursos</a></li>
        <li><a href="../index.html#contacto">Contactos</a></li>
      </ul>
    </nav>


    <!--Contenedor central-->
  <div class="container">
    <figure class="logo">
      <img src="../img/LogoPEqueño.png" alt="Logo" width="clamp(230px, 15vw, 15vw)" height="200px">
    </figure>
    <form action="login.php" method="POST" class="login-form">
      <div class="form-group">
        <label for="username"><strong>Username:</strong></label>
        <input type="text" id="username" name="username" placeholder="..." >
      </div>
      <div class="form-group">
        <label for="password"><strong>Password:</strong></label>
        <input type="password" id="password" name="password" placeholder="..." required>
      </div>
      <div class="form-group">
        <input type="submit" value="Login" name="login" class="submt">
        <label for="">Registrarse</label>
      </div>
    </form>
  </div>

  <footer>
      <div class="redes">
        <ul>
          <li class="li-foter">
            <a href="#"
              ><img class="icon" src="../img/facebook.png" alt=""
            /></a>
          </li>
          <li class="li-foter">
            <a href="#"
              ><img class="icon" src="../img/instagram2.png" alt=""
            /></a>
          </li>
          <li class="li-foter">
            <a href="#"><img class="icon" src="../img/tik-tok.png" alt="" /></a>
          </li>
          <li class="li-foter">
            <a href="#"
              ><img class="icon" src="../img/whatsapp222.png" alt=""
            /></a>
          </li>
        </ul>
      </div>
      <div class="legal">
        <p class="footer-p">Politicas de cookies</p>
        <p class="footer-p">Informacion legal</p>
        <p class="footer-p">Copyright &copy; 2023 Music Studio AS.</p>
        <p class="footer-p">Politicas de privacidad.</p>
        <p class="footer-p">Registrate</p>
      </div>
    </footer>
</body>
</html>


