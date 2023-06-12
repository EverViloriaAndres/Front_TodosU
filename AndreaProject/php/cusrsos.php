
<?php

session_start();

if (!isset($_SESSION['cursos'])) {
  $_SESSION['cursos'] = array();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {
  $nombreCurso = $_POST['nombre'];
  $precioCurso = $_POST['precio'];
  $imgCurso = $_POST['img'];  

  
  $_SESSION['cursos'][] = array('nombre' => $nombreCurso, 'precio' => $precioCurso, 'img' => $imgCurso);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link rel="stylesheet" href="../css/comun.css">
    <link rel="stylesheet" href="../css/cursos.css">
    
</head>
<body> 
 
     <!--BARRA DE NAVEGACION-->
     <nav class="navegacion">
       <ul>
            <li><a href="../index.html">Inicio</a></li>
            <li><a href="../quienessomos.html">Nosotros</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="../index.html#contacto">Contactos</a></li>
        </ul>
    </nav>


  <!--SECCION DE LOS cursos-->
  <section class="cursos_section">
    <hr>                 
    <h1 class="titulo_ofrecemos"><span>Cursos </span></h1>
    <div class="debajo_titulo">
        <p class="NuestrosCursos"><span>Nuestros Cursos</span></p>
        <p class="texto-Seccion-Cursos">
          En nuestra seccion de cursos,
         encontraras todo lo que necesitas para empezar y/o continuar tu camino por la musica. 
         Ofrecemos clases en linea para varios instrumentos, incluyendo el piano, la guitarra, 
         el violin, el saxofon y mas. Tambien brindamos servicios de
          mantenimiento y reparacion de todos los instrumentos. 
        <p class="exclamacion">!Descubre lo que podemos ofrecerte para mejorar tu experiencia en este camino¡</p>
        <p class="exclamacion"><a href="carrito.php"> ShopCar</a></p>

        
        </p>
        
        <section class="para-galeria"> 
          <div class="galeria">
            <!--Curso Piano-->
            <div class="targ" id="targ-1">
              <div class="desCurso" id="desCurso-1"><p class="pDeCursos">Piano desde cero</p>
                <button class="btnCurso" id="Piano" data-curso="2"><a href="individual.php?data-curso=2">Tomalo</a></button>
              </div>
              <form action="cusrsos.php" method="post">
                <input type="hidden" name="nombre" value="Piano" >
                <input type="hidden" name="precio" value=600000 >
                <input type="hidden" name="img" value="../img/clase_piano.jpg" >
                <button class="icon" type="submit" name="agregar"></button>
              </form>
            </div>
            <!--Curso Guitarra-->
            <div class="targ" id="targ-2">
              <div class="desCurso" id="desCurso-2"><p class="pDeCursos">Guitarra desce cero</p>
                <button class="btnCurso" id="Guitarra" data-curso="1"><a href="individual.php?data-curso=1">Tomalo</a></button>
              </div>
              <form action="cusrsos.php" method="post">
                <input type="hidden" name="nombre" value="Guitarra" >
                <input type="hidden" name="precio" value=578000 >
                <input type="hidden" name="img" value="../img/clase_guitarra.jpg" >
                <button class="icon" type="submit" name="agregar"></button>
              </form>
            </div>
            <!--Curso Sarxo-->
            <div class="targ" id="targ-3">
              <div class="desCurso" id="desCurso-3"><p class="pDeCursos">Sarxofon desce cero</p>
                <button class="btnCurso" id="Sarxo" data-curso="5"><a href="individual.php?data-curso=5">Tomalo</a></button>
              </div>
              <form action="cusrsos.php" method="post">
                <input type="hidden" name="nombre" value="Sarxo" >
                <input type="hidden" name="precio" value=478000 >
                <input type="hidden" name="img" value="../img/clase_sarxo.jpg" >
                <button class="icon" type="submit" name="agregar"></button>
              </form>
            </div>

            <!--Curso Arpa-->
            <div class="targ" id="targ-4">
              <div class="desCurso" id="desCurso-4"><p class="pDeCursos">Arpa desce cero</p>
                <button class="btnCurso" id="Arpa" data-curso="6"><a href="individual.php?data-curso=6">Tomalo</a></button>
              </div>
              <form action="cusrsos.php" method="post">
                <input type="hidden" name="nombre" value="Arpa" >
                <input type="hidden" name="precio" value=500000 >
                <input type="hidden" name="img" value="../img/clase_arpa.jpg" >
                <button class="icon" type="submit" name="agregar"></button>
              </form>
            </div>

            <!--Curso Bongos-->
            <div class="targ" id="targ-5">
              <div class="desCurso" id="desCurso-5"><p class="pDeCursos">Bongos desce cero</p>
                <button class="btnCurso" id="Bongos" data-curso="4"><a href="individual.php?data-curso=4">Tomalo</a></button>
              </div>
              <form action="cusrsos.php" method="post">
                <input type="hidden" name="nombre" value="Bongos" >
                <input type="hidden" name="precio" value=600000 >
                <input type="hidden" name="img" value="../img/clase_bongos.jpg" >
                <button class="icon" type="submit" name="agregar"></button>
              </form>
            </div>

            <!--Curso Violin-->
            <div class="targ" id="targ-6">
              <div class="desCurso" id="desCurso-6"><p class="pDeCursos">Violin desce cero</p>
                <button class="btnCurso" id="Violin" data-curso="3"><a href="individual.php?data-curso=3">Tomalo</a></button>
              </div>
              <form action="cusrsos.php" method="post">
                <input type="hidden" name="nombre" value="Violin" >
                <input type="hidden" name="precio" value=478000 >
                <input type="hidden" name="img" value="../img/clase_violin.jpg" >
                <button class="icon" type="submit" name="agregar"></button>
              </form>
            </div>

          </div>
        </section>
        <h3 class="boton">Elige uno</h3>
    </div>   
   
  </section>






<!--Foooooooot-->

<footer >
    <div class="redes">
     <ul>
        <li class="li-foter"><a href="#"><img class="icon" src="img/facebook.png" alt=""></a></li>
        <li class="li-foter"><a href="#"><img class="icon" src="img/instagram2.png" alt=""></a></li>
        <li class="li-foter"><a href="#"><img class="icon" src="img/tik-tok.png" alt=""></a></li>
        <li class="li-foter"><a href="#"><img class="icon" src="img/whatsapp222.png" alt=""></a></li>
    </ul>
    </div>
    <div class="legal">
    <p class="footer-p">Politicas de  cookies</p>
    <p class="footer-p">Informacion legal</p>
    <p class="footer-p">Copyright &copy; 2023 Music Studio AS.</p>
    <p class="footer-p">Politicas de privacidad.</p>
    <p class="footer-p">Registrate</p>
  </div>
  </footer>
    
</body>
</html>