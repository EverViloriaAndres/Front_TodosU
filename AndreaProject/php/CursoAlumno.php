<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/comun.css">
    <link rel="stylesheet" href="../css/cursoAlumno.css">
    
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


    <section class="quienes_somos_section">
        <hr>                 
        <h1 class="titulo_sobre-nosotros"><span><?php echo $_SESSION['username']; ?></span></span></h1>
        <div class="debajo_titulo">
            <p class="pasionMusica">Listado de Cursos</p>
            <p class="texto_pasion">Puede desvincularse  del curso que desee. 
                En caso de hacerlo y querer reingresar, se le practicara la
                 prueba de nivel.  </p>
            
        </div>          
          
      </section> 

      <!--insertamos contenido dinamicamente segun los cursos que tenga el usuario en la bbdd-->

      
        <div class="contenedor">

               <!--Cursos del usuario-->

          <?php
          include_once"ReadCurso.php";
          
          ?>
          <div class="salir"><p><a href="destroySession.php">Salir</a></p></div> 
        </div>
        

    

    <!--Footer-->
    <footer>
      <div class="redes">
        <ul>
          <li class="li-foter">
            <a href="#"><img class="icon" src="../img/facebook.png" alt="" /></a>
          </li>
          <li class="li-foter">
            <a href="#"><img class="icon" src="../img/instagram2.png" alt="" /></a>
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
